@extends('admin.layout.master')

@section('content')
<div class="content-wrapper full-page-wrapper d-flex align-items-center text-center error-page">
  <div class="col-lg-6 mx-auto">
    <h1 class="display-1 mb-0">500</h1>
    <h2 class="mb-4">Internal server error!</h2>
    <a class="btn btn-primary mt-5 btn-rounded btn-lg" href="{{ route('home') }}">Back to home</a>
  </div>
</div>
@stop

