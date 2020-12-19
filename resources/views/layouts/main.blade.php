<!DOCTYPE html>
<html lang="en">
<!-- head -->

<head>

  @include('includes.head')
  @stack('css.add')

</head>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  
  <!-- /.navbar -->
  @include('includes.header')
  


   
  <!-- Main Sidebar Container -->
  @include('includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
 

    <!-- Main content -->
    @yield('content')



  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('includes.footer')
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('dist/js/pages/dashboard2.js')}}"></script>

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.js')}}"></script> -->
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
</body>
</html>
