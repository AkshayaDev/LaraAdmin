<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Laravel Admin</title>
  <link rel="stylesheet" href="{{ asset('assets/admin/node_modules/font-awesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}" />
  <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        @yield('content')
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/misc.js') }}"></script>
</body>

</html>