<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.pages.auth.login');
    }
    public function action(Request $request)
    {
        $val = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($val)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        toastr()->error('Gagal Login');
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
