<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Important: Include the GuzzleClient
// use GuzzleHttp\Client;

use App\Deposit;
use App\Transaction;

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

        $xrate = $bitcoinInfo["last"] ?? 10000.26;

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

        return view('home')->with([
            'xrate' => number_format($xrate, 2, '.', ','),
            'deposit' => number_format($deposit, 6, '.', ','),
            'income' => number_format($income, 2, '.', ', '),
            'income_btc' => number_format($income_btc, 6, '.', ', '),
            'current_investment' => number_format($current_investment, 2, '.', ', '),
            'current_investment_btc' => number_format($current_investment_btc, 6, '.', ', '),
            'plan' =>  $plan,
            'deposits' =>  $deposits
        ]);
    }

    public function deposit() 
    {
        $bitcoinInfo = $this->getCryptoCurrencyInformation();

        $xrate = $bitcoinInfo["last"] ?? 10000.26;
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
        // Create a new Guzzle Plain Client
        // $client = new Client();

        // Define the Request URL of the API with the providen parameters
        $requestURL = "https://blockchain.info/ticker";

        // Execute the request
        $singleCurrencyRequest = file_get_contents($requestURL, false);
        
        // Obtain the body into an array format.
        $body = json_decode($singleCurrencyRequest , true);

        // If there were some error on the request, throw the exception
        // if(array_key_exists("error" , $body)){
        //     throw $this->createNotFoundException(sprintf('Currency Information Request Error: $s', $body["error"]));
        // }

        // Returns the array with information about the desired currency
        $result =  $body["USD"];
        return $result;
    }

    public function topup()
    {
        return view('topup');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('login');
    }
}
