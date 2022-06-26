<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');


    }
       /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $message
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $message)
    {
        return Validator::make($message, [
            'email.required' => 'We need to know your e-mail address!',
            'email.email' => 'your email is wrong,',
            'passsword.required' => 'You need to fill in a password',
            'password.password' =>'you password is wrong'


        ]);
    }

}
