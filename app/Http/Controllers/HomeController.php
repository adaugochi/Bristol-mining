<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Important: Include the GuzzleClient
// use GuzzleHttp\Client;

use App\Deposit;
use App\Transaction;
use App\Packages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bitcoinInfo = $this->getCryptoCurrencyInformation();
        
        if(!$bitcoinInfo) {
            $bitcoinInfo = 47000.80;
        } 

        $xrate = $bitcoinInfo;

        $income = $this->getTotalIncome() ?? 0.00;
        $deposit =  0.0000000;
        $plan = null ?? "PLAN"; 

        $deposits = Deposit::where(['user_id' => auth()->user()->id])
            ->with(['plan', 'income'])
            ->limit(10)
            ->orderBy('id', 'DESC')
            ->get(); 

        // calculate Current Investment
        $current_investment = $this->getTotalActivePackageDeposit() ?? 0.00; // $
        $current_investment_btc = $current_investment / $xrate;

        // calculate income

        $income_btc = $income / $xrate;

        $referral_count = $this->getReferralCount(auth()->user()->id);

        if(auth()->user()->is_admin) {
            $plans = \App\Packages::all();
            
           
            return view('admin-home')->with([
                'xrate' => number_format($xrate, 2, '.', ','),
                'plans' =>  $plans,
                 
            ]);
        }else {
            return view('home')->with([
                'xrate' => number_format($xrate, 2, '.', ','),
                'deposit' => number_format($deposit, 6, '.', ','),
                'income' => number_format($income, 2, '.', ', '),
                'income_btc' => number_format($income_btc, 6, '.', ', '),
                'current_investment' => number_format($current_investment, 2, '.', ', '),
                'current_investment_btc' => number_format($current_investment_btc, 6, '.', ', '),
                'plan' =>  $plan,
                'deposits' =>  $deposits,
                'referral_count' => $referral_count
            ]);
        }
    }

    public function editPlan(Request $request, $id)
    {
        if(auth()->user()->is_admin) {
            $plan = \App\Packages::find($id);
        
            return view('admin-plan-edit')->with(['p'=> $plan]);
        } else {
            abort(404);
        }
    }
    
    public function editPlanSubmit(Request $request)
    {
        if(auth()->user()->is_admin) {
            $attr = $request->except('_token', 'submit');
            Packages::where(['id' => $attr['id']])
                ->update($attr);
            // dd($attr);
            $request->session()->flash('success', 'Package updated successfully!');
            return redirect("home");
        } else {
            abort(404);
        }
    }

    public function userDelete(Request $request) {
        if(auth()->user()->is_admin) {
            
            \App\Referral::where(['user_id' => $request->id])->delete();
            \App\Referral::where(['referral_id' => $request->id])->delete();
            \App\Transaction::where(['user_id' => $request->id])->delete();
            \App\DepositProof::where(['user_id' => $request->id])->delete();
            \App\Deposit::where(['user_id' => $request->id])->delete();
            
            \App\User::find($request->id)->delete();
            $request->session()->flash('success', 'User deleted successfully!');
            return redirect()->back();
        } else {
            abort(404);
        }
    }

    public function getUsers(Request $request)
    {
        if(auth()->user()->is_admin) {
            $users = \App\User::orderBy('id', 'DESC')->get();
        
            return view('admin-users')->with(['users'=> $users]);
        } else {
            abort(404);
        }
    }

    public function deposit() 
    {

        $bitcoinInfo = $this->getCryptoCurrencyInformation();
        
        if(!$bitcoinInfo) {
            $bitcoinInfo = 47000.80;
        } 
        
        return view('deposit')->with([
            'xrate' => $xrate
        ]);
    }


    public function getTotalIncome() {
        $deposits = Deposit::where(['user_id' => auth()->user()->id, 'status' => 'Active'])
            ->with(['income'])
            ->get();
        if(sizeof($deposits) == 0) {
            return 0.00;
        }
        $total = 0.00;
        foreach ($deposits as $d) {
            $inc = $d->income;
            if( sizeof($inc) > 0 ) {
                foreach ($inc as $i ) {
                    $total += (float) $i->amount;
                }
            }
        }
        return $total;
    }

    public function getTotalActivePackageDeposit() {
        $deposits = Deposit::where(['user_id' => auth()->user()->id, 'status' => 'Active'])
            ->get();
        if(sizeof($deposits) == 0) {
            return 0.00;
        }
        $total = 0.00;
        foreach ($deposits as $d) {
            $total += (float) $d->amount;
        }
        return $total;
    }


    /**
     * Retrieves the complete information providen by the coinmarketcap API from a single currency.
     * By default returns only the value in USD.
     * 
     * WARNING: do not use this code in production, it's just to explain how the API works and how
     * can the information be retrieved. See step 3 for final implementation. 
     *
     * @param string $currencyId Identifier of the currency
     * @param string $convertCurrency
     * @see https://coinmarketcap.com/api/
     * @return mixed 
     */
    private function getCryptoCurrencyInformation(){

        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, "https://api.coingate.com/v2/rates/merchant/BTC/USD");
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        
        $rates = curl_exec($cURLConnection);
        curl_close($cURLConnection);
        

        return $rates;
            
    }

    private function getReferralCount($user_id) {
        $referrals = \App\Referral::where(['referral_id' => $user_id])
            ->with(['referral'])
            ->get();
        return sizeof($referrals);
    }

    public function topup()
    {
        return view('topup');
    }

    public function profile()
    {
        $user = \App\User::find(auth()->user()->id);
        return view('profile')->with(['user' => $user]);
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'btc_wallet' => 'required'
        ]);
            \App\User::where(['id' => auth()->user()->id])
                ->update(['name' => $request->name,
                    'btc_wallet' => $request->btc_wallet
                    ]);
        $request->session()->flash('success', 'Profile record updated successfully!');
        return redirect()->back();
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('login');
    }
}
