<head>
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('userHomepage') }}/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('userHomepage') }}/plugins/fontawesome/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('userHomepage') }}/plugins/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="{{ asset('userHomepage') }}/plugins/prettyPhoto.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('userHomepage') }}/plugins/owl/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('userHomepage') }}/plugins/owl/owl.theme.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ asset('userHomepage') }}/plugins/flex-slider/flexslider.css">
    <!-- Slick-slider -->
    <link rel="stylesheet" href="{{ asset('userHomepage') }}/plugins/slick/slick.css">
    <!-- Style Swicther -->
    <link id="style-switch" href="{{ asset('userHomepage') }}/css/presets/preset2.css" media="screen" rel="stylesheet"
        type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ asset('userHomepage') }}/plugins/html5shiv.js"></script>
      <script src="{{ asset('userHomepage') }}/plugins/respond.min.js"></script>
    <![endif]-->

    <!-- fonts -->
    <!-- <link rel="stylesheet" href="fonts/jaapokki/style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&family=Dancing+Script:wght@400..700&family=Itim&display=swap" rel="stylesheet">

    <style>

    </style>

    <link href="{{ asset('userHomepage') }}/css/style.css" rel="stylesheet">

    <!--Favicon-->
    {{-- <link rel="icon" href="{{ asset('use') }}" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('userHomepage') }}/img/favicon/favicon-144x144.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('userHomepage') }}/img/favicon/favicon-72x72.html">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('userHomepage') }}/img/favicon/favicon-54x54.html"> --}}


    @yield('styles')
</head>
