<!DOCTYPE html>
<html lang="zxx">

@include('homepage.components.home.head')

<body>

    <!-- Style switcher start -->
    {{-- <div class="style-switch-wrapper">
        <div class="style-switch-button">
            <i class="fa fa-sliders"></i>
        </div>
        <h3>Style Options</h3>
        <button id="preset1" class="btn btn-sm btn btn-outline-white"></button>
        <button id="preset2" class="btn btn-sm btn btn-outline-white"></button>
        <button id="preset3" class="btn btn-sm btn btn-outline-white"></button>
        <button id="preset4" class="btn btn-sm btn btn-outline-white"></button>
        <button id="preset5" class="btn btn-sm btn btn-outline-white"></button>
        <button id="preset6" class="btn btn-sm btn btn-outline-white"></button>
        <br /><br />
        <a class="btn btn-outline-white close-styler float-right">Close X</a>
    </div> --}}
    <!-- Style switcher end -->
    <!-- Style switcher start -->
    {{-- <div class="style-switch-wrapper">
        <div class="style-switch-button">
            <i class="fa fa-search"></i>
        </div>
        <form action="" method="GET">
            <input type="text" name="query" id="query" value="" class="form-control"
                placeholder="Search here...">
        </form>
    </div> --}}
    <!-- Style switcher end -->

    <div class="body-inner">

        <!-- Header start -->
        @include('homepage.components.home.header')
        <!--/ Header end -->


        @yield('content')

        <!-- Footer start -->
        @include('homepage.components.home.footer')
        <!-- Footer end -->

        <!-- Copyright start -->
        @include('homepage.components.home.copyright')
        <!--/ Copyright end -->

    </div><!-- Body inner end -->

    @include('homepage.components.home.scripts')

</body>

</html>
