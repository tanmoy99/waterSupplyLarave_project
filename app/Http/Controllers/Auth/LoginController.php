<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($request->session()->has('intended_url')) {
            return redirect($request->session()->get('intended_url'));
        } else {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }

    public function showLoginForm()
    {
        session(['intended_url' => url()->previous()]);
        return view('auth.login');
    }
}
