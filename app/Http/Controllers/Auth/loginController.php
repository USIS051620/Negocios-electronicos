<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = request()->only('email', 'password');

        $remember = request()->filled('rememberme');
        
        if (Auth::attempt($credentials, $remember)) {

            request()->session()->regenerate();

            return redirect()->route('home');
        }

        return redirect()->back();
    }
}
