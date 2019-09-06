<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CarGuru | Register </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/ico" href="{{ asset('images/carguru-logo.png') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="admin">
    <div class="admin-container">

        <div class="register-heading">
            <a href="{{ url('/customRegister') }}">{{ __('Register') }}</a>
        </div>

        <div class="register-box-body">
            <div class="register-box-content">

                <div class="admin-box-list">
                    <ul class="admin-list-ul">
                        <li><a href="{{ url('/')  }}">Login</a></li>
                        <li><a href="{{ url('/customRegister') }}">Register</a></li>
                    </ul>
                </div>

                <form action="{{ url('/customRegister') }}" method="post">
                    @csrf

                    <div class="form-group has-feedback">
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="form-control @error('name') is-invalid @enderror"
                               placeholder="Username"
                        />
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror

                    <div class="form-group has-feedback">
                        <input type="email"
                               name="email"
                               value="{{ old('email') }}"
                               class="form-control @error('email') is-invalid @enderror"
                               placeholder="Email"
                        />
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror

                    <div class="form-group has-feedback">
                        <input type="text"
                               name="role"
                               value="{{ old('role') }}"
                               class="form-control @error('role') is-invalid @enderror"
                               placeholder="Role"
                        />
                    </div>
                    @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror

                    <div class="form-group has-feedback">
                        <input type="password"
                               name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Password"
                        />
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror

                    <div class="form-group has-feedback">
                        <input type="password"
                               name="password_confirmation"
                               class="form-control"
                               placeholder="Retype password"
                        />
                    </div>

                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

</body>
</html>
