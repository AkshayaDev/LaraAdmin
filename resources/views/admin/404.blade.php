@extends('admin.layout.master')

@section('content')
<div class="content-wrapper full-page-wrapper d-flex align-items-center text-center error-page">
  <div class="col-lg-6 mx-auto">
    <h1 class="display-1 mb-0">404</h1>
    <h2 class="mb-4">Page Not Found!</h2>
    <p>You seem to be trying to find this way home</p>
    <a class="btn btn-primary mt-5 btn-rounded btn-lg" href="{{ route('home') }}">Back to home</a>
  </div>
</div>
@stop
