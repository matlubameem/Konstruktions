<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
        html,
        body {
            height: 100%;
        }
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center">
            <a href=""><img class="logo-img" src="{{ asset('back_end/assets/images/logo.png') }}" alt="logo"></a><span
                class="splash-description">Please enter your user information.</span></div>
        <form method="POST" action="{{ route('login') }}">
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" id="username" type="text"
                           name="username" value="{{ old('username') }}"
                           placeholder="E-mail or Username"
                           autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" type="password"
                           name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span
                            class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Time & Date</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    @if(Route::has('password.request'))
                        <a class="btn btn-link forgot-password-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<script src="{{ asset('back_end/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('back_end/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
