<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shopholic || Admin-User-Login</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="bg-light text-dark">

<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-100 shadow bg-white rounded overflow-hidden" style="max-width: 1000px;">
        <!-- Left Image -->
        <div class="col-md-6 d-none d-md-block p-0">
            <img src="https://st3.depositphotos.com/12982378/34297/i/450/depositphotos_342974406-stock-photo-smiling-african-american-woman-shopping.jpg"
                 alt="Login Image" class="img-fluid h-100 w-100" style="object-fit: cover;">
        </div>

        <!-- Right Form Section -->
        <div class="col-md-6 p-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold">Welcome Back to Shopholic</h3>
                <p class="text-muted">Login to your account</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div id="sp-otp"></div>

                <button type="submit" class="btn btn-primary btn-custom sub-submit w-100" >
                    <span class="fa fa-refresh fa-spin"></span>
                    Login
                </button>
            </form>
        </div>
    </div>
</div>

<!-- jQuery from CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle JS from CDN (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
