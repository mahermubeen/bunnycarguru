<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CarGuru | Login </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/ico" href="{{ asset('images/carguru-logo.png') }}"/>
</head>
<body>

<div class="admin">
    <div class="admin-container">

        <div class="login-heading">
            <a href="{{ url('/') }}">{{ __('Login') }}</a>
        </div>

        <div class="login-box-body">
            <div class="login-box-content">

                <div class="admin-box-list">
                    <ul class="admin-list-ul">
                        <li><a href="{{ url('/')  }}">Login</a></li>
                        <li><a href="{{ url('/customRegister') }}">Register</a></li>
                    </ul>
                </div>

                <form action="{{ url('/customLogin') }}" method="post">
                    @csrf

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                               value="{{ old('name') }}" required autocomplete="name" placeholder="Username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="form-group has-feedback">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password"
                               required autocomplete="password" placeholder="Public Key">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="row">
                        <div class="forgot-pass">
                            <a href="{{ url('/password/reset')  }}">Forgot Password?</a>
                        </div>

                        <div class="login-apis">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>

                            <div class="social-auth-links text-center">

                                <a href="{{ url('/facebook/redirect') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i
                                        class="fa fa-facebook"></i> Sign in using
                                    Facebook
                                </a>
                                <a href="{{ url('/google/redirect') }}" class="btn btn-block btn-social btn-google btn-flat"><i
                                        class="fa fa-google-plus"></i> Sign in using
                                    Google+
                                </a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

</body>
</html>
