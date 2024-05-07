@extends('partial.base')

@section('title', 'Update Food')

@section('script')
    {{-- CDN for holder js --}}
    <script>
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');

        imageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection

@section('content')
    <form action="{{ route('food.update', $food) }}" class="w-100" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row" style="min-height: 100vh">
            <div class="col-4 d-flex justify-content-center align-items-center flex-column border-1 border-end border-dark">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload your new food image!</label>
                    <div style="max-width: 350px; max-height: 350px">
                        <img class="w-100 h-100" style="display:block;"
                            src="{{ $food->image ? asset('img/' . $food->image) : 'https://placehold.co/300/orange/white?text=Food' }}"
                            alt="food-image" id="previewImage">
                            <input class="form-control" type="file" name="image" id="imageInput">
                    </div>
                </div>
            </div>
            <div class="col-8 d-flex justify-content-center  flex-column ps-5">
                <h3 class="mb-3">Update this Food</h3>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name"
                        placeholder="name@example.com" value="{{ $food->name }}">
                    <label for="floatingInput">Name</label>
                </div>
                <div class=" mb-3">
                    <select class="form-select" aria-label="Default select example" name="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->name == $food->category->name ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                        name="description">{{ $food->description }}</textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="price"
                        placeholder="name@example.com" value="{{ $food->price }}">
                    <label for="floatingInput">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <button class="btn btn-outline-dark">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
