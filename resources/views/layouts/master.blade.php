<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Datatables -->
    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    {!! Html::style('vendors/bootstrap/dist/css/bootstrap.min.css') !!}
    
    <!-- Font Awesome -->
    {!! Html::style('vendors/font-awesome/css/font-awesome.min.css') !!}
    
    <!-- NProgress -->
    {!! Html::style('vendors/nprogress/nprogress.css') !!}
    
    <!-- bootstrap-progressbar -->
    {!! Html::style('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}
    
    <!-- bootstrap-daterangepicker -->
    {!! Html::style('vendors/bootstrap-daterangepicker/daterangepicker.css') !!}
    

    @yield('link')
    
    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md menu_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-shield"></i> <span>Esp Banjarbaru</span></a>
            </div>

            <div class="clearfix"></div>

                @include('Layouts.quickProfile')

            <br />
           <!-- sidebar -->
                @include('Layouts.sidebar')
           <!-- end sidebar -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
            @include('Layouts.header')
        <!-- /top navigation -->

        <!-- page content -->
            @yield('content')
        <!-- /page content -->

        <!-- footer content -->
            @include('Layouts.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    {!! Html::script('vendors/jquery/dist/jquery.min.js') !!}
    
    <!-- Bootstrap -->
    {!! Html::script('vendors/bootstrap/dist/js/bootstrap.min.js') !!}
    <!-- FastClick -->
    {!! Html::script('vendors/fastclick/lib/fastclick.js') !!}
    <!-- NProgress -->
    {!! Html::script('vendors/nprogress/nprogress.js') !!}
    <!-- Chart.js -->
    {!! Html::script('vendors/Chart.js/dist/Chart.min.js') !!}
    <!-- jQuery Sparklines -->
    {!! Html::script('vendors/jquery-sparkline/dist/jquery.sparkline.min.js') !!}
    <!-- morris.js -->
    {!! Html::script('vendors/raphael/raphael.min.js') !!}
    {!! Html::script('vendors/morris.js/morris.min.js') !!}
    <!-- gauge.js -->
    {!! Html::script('vendors/gauge.js/dist/gauge.min.js') !!}
    <!-- bootstrap-progressbar -->
    {!! Html::script('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}
    <!-- Skycons -->
    {!! Html::script('vendors/skycons/skycons.js') !!}
    <!-- Flot -->
    {!! Html::script('vendors/Flot/jquery.flot.js') !!}
    {!! Html::script('vendors/Flot/jquery.flot.pie.js') !!}
    {!! Html::script('vendors/Flot/jquery.flot.time.js') !!}
    {!! Html::script('vendors/Flot/jquery.flot.stack.js') !!}
    {!! Html::script('vendors/Flot/jquery.flot.resize.js') !!}
    <!-- Flot plugins -->
    {!! Html::script('vendors/flot.orderbars/js/jquery.flot.orderBars.js') !!}
    {!! Html::script('vendors/flot-spline/js/jquery.flot.spline.min.js') !!}
    {!! Html::script('vendors/flot.curvedlines/curvedLines.js') !!}
    <!-- DateJS -->
    {!! Html::script('vendors/DateJS/build/date.js') !!}
    <!-- bootstrap-daterangepicker -->
    {!! Html::script('vendors/moment/min/moment.min.js') !!}
    {!! Html::script('vendors/bootstrap-daterangepicker/daterangepicker.js') !!}

     <!-- Datatables -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>


    {!! Html::script('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') !!}
    {!! Html::script('vendors/jquery.hotkeys/jquery.hotkeys.js') !!}
    {!! Html::script('vendors/google-code-prettify/src/prettify.js') !!}
    <!-- jQuery Tags Input -->
    {!! Html::script('vendors/jquery.tagsinput/src/jquery.tagsinput.js') !!}
    <!-- Switchery -->
    {!! Html::script('vendors/switchery/dist/switchery.min.js') !!}
    <!-- Select2 -->
    {!! Html::script('vendors/select2/dist/js/select2.full.min.js') !!}
    <!-- Parsley -->
    {!! Html::script('vendors/parsleyjs/dist/parsley.min.js') !!}
    <!-- Autosize -->
    {!! Html::script('vendors/autosize/dist/autosize.min.js') !!}
    <!-- jQuery autocomplete -->
    {!! Html::script('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') !!}
    <!-- starrr -->
    {!! Html::script('vendors/starrr/dist/starrr.js') !!}
    <!-- Custom Theme Scripts -->
    {!! Html::script('build/js/custom.min.js') !!}
    
  </body>
</html>