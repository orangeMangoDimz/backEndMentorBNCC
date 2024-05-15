@extends('partial/base')

@section('title', 'Home')

@section('style')
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection

@section('content')
    <div class="d-flex justify-content-crnter align-items-start flex-column gap-4">
        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
            href="{{ route('food.create') }}">
            + Add Food
        </a>

        <div class="d-flex justify-content-center align-items-center gap-4">
            <a class="btn btn-outline-dark" href="{{ route('admin.home') }}">All Categories</a>
            @foreach ($categories as $category)
                <a class="btn btn-outline-dark" href="{{ route('admin.filter', $category) }}">{{ $category->name }}</a>
            @endforeach
        </div>

        <h3>Food List</h3>
        <table class="table table-hover table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $num = 1; ?>
                @foreach ($foods as $food)
                    <tr style="vertical-align: middle">
                        <th scope="row">{{ $num++ }}</th>
                        <td>
                            <img style="width: 150px; height: 150px display:block;" src="{{ $food->image ? asset('img/' . $food->image) : 'https://placehold.co/400/orange/white?text=Food' }}"
                                alt="food-image">
                        </td>
                        <td>
                            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                href="{{ route('food.detail', $food) }}">
                                {{ $food->name }}
                            </a>
                        </td>
                        <td>{{ $food->category->name }}</td>
                        <td>Rp {{ number_format($food->price) }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-4">
                                <a class="btn btn-outline-primary" href="{{ route('food.edit', $food) }}">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <form action="{{ route('food.delete', $food) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
