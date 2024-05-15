@extends('partial/base')

@section('title', 'Invoice')

@section('style')
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('content')
    @if ($finalInvoice)
    @foreach ($finalInvoice as $item)
    <div class="card my-5 p-3">
        <div class="card-body">
            <div class="col-md-12">
                <div class="col-6">
                    <h3 class="fw-bold">Invoice ID : {{ $item["invoice"]->id }}</h3>
                </div>
                <div class="text-center">
                    <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <ul class="list-unstyled">
                        <li class="text-muted">To: <span class="fw-bold">{{ auth()->user()->name }}</span></li>
                        <li class="text-muted">payment: <span class="fw-bold">Cash</span></li>
                        <li class="text-muted"><i class="fas fa-phone"></i> Date: <span class="fw-bold">{{ $item["invoice"]->created_at->format("d-M-Y") }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row my-2 mx-1 justify-content-center">
                <table class="table table-striped table-borderless">
                    <thead style="background-color:#84B0CA ;" class="text-white text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">SubTotal</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($item["invoiceDetail"] as $sub_item)
                        <tr>
                            <td>Heloo</td>
                            <td>{{ $sub_item->food->name }}</td>
                            <td>{{ $sub_item->food->price }}</td>
                            <td>{{ $sub_item->quantity }}</td>
                            <td>{{ $sub_item->subTotal }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between text-muted ms-3"><span
                                class="text-black me-4">Total</span>Rp {{ $item["invoice"]->total_price - 5000 }}}</li>
                        <li class="d-flex justify-content-between text-muted ms-3 mt-2"><span
                                class="text-black me-4">Administration Fee</span>Rp 5000</li>
                    </ul>
                </div>
                <h3 class="text-black float-start fw-bold d-flex justify-content-between">
                    <span class="text-black me-3"> Total Price</span>
                    <span style="font-size: 25px;">Rp {{ number_format($item["invoice"]->total_price) }}</span>
                </h3>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <h1 class="text-center text-danger fw-semibold my-5">There's No Invoice  Yet!</h1>
    @endif
@endsection
