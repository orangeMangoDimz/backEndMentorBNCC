<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin.food.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Food::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);
        return redirect()->route('admin.home');
    }

    public function detail(Food $food)
    {
        return view('admin.food.detail', compact('food'));
    }

    public function delete(Food $food)
    {
        $food->delete();
        return redirect()->route('admin.home');
    }
}
