<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        /*
        array: [
            0 => [
                "invoice" => [

                ]
                "invoiceDetail" => [

                ]
            ]
            1 => [

            ]
        ]
        */

        /*
                ["name"] => "dimas"
        */

        $user_id = auth()->user()->id;
        $invoice = Invoice::where("user_id", $user_id)->get();
        $finalInvoice = [];
        if ($invoice) {
            $invoiceDetail = [];
            foreach ($invoice as $item) {
                $invoiceDetailInfo = InvoiceDetail::where("invoice_header_id", $item->id)->get();
                array_push($invoiceDetail, $invoiceDetailInfo);
            }
            foreach ($invoice as $key => $value) {
                $finalInvoice[$key] = [
                    "invoice" => $value,
                    "invoiceDetail" => $invoiceDetail[$key]
                ];
            }
        }
        return view('invoice.index', compact("finalInvoice"));
    }
}
