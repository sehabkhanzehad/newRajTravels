<header id="header" class="fixed-top header" role="banner">
    <!-- <a class="navbar-brand navbar-bg" href="index.html"><img class="img-fluid float-right" src="{{ asset('userHomepage') }}/images/logo.png" alt="logo"></a> -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand navbar-bg" href="{{ route("homepage.index") }}"><img class="img-fluid float-left w-25" 
                        src="{{ asset('userHomepage') }}/images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button"
                        data-toggle="collapse" data-target="#navigation" aria-controls="navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse text-center" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route("homepage.index") }}">{{ __('translate.contact') }}</a>
                            </li> --}}

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route("homepage.index") }}">
                                    <i class="fa fa-home fa-lg"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">{{ __('translate.aboutUs') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">{{ __('translate.services') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">{{ __('translate.portfolio') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">{{ __('translate.administrators') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">{{ __('translate.blog') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">{{ __('translate.contact') }}</a>
                            </li>




                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-globe"></i> Language
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="">
                                        <i class="fa fa-flag-usa"></i> English
                                    </a>
                                    <a class="dropdown-item" href="">
                                        <i class="fa fa-flag-france"></i> French
                                    </a>
                                    <a class="dropdown-item" href="">
                                        <i class="fa fa-solid fa-flag-spain"></i> Spanish
                                    </a>
                                </div>
                            </li> --}}

                            {{-- make language switcher button with globe without dropdown  --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lang.switch', App::getLocale() == 'bn' ? 'en' : 'bn') }}"><i class="fa fa-globe fa-lg mr-1"></i> {{ Config::get('languages')[App::getLocale()] }}</a>
                            </li>

                        </ul>




                    </div>

                </nav>
            </div>
        </div>
    </div>
</header>
