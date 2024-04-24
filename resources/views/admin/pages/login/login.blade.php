@extends('admin.layouts.master-out')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>bdapps</b></a><br>
      <a class="h2">Android Academy</a>
    </div>
    <div class="card-body">

      @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ $error }}
        </div>
        @endforeach
      @endif

      @if (session('message'))  
        <div class="alert alert-{{session('classs')}} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('message') }}
        </div>
      @endif

      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{route('admin.login.validate')}}" method="post">
        <input type="hidden" value="{{csrf_token()}}" name="_token" />
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
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

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

@endsection