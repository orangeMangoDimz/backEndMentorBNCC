@extends('partial.base')

@section('title', 'Menu')

@section('content')

    <h3 class="mb-4">Choose Your Menu</h3>
    <div class="d-flex justify-content-around align-items-center flex-wrap gap-4">
        {{-- Menu Makanan 1 --}}
        @foreach ($foods as $food)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top"
                    src="{{ $food->image ? asset('img/' . $food->image) : 'https://placehold.co/400/orange/white?text=Food' }}"
                    alt="food-image">
                <div class="card-body">
                    <span class="badge text-bg-primary">{{ $food->category->name }}</span>
                    <h5 class="card-title">{{ $food->name }}</h5>
                    <p class="card-text">{{ Str::limit($food->description, 150, '...') }}</p>
                    <p class="text-semibold text-danger">Rp {{ number_format($food->price) }}</p>
                    <div class="d-flex w-100 justify-content-around align-items-center">
                        <a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="{{ route('food.detail', $food) }}">
                            Detail
                        </a>
                        <a href="#" class="btn btn-dark">Order</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $foods->links() }}
    </div>
@endsection
