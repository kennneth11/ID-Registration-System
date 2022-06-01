<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/prio-logo-white.png') }}">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <section class="d-flex justify-content-center align-items-center" id="login-section">
        <div class="container text-start d-flex justify-content-center align-items-center" style="width: 1315px;">
            <form id="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div id="heading-container">
                    <h2 class="text-center" id="heading-text">ID Registration System</h2>
                </div>
                <div id="body-container">
                    <div class="text-center" id="logo-container" style="min-width: 0px;margin: 0px;margin-top: 0;margin-bottom: 0px;"><img id="login-logo" src="{{ asset('images/276134669_739682396993313_6310725528540388378_n.png') }}"></div>
                    <div class="mb-3">
                        <label class="input-title">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control input-data @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="input-title">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control input-data @error('email') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" id="singin" type="submit" style="width: 100%;">{{ __('Login') }}</button>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="text-start d-xxl-flex justify-content-xxl-center align-items-xxl-center forgot" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                    <div id="note">
                        <h6 style="font-size: 15px;">Note:&nbsp;</h6>
                        <p id="note-content" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at quam neque. Vivamus suscipit at orci at lobortis. Vivamus nulla sem, fermentum et sodales sed, rutrum vitae nunc. Integer eleifend nunc ut dictum auctor.</p>
                    </div>
                    <p class="text-center reminder">Do not have an account?</p>
                    <div class="mb-3 "><a href="{{ route('registerto') }}" class="btn btn-light areatre-account" type="button" style="width: 100%;border-color: rgb(206,212,218);border-bottom-style: solid;font-weight: bold;font-size: 15px;">Create an Account</a></div>
                    <a class="d-flex justify-content-center back-to-site " href="{{ url('/') }}">Back to Site</a>
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>