<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $referral_code = mt_rand(1000000, 9999999);

        $u = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'referral_code' => $referral_code,
        ]);


        if(isset(request()->referral)) {
            $rusr = User::where(['referral_code' => request()->referral])
                ->get()
                ->first();
            if(!is_null($rusr))
                \App\Referral::create(['user_id' => $u->id, 'has_injected' => 0, 'referral_id' => $rusr->id]);    
        }
        
        try {
            $name = $u->name;
            \Mail::to($u->email)->send(new WelcomeMail($name));
        } catch(\Exception $e) {
            \Log::alert("Deposit Request mail not sent!");
        }

        return $u;
    }

    public function showRegistrationForm(Request $request)
    {
        $ref = $request->ref ?? 5676108;
        return view('auth.register')->with(['ref' => $ref]);
    }
}
