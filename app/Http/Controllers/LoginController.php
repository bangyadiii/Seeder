<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    //fungsi untuk login
    public function authenticate(Request $request){

        //validasi login
        $credentials = $request->validate([
            'username' => "required",
            'password' => "required"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('timeline');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
            'password' => 'password salah',
        ]);
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
