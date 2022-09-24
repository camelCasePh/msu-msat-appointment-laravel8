<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="dist/img/msatlogo.jpg">
    <title>MSU-MSAT Registrar Office Appointment</title>



    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h4"> <img src="dist/img/msatlogo.jpg" alt="" width="50px">
                    <b>MSU-MSAT</b>Appointment</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register to start an appointment</p>

                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p style="color:red">{{ $error }}</p>
                    @endforeach
                @endif --}}
                {{-- @php
                    use Illuminate\Support\Facades\Auth;
                @endphp --}}
                {{-- @if (Auth::checke)
                    {{ route('home') }}
                @endif --}}

                <form action="{{ route('userRegister') }}" method="post">
                    @csrf

                    <div class="input-group mb-2">
                        <input type="text" name="fName" class="form-control" placeholder="First name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>

                        </div>

                    </div>
                    <span class="text-danger">
                        @error('fName')

                            @if ($message == 'The f name must be a string.' || $message == 'The f name format is invalid.')
                                {{ $message = 'Please enter a valid Name.' }}
                            @else
                                {{ $message }}
                            @endif
                        @enderror
                    </span>

                    <div class="input-group mb-2">
                        <input type="text" name="lName" class="form-control" placeholder="Last name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('lName')

                            @if ($message == 'The l name must be a string.' || $message == 'The l name format is invalid.')
                                {{ $message = 'Please enter a valid Last Name.' }}
                            @else
                                {{ $message }}
                            @endif
                        @enderror
                    </span>
                    <div class="input-group mb-2">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('email')

                            @if ($message == 'The email must be a string.')
                                {{ $message = 'Please enter a valid email.' }}
                            @else
                                {{ $message }}
                            @endif
                        @enderror
                    </span>
                    <div class="input-group mb-2">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('password')

                            @if ($message == 'The password must be a string.')
                                {{ $message = 'Please enter a valid password.' }}
                            @else
                                {{ $message }}
                            @endif
                        @enderror
                    </span>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-2">
                        <input type="hidden" name="studentType" class="form-control" value="{{ $usertype }}">
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                @if (Session::has('success'))
                    <p style="color: green">{{ Session::get('success') }}</p>
                @endif

                <div class="social-auth-links text-center">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                <a href="{{ route('loadLogin') }}" class="text-center">I already have an account</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>
<style>
    .login-page,
    .register-page {
        -ms-flex-align: center;
        align-items: center;
        background-image: linear-gradient(to right, #ff512f, #dd2476);
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        height: 100vh;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .card-primary.card-outline {
        border-top: 3px solid #34ace0;
    }
</style>
