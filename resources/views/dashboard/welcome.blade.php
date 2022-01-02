@extends('layouts.dashboard.app')

@section('content')
<link rel="stylesheet" href="{{ asset('dashboard_files/plugins/fontawesome-free/css/all.min.css') }}"> 
<link rel="stylesheet" href="{{ asset('dashboard_files/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.dashboard')</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</li>
            </ol>
        </section>

        <section class="content">

     
        
         


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
    <script src="{{ asset('dashboard_files/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('dashboard_files/plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

<!-- overlayScrollbars -->
<script src="{{ asset('dashboard_files/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} "></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard_files/dist/js/adminlte.js') }} "></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('dashboard_files/dist/js/demo.js') }} "></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('dashboard_files/plugins/jquery-mousewheel/jquery.mousewheel.js') }} "></script>
<script src="{{ asset('dashboard_files/plugins/raphael/raphael.min.js') }} "></script>


<script src="{{ asset('dashboard_files/plugins/jquery-mapael/jquery.mapael.min.js') }} "></script>
    <script src=" {{ asset('dashboard_files/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/plugins/jquery-mapael/maps/usa_states.min.js') }} "></script>
    
   
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>
<script src="https://code.highcharts.com/stock/modules/drag-panes.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>


    <script >
   
    
    </script>
@endsection

@push('scripts')



@endpush
