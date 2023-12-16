<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        
        return view('login.index');

    }
//  jika email pengen ketat email:dns
    public function authenticate(Request $request){

        $credentials = $request->validate([

            'email' => 'required|email',
            'password' => 'min:3'

        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboards');
        }
        return back()->with('loginError','Login failed, Coba Periksa Email dan Password Anda!');
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');

    }

}
