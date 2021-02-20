<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Packages;
use App\Deposit;
use App\Transaction;
use App\DepositProof;
use App\TradeIncome;

use App\Mail\DepositRequestMail;

class TransactionController extends Controller
{
    public function deposit(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'plan_id' => 'required'
        ]);

        $plan = Packages::find($request->plan_id);
        if(is_null($plan)) {
            $request->session()->flash('danger', 'Invalid Package Selected!');
            return redirect()->back();
        }

        $amount = (float) $request->amount;
        $lbound = (float) $plan->start; $ubound = (float) $plan->end;

        $user_id = auth()->user()->id;
        $start_date = time() . '';
        $end_date = strtotime("+".$plan->duration." day", $start_date);
        $due_amount = $amount + ( $amount * 0.30 );

        if($lbound >= $amount || $amount <= $ubound) {
            $deposit = Deposit::create([
                'amount' => $amount,
                'package_id' => $plan->id,
                'user_id' =>  $user_id,
                'start_date' => $start_date,
                'due_date' => $end_date,
                'due_amount' => $due_amount,
                'method' => $request->method
            ]);
            Transaction::create([
                'user_id' => $user_id,
                'deposit_id' =>  $deposit->id,
                'type' => 'Deposit'
            ]);
            
            try {
                $email = auth()->user()->email;
                $username = auth()->user()->name;
                $message = "$ $amount USD";
                \Mail::to($email)->send(new DepositRequestMail($username, $message));
            } catch(\Exception $e) {
                \Log::alert("Deposit Request mail not sent!");
            }

            $request->session()->flash('success', 'Deposit initiated! Please make your payment.');
            return redirect()->route('payment', ['id' => $deposit->id]);
        } else {
            $request->session()->flash('danger', 'Please your investment amount must fall within the selected Plan range!');
            return redirect()->back();
        }
    }

    public function payment($id, Request $request)
    {
        $user_id = auth()->user()->id;
        $deposit = Deposit::where(['user_id' => $user_id, 'id' => $id])
            ->with(['plan', 'proofs'])
            ->get()
            ->first();
        if(is_null($deposit))
            {
                return redirect()->back();
            }
        if($deposit->status == "Completed") {
            $request->session()->flash('success', 'Payment already completed');
            return redirect()->route('home');
        }
        return view('payment')->with(['deposit' => $deposit]);
    }

    public function deposits(Request $request)
    {
        return view('deposits');
    }

    public function proof(Request $request)
    {
        $this->validate($request, [
            'deposit_id' => 'required',
            'transaction_code' => 'required'
        ]);

        $transaction = Transaction::where(['deposit_id' => $request->deposit_id, 'type' => 'Deposit'])
            ->get()
            ->first();
        if(is_null($transaction)) {
            $request->session()->flash('danger', "Invalid deposit record selected!");
            return redirect()->back();
        }

        $deposit = DepositProof::create([
            'user_id' => auth()->user()->id,
            'deposit_id' => $request->deposit_id,
            'transaction_id' => $transaction->id,
            'transaction_code' => $request->transaction_code
        ]);

        $request->session()->flash('success', "Deposit proof added successfully!");
        return redirect()->back();
    }
    
    public function depositsHistory(Request $request)
    {
        $deposits = Deposit::where(['user_id' => auth()->user()->id])
            ->with(['plan', 'proofs'])
            ->paginate(15);
        return view('deposit-history')->with(['deposits' => $deposits]);
    }

    public function all(Request $request)
    {
        $trxs = Transaction::where(['user_id' => auth()->user()->id])
            ->with(['deposit', 'deposit.plan', 'deposit.proofs'])
            ->paginate(15);
        return view('transaction')->with(['trxs' => $trxs]);
    }

    public function income(Request $request)
    {
        $trxs = TradeIncome::where(['user_id' => auth()->user()->id])
            ->with(['deposit', 'deposit.plan'])
            ->paginate(15);
        return view('income')->with(['trxs' => $trxs]);
    }    
}
