@extends('admin.layout.master')

@section('content')
<div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
  <div class="card col-lg-4 mx-auto">
    <div class="card-body px-5 py-5">
      <h3 class="card-title text-left mb-3">Login</h3>
      {{ Form::open(['route' => 'DoAdminLogin']) }}
        <div class="form-group">
          {{ Form::text('username',old('username'),array('class'=>'form-control p_input','placeholder'=>'Username')) }}
          @if ($errors->has('username'))
            <p style="color: #ff0000;">{{ $errors->first('username') }}</p>
          @endif
        </div>
        <div class="form-group">
          {{ Form::password('password',array('class'=>'form-control p_input','placeholder'=>'Password')) }}
          @if ($errors->has('password'))
            <p style="color: #ff0000;">{{ $errors->first('password') }}</p>
          @endif
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
          <div class="form-check"><label>{{ Form::checkbox('remember', 'remember', false,array('class'=>'form-check-input')) }} Remember me</label></div>
          <a href="#" class="forgot-pass">Forgot password</a>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
        </div>
        <p class="Or-login-with my-3">Or login with</p>
        <a href="#" class="facebook-login btn btn-facebook btn-block">Sign in with Facebook</a>
        <a href="#" class="google-login btn btn-google btn-block">Sign in with Google+</a>
        <a href="{{ route('AdminRegister') }}" class="google-login btn btn-create-account btn-block">Create An Account</a>
      {{ Form::close() }}
    </div>
  </div>
</div>
@stop