<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>AnekaBibit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('public/superadmin') }}/images/favicon.ico">

    <!-- jvectormap -->
    <link href="{{ url('public/superadmin') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link href="{{ url('public/superadmin') }}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('public/superadmin') }}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ url('public/superadmin') }}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- App css -->
    <link href="{{ url('public/superadmin') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/superadmin') }}/css/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ url('public/superadmin') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/superadmin') }}/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/superadmin') }}/plugins/daterangepicker/daterangepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('public/superadmin') }}/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="dark-sidenav">
    <!-- Left Sidenav -->
    @include('penjual.layout.sidebar')
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        @include('penjual.layout.header')
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">

            <div class="container-fluid">

                @include('template.utils.notif')

            </div>

            @yield('content')
            <!-- container -->

            @include('penjual.layout.footer')
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="{{ url('public/superadmin') }}/js/jquery.min.js"></script>
    <script src="{{ url('public/superadmin') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/superadmin') }}/js/metismenu.min.js"></script>
    <script src="{{ url('public/superadmin') }}/js/waves.js"></script>
    <script src="{{ url('public/superadmin') }}/js/feather.min.js"></script>
    <script src="{{ url('public/superadmin') }}/js/simplebar.min.js"></script>
    <script src="{{ url('public/superadmin') }}/js/jquery-ui.min.js"></script>
    <script src="{{ url('public/superadmin') }}/js/moment.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="{{ url('public/superadmin') }}/plugins/apex-charts/apexcharts.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ url('public/superadmin') }}/pages/jquery.analytics_dashboard.init.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ url('public/superadmin') }}/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/jszip.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ url('public/superadmin') }}/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ url('public/superadmin') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public/superadmin') }}/pages/jquery.datatable.init.js"></script>
    <!-- App js -->
    <script src="{{ url('public/superadmin') }}/js/app.js"></script>
</body>

</html>
