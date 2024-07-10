<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('index', compact('foods'));
    }

    public function menu()
    {
        return view('nav.menu');
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
        // ctrl + p
        $foods = Food::all();
        $categories = Category::all();
        return view('admin.index', compact(['foods', 'categories']));
    }
}
