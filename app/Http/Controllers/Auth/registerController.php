<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(Request $request)
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        try {
            $usuario = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            Auth::login($usuario);

            return redirect()->route('home');
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            return redirect()->back()->with('error', 'Error: Hubo un problema al registrar el usuario.');
        }
    }
}
