<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- custom style --}}
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>

<body>
    <div class="row" style="min-height: 100vh">
        <div class="col-4">
            <div class="d-flex justify-content-center align-items-center flex-column gap-4 h-100 border-end border-1 border-dark">
                <h1>Register</h1>
                <h1>PAGE</h1>
            </div>
        </div>
        <div class="col-8">
            <div class="h-100 d-flex justify-content-center align-items-start flex-column">
                <div class="my-4">
                    <h2>Let's Join With Us!</h2>
                </div>
                <form action="" class="w-75">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        I agree with <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">
                            privacy and policy
                          </a>
                        </label>
                      </div>
                    <div class="mb-3">
                        <p>Already have an account? <span><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('login') }}">Login</a> here</span></p>
                    </div>
                    <button class="btn btn-outline-dark">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
