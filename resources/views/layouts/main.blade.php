<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href=" {{asset('plugins/select2/css/select2.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}} ">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Dateranger Picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- Select2 -->
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <div class="col-12 d-flex justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href=" {{ route('main.index') }}" class="nav-link">Home</a>
            </li>

        </ul>
        <div class="d-flex">
            @if( auth()->user()->role == \App\Models\User::ROLE_ADMIN)
                <ul class="navbar-nav mr-3">
                    <li class="nav-item ">

                            <a href=" {{ route('admin.main.index') }}" class="btn btn-outline-light">Admin Panel</a>

                    </li>
                </ul>
            @endif
            <ul class="navbar-nav mr-3">
                <li class="nav-item ">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input class="btn btn-outline-light" type="submit" value="Logout">
                    </form>
                </li>

            </ul>
        </div>

    </div>
</nav>
<!-- /.navbar -->
@include('includes.sidebar')
@yield('content')

<!-- REQUIRED SCRIPTS -->
<!-- jQuery  -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- InputMask -->

<script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}} "></script>


<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY/MM/DD'
        });
    });

    $('.select2').select2()

    ('.select2bs4').select2({
        theme: 'bootstrap4'
    })

</script>
</body>
</html>
