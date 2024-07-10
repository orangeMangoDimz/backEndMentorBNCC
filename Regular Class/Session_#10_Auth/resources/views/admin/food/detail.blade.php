@extends('partial.base')

@section('title', 'Create a Food')

@section('content')
    <div class="row" style="min-height: 100vh">
        <div class="col-4 d-flex justify-content-center align-items-center flex-column border-1 border-end border-dark">
            <p>
                External library for image
            </p>
        </div>
        <div class="col-8 d-flex justify-content-center align-items-start flex-column ps-5">
            <h3 class="mb-3">Food Detail</h3>
            <div class="mb-3">
                <h3>Name</h3>
                <p>
                    {{ $food->name }}
                </p>
            </div>
            <div class=" mb-3">
                <h3>Category</h3>
                <p>
                    {{ $food->category->name }}
                </p>
            </div>
            <div class="mb-3">
                <h3>Description</h3>
                <p>
                    {{ $food->description }}
                </p>
            </div>
            <div class="mb-3">
                <h3>Price</h3>
                <p>
                    Rp {{ number_format($food->price) }}
                </p>
            </div>
        </div>
    </div>
@endsection
