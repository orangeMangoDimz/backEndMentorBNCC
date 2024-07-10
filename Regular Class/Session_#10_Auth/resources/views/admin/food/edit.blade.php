@extends('partial.base')

@section('title', 'Update Food')

@section('content')
    <div class="row" style="min-height: 100vh">
        <div class="col-4 d-flex justify-content-center align-items-center flex-column border-1 border-end border-dark">
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload your new food image!</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="col-8 d-flex justify-content-center align-items-start flex-column ps-5">
            <h3 class="mb-3">Update this Food</h3>
            <form action="#" class="w-75">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name"
                        placeholder="name@example.com" value="Name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class=" mb-3">
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option value="value" selected>category name</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                        name="description">Description</textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="price"
                        placeholder="name@example.com" value="Price">
                    <label for="floatingInput">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <button class="btn btn-outline-dark">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
