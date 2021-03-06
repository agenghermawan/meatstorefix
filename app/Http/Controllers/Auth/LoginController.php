<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleCallback()
    {
         $callback = Socialite::driver('google')->stateless()->user();
         $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'email_verified_at' => date('Y-m-d H:i:s', time()),
        ];
    $user = User::firstOrCreate(['email' => $data['email']],$data);
        Auth::login($user,true);

        return redirect('/');
    }
}
