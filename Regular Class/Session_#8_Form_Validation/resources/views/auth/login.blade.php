@extends('partial.base')

@section('title', "Login")

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
</div>
@endif
<form action="/login" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ old('password') }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" value="{{ old('password_confirmation') }}">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
@endsection
