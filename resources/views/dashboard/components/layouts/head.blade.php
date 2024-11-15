<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>@yield('pageTitle')</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('adminDashboard/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminDashboard/plugins/morrisjs/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminDashboard/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('adminDashboard/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('adminDashboard/css/color_skins.css') }}">

    <link rel="stylesheet" href="{{ asset('adminDashboard/css/progress.css') }}">
    <link rel="stylesheet" href="{{ asset('adminDashboard/css/toastify.min.css') }}">

    <link href="{{ asset('adminDashboard') }}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('adminDashboard') }}/plugins/jquery-spinner/css/bootstrap-spinner.css">
    <link rel="stylesheet" href="{{ asset('adminDashboard') }}/plugins/summernote/dist/summernote.css"/>
    <link rel="stylesheet" href="{{ asset('adminDashboard') }}/plugins/jquery-datatable/dataTables.bootstrap4.min.css">

    <style>
        .centered-link {
            display: flex !important;
            align-items: center !important;
            /* justify-content: center !important; */
            /* text-align: center !important; */

        }
    </style>


    @yield('css')
</head>
