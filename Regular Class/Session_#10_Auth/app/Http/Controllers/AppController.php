<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('index', compact('foods'));
    }

    public function menu()
    {
        $foods = Food::all();
        return view('nav.menu', compact('foods'));
    }

    public function about()
    {
        return view('nav.about');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function admin()
    {
        $foods = Food::all();
        $categories = Category::all();
        return view('admin.index', compact(['foods', 'categories']));
    }

    public function filter()
    {
        $foods = Food::all();
        $categories = Category::all();
        return view('admin.index', compact(['foods', 'categories']));
    }

    public function userLogin(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            $request->session()->regenerate();
            if (Auth::user()->name == "admin") {
                return redirect()->route('admin.home');
            }
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors([
            'error' => 'Invalid Credentials!'
        ]);
    }

    public function userRegister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
