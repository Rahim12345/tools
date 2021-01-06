<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->flash();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            toastr()->success("Welcome back again");
            return redirect()->route('admin.homepage');
        }
        else
        {
            return view('auth.login')->with('error','Email or password is incorrect');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
