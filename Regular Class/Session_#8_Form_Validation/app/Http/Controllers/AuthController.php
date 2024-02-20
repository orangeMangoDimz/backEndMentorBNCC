<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function auth_login(AuthRequest $request)
    {
        // dd($request->all());
        // dd($request->input('email'));
        // return redirect()->back()->withInput();
        // $request->validate([
        //     "email" => "required|email",
        //     "password" => "required|string"
        // ]);

        $request->validated();

        return view('home');
    }
}



// ctrl + p
