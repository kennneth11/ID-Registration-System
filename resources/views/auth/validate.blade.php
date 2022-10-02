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
    <section class="d-flex justify-content-center align-items-center" id="login-section">
        <div class="container text-start d-flex justify-content-center align-items-center" style="width: 1315px;">
            <form id="login-form" method="POST" action="{{ route('validate') }}">
                @csrf
                <div id="heading-container">
                    <h2 class="text-center" id="heading-text">ID Registration System</h2>
                </div>
                <div id="body-container">

                    <div class="text-center" id="logo-container" style="min-width: 0px;margin: 0px;margin-top: 0;margin-bottom: 0px;"><img id="login-logo" src="{{ asset('images/276134669_739682396993313_6310725528540388378_n.png') }}"></div>
                    <div class="mb-3">
                        <label class="input-title">{{ __('Student ID No.*') }}</label>
                        <input id="id" type="text" class="form-control input-data @if($message = Session::get('failed')) is-invalid @endif" name="id" placeholder="Student ID No." pattern="[0-9]+" required autocomplete="id" autofocus>
                    
                        
                    </div>
                    <div class="mb-3">
                        <label class="input-title">{{ __('Official Receipt No. or Registration No') }}</label>
                        <input id="RegistrationNum" type="text" class="form-control @if($message = Session::get('failed')) is-invalid @endif" name="RegistrationNum" placeholder="O.R or Registration No."  pattern="[0-9]+" required autocomplete="RegistrationNum" autofocus>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        
                    </div>
                            
                    <div id="note">
                        <h6 style="font-size: 15px;">Note:&nbsp;</h6>
                        <p id="note-content" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at quam neque. Vivamus suscipit at orci at lobortis. Vivamus nulla sem, fermentum et sodales sed, rutrum vitae nunc. Integer eleifend nunc ut dictum auctor.</p>
                    </div>
                  
                    <div class="mb-3">
                        <button class="btn btn-primary" id="singin" type="submit" style="width: 100%;margin-top:50px;">{{ __('Register') }}</button>
                    </div>

                    <div class="mb-3 text-center" style="margin-top:30px;">
                    <p class="back-to-site"><span><a class="back-to-site" href="{{ url('/login') }}">Back to Login</a></span> |
                    <span><a class="back-to-site" href="{{ url('/') }}">Back to Site</a></span>
                    </p>
                    
                </div>
            </form>
        </div>
        
    </section>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>