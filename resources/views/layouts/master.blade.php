<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Esp Banjarbaru</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('node_modules/flag-icon-css/css/flag-icon.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="shortcut icon" href="{{ asset('images/logomini.png') }}" />
</head>

<body>
  <div class=" container-scroller">
    @include('layouts.header.header')
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
    <!-- partial:partials/_navbar.html -->
    

    <!-- partial -->
    @include('layouts.sidebar.sidebar')

        <!-- partial -->
        <div class="content-wrapper">
          <div id="konten">
            @yield('content')
          </div>
        </div>
          
      </div>
    </div>
  </div>

  <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap') }}" async defer></script>
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/misc.j') }}s"></script>
  <script src="{{ asset('js/chart.js') }}"></script>
  <script src="{{ asset('js/maps.js') }}"></script>
</body>

</html>