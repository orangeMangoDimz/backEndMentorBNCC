<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $foods = session()->get('cart', []);
        return view('checkout.index', compact('foods'));
    }

    public function store(Request $request)
    {
        $cart = session()->get('cart', []);
        /*
        $cart = [
            [87] => [
                'id' => 1,
                'name' => 'food1',
                'price' => 1000,
                'qty' => 2
            ],
            [2] => [
                'id' => 2,
                'name' => 'food2',
                'price' => 2000,
                'qty' => 1
            ]
        ]
        */
        $invoice = Invoice::create([
            "user_id" => auth()->user()->id,
            "total_price" => $request->input('total_price'),
        ]);

        /*
        Invoice:
            1. Burger -> invoice_detail
            2. Pasta -> invoice_detail
            3. Pizza -> invoice_detail
        */
        foreach ($cart as $item) {
            InvoiceDetail::create([
                "invoice_header_id" => $invoice->id,
                "food_id" => $item["id"],
                "quantity" => $item['quantity']
            ]);
        }
        return redirect()->route('home');
    }
}
