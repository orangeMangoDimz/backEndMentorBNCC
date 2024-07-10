<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function create()
    {
        return view('admin.food.create');
    }

    public function edit()
    {
        return view('admin.food.edit');
    }

    public function detail()
    {
        return view('admin.food.detail');
    }
}
