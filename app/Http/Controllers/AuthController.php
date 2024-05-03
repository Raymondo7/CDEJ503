<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view("admin.login");
    }
    public function handleLogin(Request $req)
    {
        $credentials = $req->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended('/cdej0503/nouveauPost');
        } else {
            return redirect()->route('login')->with('error', 'Identifiant ou mot de passe incorrect !');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
