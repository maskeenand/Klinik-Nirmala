@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>


  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ url('assets/css/sb-admin.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form "{{route('login')}}">
          <div class="form-group">
            {{csrf_field()}}
                    <div class="form-label-group  {{ $errors->has('email') ? 'has-errors' : ''}} has-feedback">
                    <input type="text" id="username" value="{{old('username')}}" class="form-control" placeholder="User Names" required="required" autofocus="autofocus">
                        @if ($errors->has('username'))
                        <span class="help-block">
                        <strong> {{ $errors->first('username') }}</strong>
                        </span>
                        @endif
                        <label for="User Name">User Name</label>
                    </div>
           </div>

            <div class="form-label-group {{ $errors->has('password') ? 'has-errors' : ''}} has-feedback">
              <input type="password" id="inputPassword"  value ="{{old('password')}}" class="form-control" placeholder="Password" required="required">

                        @if ($errors->has('password'))
                            <span class="help-block">
                            <strong> {{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        <label for="inputPassword">Password</label>
                        </div>

          <div class="form-label-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button type="submit"  a class="btn btn-primary btn-block" >Login</a></button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

</body>

</html>


@endsection

