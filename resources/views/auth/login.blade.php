  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  @extends('layouts.app')

  @section('content')
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Login') }}</div>

                      <div class="card-body">
                          <form method="POST" action="{{ route('login') }}">
                              @csrf

                              <div class="row mb-3">
                                  <label for="email"
                                      class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email"
                                          class="form-control @error('email') is-invalid @enderror" name="email"
                                          value="{{ old('email') }}" required autocomplete="email" autofocus>

                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <label for="password"
                                      class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password"
                                          class="form-control @error('password') is-invalid @enderror" name="password"
                                          required autocomplete="current-password">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <div class="col-md-6 offset-md-4">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                              {{ old('remember') ? 'checked' : '' }}>

                                          <label class="form-check-label" for="remember">
                                              {{ __('Remember Me') }}
                                          </label>
                                      </div>
                                  </div>
                              </div>

                              <div class="row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Login') }}
                                      </button>

                                      @if (Route::has('password.request'))
                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              {{ __('Forgot Your Password?') }}
                                          </a>
                                      @endif
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <style>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
      </style>
  @endsection --}}
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

          .btn-primary {
              color: #fff;
              background-color: #34ace0;
              border-color: #34ace0;
              box-shadow: none;
          }

          .btn-primary:hover {
              color: #fff;
              background-color: #b33939;
              border-color: #ff5252;
              box-shadow: none;
          }

          .btn-primary-green {
              color: #fff;
              background-color: #4bcffa;

              border-color: #4bcffa;
              box-shadow: none;
          }

          .btn-darkblue {
              color: #fff;
              background-color: #b33939;
              border-color: #b33939;
              box-shadow: none;
          }

          .btn-darkblue:hover {
              color: black;
          }

          a {
              color: #b33939;
              text-decoration: none;
              background-color: transparent;
          }

          .h4:hover {
              color: #b33939;
          }

          /* .fa-google {
              color: white;
          } */
      </style>
  </head>

  <body class="hold-transition login-page">
      <div class="login-box">
          <!-- /.login-logo -->
          <div class="card card-outline card-primary">
              <div class="card-header text-center">
                  <a href="#" class="h4"> <img src="dist/img/msatlogo.jpg" alt="" width="50px">
                      <b>MSU-MSAT</b>Appointment</a>
              </div>
              <div class="card-body">
                  <p class="login-box-msg">Sign in to start an appointment</p>

                  {{-- @if (Session::has('error'))
                      <p style="color: red;">{{ Session::get('error') }}</p>
                  @endif --}}

                  <form action="{{ route('login') }}" method="post">
                      @csrf

                      <span class="alert-danger ml-1 mb-2">
                          @error('email')
                              @if ($message == 'These credentials do not match our records.')
                                  {{ $message = 'The Email or Password is Invalid.' }}
                              @endif
                          @enderror
                      </span>

                      <div class="input-group mb-3">
                          <input type="email" name="email" class="form-control" placeholder="Email"
                              value="{{ old('email') }}">
                          <div class="input-group-append">
                              <div class="input-group-text">
                                  <span class="fas fa-envelope"></span>
                              </div>
                          </div>
                      </div>


                      <span class="text-danger">

                          @error('email')

                              @if ($message == 'The email field is required.')
                                  {{ $message = 'Please enter a valid email.' }}
                              @elseif ($message == 'These credentials do not match our records.')
                                  {{ $message = '' }}
                              @else
                                  {{ $message }}
                              @endif
                          @enderror
                      </span>
                      <div class="input-group mb-3">
                          <input type="password" name="password" class="form-control" placeholder="Password">
                          <div class="input-group-append">
                              <div class="input-group-text">
                                  <span class="fas fa-lock"></span>
                              </div>
                          </div>
                      </div>
                      <span class="text-danger">
                          @error('password')

                              @if ($message == 'The password field is required.')
                                  {{ $message = 'Please enter a valid password.' }}
                              @else
                                  {{ $message }}
                              @endif
                          @enderror
                      </span>
                      {{-- <span class="text-danger">
                          @error('password')
                              {{ $message }}
                          @enderror
                      </span> --}}
                      <div class="row">
                          <div class="col-8">
                              <div class="icheck-primary">
                                  <input type="checkbox" id="remember">
                                  <label for="remember">
                                      Remember Me
                                  </label>
                              </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-4">
                              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                          </div>
                          <!-- /.col -->
                      </div>
                  </form>

                  {{-- /* <div class="social-auth-links text-center mt-2 mb-3">
                      <a href="#" class="btn btn-block btn-primary-green">
                          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                      </a>
                      <a href="#" class="btn btn-block btn-darkblue">
                          <i class="fab fa-brands fa-google"></i></i> Sign in using Google
                      </a>
                  </div> */ --}}
                  <!-- /.social-auth-links -->

                  <p class="mb-1">
                      <a href="forgot-password.html">I forgot my password</a>
                  </p>
                  <p class="mb-0">
                      <a href="{{ route('pre-register') }}" class="text-center">Register an account</a>
                  </p>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>
      <!-- /.login-box -->

      <!-- jQuery -->
      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
  </body>

  </html>
