<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/prio-logo-white.png') }}">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <section class="d-flex justify-content-center align-item-center" id="login-section">
        <div class="container text-start d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="width: 1315px;">
            <form id="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div id="heading-container">
                    <h2 class="text-center" id="heading-text">ID Registration System</h2>
                </div>
                <div id="body-container">
                    <div class="text-center" id="logo-container" style="min-width: 0px;margin: 0px;margin-top: 0;margin-bottom: 0px;"><img id="login-logo" style="width: 80%;"src="{{ asset('images/276134669_739682396993313_6310725528540388378_n.png') }}"></div>
                    <h5 class="text-start d-xxl-flex justify-content-xxl-center align-items-xxl-center"  style="color:red; margin-top:20px;">{{ __('Please select one below:') }}</h5>
                    <div class="mb-3">
                        <a class="btn btn-primary" id="student" type="submit" style="width: 100%;" href="{{ route('validateto') }}">{{ __('I am a Student') }}</a>
                    </div>
                    <div class="mb-3">
                        <a class="btn btn-primary" id="employee" type="submit" style="width: 100%;" href="">{{ __('I am a Employee') }}</a>
                    </div>

                    <div class="mb-3 text-center">
                    <p class="back-to-site"><span><a class="back-to-site" href="{{ url('/login') }}">Back to Login</a></span> |
                    <span><a class="back-to-site" href="{{ url('/') }}">Back to Site</a></span>
                    </p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>