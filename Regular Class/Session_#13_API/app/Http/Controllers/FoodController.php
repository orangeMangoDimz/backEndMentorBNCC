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
        $image = $request->file('image');
        $imgName = time() . "_" . $image->getClientOriginalName();
        $image->move(public_path("img"), $imgName);

        Food::create([
            'image' => $imgName,
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

    public function edit(Food $food)
    {
        $categories = Category::all();
        return view('admin.food.edit', compact(['food', 'categories']));
    }

    public function update(Request $request, Food $food)
    {
        if ($request->hasFile('image')) {
            // get Image
            $image = $request->file('image');
            $imgName = time() . "_" . $image->getClientOriginalName();
            $image->move(public_path("img"), $imgName);

            $food->update([
                "image" => $imgName,
                "name" => $request->input('name'),
                "category" => $request->input('category'),
                "description" => $request->input('description'),
                "price" => $request->input('price'),
            ]);
            $food->save();
        } else {
            $food->update([
                "name" => $request->input('name'),
                "category" => $request->input('category'),
                "description" => $request->input('description'),
                "price" => $request->input('price'),
            ]);
            $food->save();
        }
        return redirect()->route('admin.home');
    }

    public function order(Food $food){
        /*
        [
            [1] => [
                "name" => "food1",
                "price" => 1000,
                "quantity => 2
            ],
            [2] => [
                "name" => "food2",
                "price" => 2000,
                "quantity => 1
            ]
        ]
        */
        $food_id = $food->id;
        $cart = session()->get('cart', []);
        if (isset($cart[$food_id])) {
            $cart[$food_id]["quantity"]++;
        } else {
            $cart[$food_id] = [
                "id" => $food_id,
                "name" => $food->name,
                "image" => $food->image,
                "category" => $food->category->name,
                "price" => $food->price,
                "quantity" => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->route('home');
    }

    public function deleteOrder($id) {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->route('checkout');
    }
}
