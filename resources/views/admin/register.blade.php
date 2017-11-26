@extends('admin.layout.master')

@section('content')
<div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
  <div class="card col-lg-4 mx-auto">
    <div class="card-body px-5 py-5">
      <h3 class="card-title text-left mb-3">Register</h3>
      <form>
        <div class="form-group">
          <input type="text" class="form-control p_input" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="email" class="form-control p_input" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control p_input" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="password" class="form-control p_input" placeholder="Repeat Password">
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
          <div class="form-check"><label><input type="checkbox" class="form-check-input">I Agree to the Terms & conditions</label></div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
        </div>
        <p class="existing-user text-center pt-4 mb-0">Already have an acount?&nbsp;<a href="{{ route('login') }}">Sign In</a></p>
      </form>
    </div>
  </div>
</div>
@stop