@extends('partial.base')

@section('title', 'Home Page')

@section('style')
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('content')

    <div class="w-100 d-flex justify-content-center align-items-center flex-column gap-4" style="min-height: 50vh">
        <h3 class="fw-semibold">Want to Order a New Food?</h3>
        <div class="w-50">
            {{-- Search form --}}
            <form action="" class="d-flex justify-content-center align-items-center gap-4">
                <input type="text" class="form-control" placeholder="Search for a food ...">
                <button class="btn btn-outline-dark">Search</button>
            </form>
        </div>
    </div>

    <h3 class="mb-4">Recomendation</h3>
    <div class="d-flex justify-content-around align-items-center flex-wrap gap-4 my-5">
        @foreach ($foods as $food)
        {{-- Menu Makanan 1 --}}
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <span class="badge text-bg-primary">{{ $food->category->name }}</span>
                <h5 class="card-title">{{ $food->name }}1</h5>
                <p class="card-text">{{ Str::limit($food->description, 150, '...') }}.</p>
                <p class="text-semibold text-danger">Rp {{ number_format($food->price) }}</p>
                <div class="d-flex w-100 justify-content-around align-items-center">
                    <a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                        href="{{ route('food.detail') }}">
                        Detail
                    </a>
                    <a href="#" class="btn btn-dark">Order</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
