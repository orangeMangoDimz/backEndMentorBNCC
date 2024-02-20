<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        // return view('home');
        // return redirect('/login');
        return redirect()->route('login');
    }
}
