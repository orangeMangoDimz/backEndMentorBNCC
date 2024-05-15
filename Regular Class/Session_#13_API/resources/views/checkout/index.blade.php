@extends('partial/base')

@section('title', 'Invoice')

@section('style')
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('content')
    @if ($foods)
        <section class="p-3">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-semibold fs-2 mb-0 text-black">Shopping Cart</h3>
                    </div>

                    {{-- item 1 --}}
                    <?php $subTotal = 0; ?>
                    @foreach ($foods as $food)
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img style="width: 150px; height: 150px display:block;"
                                            src="{{ isset($food['image']) ? asset('img/' . $food->image) : 'https://placehold.co/400/orange/white?text=Food' }}"
                                            alt="food-image">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">{{ $food['name'] }}</p>
                                        <p><span class="badge text-bg-primary">{{ $food['category'] }}</p>
                                    </div>

                                    {{-- change quantity --}}
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        </button>
                                        <input id="form1" min="0" name="quantity" value="{{ $food['quantity'] }}"
                                            type="number" disabled
                                            class="form-control form-control-sm bg-white text-center" />
                                        </button>
                                    </div>

                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">Rp {{ number_format($food['price']) }}</h5>
                                    </div>

                                    <div class="col-2">
                                        <form action="{{ route('food.order.delete', $food['id']) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php $subTotal += $food['price'] * $food['quantity']; ?>
                    @endforeach

                    <div class="card rounded-3 mb-4 p-4">
                        <h4 class="mb-3">Payment</h4>
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-semibold">Sub Total</h6>
                            <h6 class="fw-semibold">Rp {{ number_format($subTotal) }}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-semibold">Administration Fee</h6>
                            <h6 class="fw-semibold">Rp 5.000</h6>
                        </div>
                        <hr>
                        <div class="mt-3 mb-3 d-flex justify-content-between">
                            <h4 class="fw-bold">Total Price</h4>
                            <h4 class="fw-bold text-danger">Rp {{ number_format($subTotal + 5000) }}</h4>
                        </div>
                    </div>

                    <div class="t-3">
                        <form action="{{ route('checkout.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="total_price" value="{{ $subTotal + 5000 }}">
                            <button class="w-100 btn btn-outline-dark btn-block btn-lg">Checkout Now!</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    @else
        <h1 class="text-center text-danger fw-semibold my-5">There's No Cart Yet!</h1>
    @endif
@endsection
