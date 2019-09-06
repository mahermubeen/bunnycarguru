<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CarGuru | Login </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/ico" href="{{ asset('images/carguru-logo.png') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('https://kit.fontawesome.com/b11236bde2.js') }}"></script>
</head>
<body class="admin-body">
        <div class="admin-container">
            <div class="login-heading">
                <a href="{{ url('/') }}">{{ __('Login') }}</a>
                <span class="cross">X</span>
            </div>
            <div class="login-box-body">
                <div class="bubble-design">
                    <div class="row">
                        <div class="col col1"></div>
                        <div class="col col2"></div>
                    </div>
                    <div class="row row2">
                        <div class="col col4"></div>
                    </div>
                    <div class="row">
                        <div class="col col5"></div>
                        <div class="col col6"></div>
                    </div>
                    <div class="row row4">
                        <div class="col col8"></div>
                    </div>
                </div>
                <div class="login-box-content">
                    <div class="admin-box-list">
                        <ul class="admin-list-ul">
                            <li><a class="active" href="{{ url('/')  }}">Login</a></li>
                            <li><a href="{{ url('/customRegister') }}">Register</a></li>
                        </ul>
                    </div>
                    <form class="login-form" action="{{ url('/customLogin') }}" method="post">
                        @csrf

                        <div class="form-group has-feedback">
                            <img src="{{ asset('images/mail.png') }}"/>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" placeholder="Username">
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-group has-feedback">
                            <img src="{{ asset('images/eye.png') }}"/>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password"
                                   required autocomplete="password" placeholder="Public Key"
                            />
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="login-btn-box">
                            <div class="forgot-pass">
                                <a href="{{ url('/password/reset')  }}">Forgot Password?</a>
                            </div>
                            <div class="login-apis-box">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Login<img src="images/send-arrow.png" /></button>

                                <ul class="apis">
                                    <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
