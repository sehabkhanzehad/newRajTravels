@extends('homepage.layouts.main')
@section('pageTitle', 'Home | M/S Raj Travels')
@section('styles')
    <style>
    </style>
@endsection
@section('content')
    <!-- Slider start -->
    <section class="hero-slider text-center">
        <div class="slider-inner h-100">
            {{-- Slider 1 --}}
            <div class="slider-item"
                data-dot="&lt;i class=&quot; slider1 fa fa-plane&quot;&gt;&lt;/i&gt; {{ __('translate.hajj') }}">
                <div class="overlay2">

                    <div class="background-video">
                        <video id="myVideo" loop muted autoplay
                        style="
                        filter: blur(1px);

                        -webkit-filter: brightness(0.5) contrast(1.2) saturate(0.8);

                        ">
                            {{-- <source src="{{ asset('userHomepage/videos/labbaik4.mp4') }}" type="video/mp4"> --}}
                            <source src="{{ asset('userHomepage/videos/labbaik3.mp4') }}" type="video/mp4">
                            {{-- <source src="{{ asset('userHomepage/videos/video2.mp4') }}" type="video/mp4"> --}}
                        </video>
                    </div>

                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <h2 data-duration-in=".2" data-animation-in="fadeInDown"
                                    style="color: #81c83c; font-weight: bold;">{{ __('translate.welcome') }}</h2>
                                <h2 data-duration-in=".3" data-animation-in="fadeInDown"
                                    style="color: #81c83c; font-weight: bold;">{{ __('translate.coverTitle1') }}</h2>
                                <h2 class="mb-4" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".4"
                                    style="color: #81c83c; font-weight: bold;"><span
                                        style="color:;">{{ __('translate.companyName') }}</span> <span
                                        style="color: ; font-weight: bold; font-size: 20px">{{ __('translate.hajjLicense') }}:
                                        {{ __('translate.licenseNumber') }}</span></h2>

                                {{-- search form code    --}}
                                {{-- <form action="" method="GET" class="sign-up-form d-flex bg-white" data-aos="fade-up" data-aos-delay="300">
                                        <input type="text" name="query" class="form-control" placeholder="Search...">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form> --}}
                                {{-- <a href="#0" class="cd-hero__btn btn btn-outline-primary text-white "
                                    data-duration-in=".5" data-animation-in="fadeInUp" data-delay-in=".5">Learn
                                    more</a> --}}
                                {{-- <button class="btn btn-outline-primary" id="unmuteButton">Unmute</button> --}}

                                <div class="col-lg-6 p-0 m-auto">
                                    {{-- <form action="{{ route("homepage.search") }}" method="POST" role="form" class="bg-white"">
                                            @csrf
                                            <div class="input-group ">
                                                <input type="text" name="search" class="form-control" style="font-size: 12px;" placeholder="{{ __('translate.searchPlaceholder') }}" required="" >
                                                <span class="input-group-addon" style="background-color: #81c83c">
                                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form> --}}

                                    <form id="searchForm" action="" method="POST" role="form" class="bg-white"
                                        onsubmit="return openSearchInNewTab(event)">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" id="searchInput" name="search" class="form-control"
                                                style="font-size: 12px;"
                                                placeholder="{{ __('translate.searchPlaceholder') }}" required>
                                            <span class="input-group-addon" style="background-color: #81c83c">
                                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 data-aos="fade-up" data-aos-delay="100">Welcome to</h2>
                                <h2 data-aos="fade-up" data-aos-delay="100">Best Hajj and Umrah Travel Agency</h2>
                                <br>
                                <h2 data-aos="fade-up" data-aos-delay="100"><span style="color:;">M/S RAJ TRAVELS</span> <span
                                        style="color: ; font-weight: bold; font-size: 20px">HL: 0935</span></h2>

                            </div>
                            <div class="col-lg-5">
                                <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" class="btn btn-primary" value="Sign up">
                                </form>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
            {{-- Slider 2 --}}
            <div class="slider-item" data-dot="&lt;i class=&quot; slider2 fa fa-paper-plane&quot;&gt;&lt;/i&gt; {{ __('translate.umrah') }}"
                style="background-image: url({{ asset('userHomepage') }}/images/slider/bg1.jpg); background-size: cover">
                <div class="overlay2">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <h2 data-duration-in=".3" data-animation-in="fadeInUp">{{ __('translate.coverTitle2') }}</h2>
                                <h3 class="mb-4" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".4">{{ __('translate.shortDes') }}</h3>
                                {{-- <div class="button-group">
                                    <a href="#0" class="btn btn-outline-white" data-duration-in=".5"
                                        data-animation-in="fadeInUp" data-delay-in=".5">Start Now</a>
                                    <a href="#0" class="btn btn-outline-primary text-white" data-duration-in=".6"
                                        data-animation-in="fadeInUp" data-delay-in=".6">Learn More</a>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Slider 3 --}}
            <div class="slider-item" data-dot="&lt;i class=&quot; slider3 fa fa-ticket&quot;&gt;&lt;/i&gt; {{ __('translate.ticket') }}"
                style="background-image: url({{ asset('userHomepage') }}/images/slider/bg2.jpg); background-size: cover">
                <div class="overlay2">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-md-6 d-none d-md-block" data-duration-in=".3" data-animation-in="fadeInUp">
                                <img class="p-5 w-100" src="{{ asset('userHomepage') }}/images/slider/bg-thumb1.png"
                                    alt="">
                            </div>
                            <div class="col-md-6">
                                <h2 class="h3" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">{{ __('translate.slider3Title1') }}</h2>
                                <p class="mb-4" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">{{ __('translate.slider3Title2') }}</p>
                                <a href="javascript:void(0);" class="cd-hero__btn btn btn-outline-primary text-white "
                                    data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".6">{{ __('translate.takeATour') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Slider 4 --}}
            {{-- <div class="slider-item" data-dot="&lt;i class=&quot; slider4 fa fa-hashtag&quot;&gt;&lt;/i&gt; {{ __('translate.others') }}"
                style="background-image: url({{ asset('userHomepage') }}/images/slider/bg3.jpg);">
                <div class="overlay2">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-md-6">
                                <h2 class="h3" data-duration-in=".3" data-animation-in="fadeInUp"
                                    data-delay-in=".4">
                                    Your Challenge is Our Progress</h2>
                                <p class="mb-4" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. In
                                    consequatur cumque natus!</p>
                                <div class="button-group">
                                    <a href="#0" class="cd-hero__btn btn btn-outline-white" data-duration-in=".4"
                                        data-animation-in="fadeInUp" data-delay-in=".6">Start</a>
                                    <a href="#0" class="cd-hero__btn btn secondary btn-outline-primary text-white"
                                        data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".7">Learn
                                        More</a>
                                </div>
                            </div>
                            <div class="col-md-6 d-none d-md-block" data-duration-in=".3" data-animation-in="fadeInUp">
                                <img class="p-4 w-100" src="{{ asset('userHomepage') }}/images/slider/bg-thumb2.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>
    <!--/ Slider end -->
    <script>
        const video = document.getElementById('myVideo');
        const button = document.getElementById('unmuteButton');

        button.addEventListener('click', () => {
            video.muted = false;
            button.style.display = 'none';
        });
    </script>

    <script>
        function openSearchInNewTab(event) {
            event.preventDefault();
            let searchInput = document.getElementById('searchInput').value.trim();
            const length = searchInput.length;

            let url;

            if (length <= 4 && !isNaN(searchInput)) {
                // Way 1
                // if (length === 3) {
                //     searchInput = '0' + searchInput;
                // } else if (length === 2) {
                //     searchInput = '00' + searchInput;
                // } else if (length === 1) {
                //     searchInput = '000' + searchInput;
                // }

                // Way 2
                // length === 3 ? searchInput = '0' + searchInput : length == 2 ? searchInput = '00' + searchInput : length ==
                //     1 ? searchInput = '000' + searchInput : searchInput;

                // Way 3
                // searchInput = length === 3 ? '0' + searchInput :
                //     length === 2 ? '00' + searchInput :
                //     length === 1 ? '000' + searchInput : searchInput;

                // Way 4
                searchInput = searchInput.padStart(4, '0');
                url = `https://hajj.gov.bd/agencies/${searchInput}`;
            } else {
                url = `https://prp.pilgrimdb.org/web/pilgrim-search?q=${searchInput}`;
            }

            window.open(url, '_blank'); // Open the URL in a new tab
            // window.location.href = url; // Open the URL in the same tab
        }
    </script>

    <!-- Service box start -->
    <section id="service" class="service angle">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
                    <h2 class="title">{{ __('translate.serviceHeading') }} <span
                            class="title-desc mt-2">{{ __('translate.serviceTitle') }}</span></h2>
                </div>
            </div><!-- Title row end -->
            {{-- <i class="fas fa-kaaba"></i> --}}
            <div class="row">
                <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay=".5s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-plane"></i></span>
                        <h3 style="font-weight: 900; font-size: 25px">{{ __('translate.hajj') }}</h3>
                        <p style="text-align: justify">{{ __('translate.hajjDescription') }}</p>
                    </div>
                </div>
                <!--/ End first service -->

                <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay=".8s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-paper-plane"></i></span>
                        <h3 style="font-weight: 900; font-size: 25px">{{ __('translate.umrah') }}</h3>
                        <p style="text-align: justify">{{ __('translate.umrahDescription') }}</p>
                    </div>
                </div>
                <!--/ End Second service -->

                <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay="1.1s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-map-marker"></i></span>
                        <h3 style="font-weight: 900; font-size: 25px">{{ __('translate.tour') }}</h3>
                        <p style="text-align: justify">{{ __('translate.tourDescription') }}</p>
                    </div>
                </div>
                <!--/ End Third service -->

                <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay="1.4s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-address-book"></i></span>
                        <h3 style="font-weight: 900; font-size: 25px">{{ __('translate.passport') }}</h3>
                        <p style="text-align: justify">{{ __('translate.passportDescription') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay=".5s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-globe"></i></span>
                        <h3 style="font-weight: 900; font-size: 25px">{{ __('translate.visa') }}</h3>
                        <p style="text-align: justify">{{ __('translate.visaDescription') }}</p>
                    </div>
                </div>
                <!--/ End first service -->

                <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay=".8s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-ticket"></i></span>
                        <h3 style="font-weight: 900; font-size: 25px">{{ __('translate.ticket') }}</h3>
                        <p style="text-align: justify">{{ __('translate.ticketDescription') }}</p>
                    </div>
                </div>
                <!--/ End Second service -->

                <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay="1.1s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-hotel"></i></span>
                        <h3 style="font-weight: 900; font-size: 25px">{{ __('translate.hotel') }}</h3>
                        <p style="text-align: justify">{{ __('translate.hotelDescription') }}</p>
                    </div>
                </div>
                <!--/ End Third service -->

                <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay="1.4s">
                    <div class="service-content text-center">
                        <span class="service-icon icon-pentagon"><i class="fa fa-info-circle"></i></span>
                        <h3 style="font-weight: 900; font-size: 25px">{{ __('translate.guidance') }}</h3>
                        <p style="text-align: justify">{{ __('translate.guidanceDescription') }}</p>
                    </div>
                </div>
                <!--/ End 4th service -->
            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section>
    <!--/ Service box end -->

    <!-- Portfolio start -->
    {{-- <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 heading text-lg-left text-center">
                    <span class="title-icon classic"><i class="fa fa-suitcase"></i></span>
                    <h2 class="title classic">Our Awesome Work</h2>
                </div>
                <!-- </div> -->
                <!-- Title row end -->

                <!--Isotope filter start -->
                <!-- <div class="row"> -->
                <div class="col-lg-7">
                    <div class="isotope-nav" data-isotope-nav="isotope">
                        <ul>
                            <li><a href="#" class="active" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".web-design">Web Design</a></li>
                            <li><a href="#" data-filter=".development">Development</a></li>
                            <li><a href="#" data-filter=".joomla">Joomla</a></li>
                            <li><a href="#" data-filter=".wordpress">Wordpress</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Isotope filter end -->
        </div>

        <div class="container-fluid">
            <div class="row isotope" id="isotope">
                <div class="col-sm-6 col-md-4 col-lg-3 web-design isotope-item">
                    <div class="grid">
                        <figure class="m-0 effect-oscar">
                            <img src="{{ asset('userHomepage') }}/images/portfolio/portfolio1.jpg" alt="">
                            <figcaption>
                                <h3>Startup Business</h3>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto"
                                    href="{{ asset('userHomepage') }}/images/portfolio/portfolio-bg1.jpg"><i
                                        class="fa fa-search"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- Isotope item end -->

                <div class="col-sm-6 col-md-4 col-lg-3 development isotope-item">
                    <div class="grid">
                        <figure class="m-0 effect-oscar">
                            <img src="{{ asset('userHomepage') }}/images/portfolio/portfolio2.jpg" alt="">
                            <figcaption>
                                <h3>Easy to Lanunch</h3>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto"
                                    href="{{ asset('userHomepage') }}/images/portfolio/portfolio-bg2.jpg"><i
                                        class="fa fa-search"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- Isotope item end -->

                <div class="col-sm-6 col-md-4 col-lg-3 joomla isotope-item">
                    <div class="grid">
                        <figure class="m-0 effect-oscar">
                            <img src="{{ asset('userHomepage') }}/images/portfolio/portfolio3.jpg" alt="">
                            <figcaption>
                                <h3>Your Business</h3>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto"
                                    href="{{ asset('userHomepage') }}/images/portfolio/portfolio-bg3.jpg"><i
                                        class="fa fa-search"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- Isotope item end -->

                <div class="col-sm-6 col-md-4 col-lg-3 wordpress isotope-item">
                    <div class="grid">
                        <figure class="m-0 effect-oscar">
                            <img src="{{ asset('userHomepage') }}/images/portfolio/portfolio4.jpg" alt="">
                            <figcaption>
                                <h3>Prego Match</h3>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto"
                                    href="{{ asset('userHomepage') }}/images/portfolio/portfolio-bg4.html"><i
                                        class="fa fa-search"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- Isotope item end -->

                <div class="col-sm-6 col-md-4 col-lg-3 joomla isotope-item">
                    <div class="grid">
                        <figure class="m-0 effect-oscar">
                            <img src="{{ asset('userHomepage') }}/images/portfolio/portfolio5.jpg" alt="">
                            <figcaption>
                                <h3>Fashion Brand</h3>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto"
                                    href="{{ asset('userHomepage') }}/images/portfolio/portfolio-bg5.html"><i
                                        class="fa fa-search"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- Isotope item end -->

                <div class="col-sm-6 col-md-4 col-lg-3 development isotope-item">
                    <div class="grid">
                        <figure class="m-0 effect-oscar">
                            <img src="{{ asset('userHomepage') }}/images/portfolio/portfolio6.jpg" alt="">
                            <figcaption>
                                <h3>The Insidage</h3>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto"
                                    href="{{ asset('userHomepage') }}/images/portfolio/portfolio-bg1.jpg"><i
                                        class="fa fa-search"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- Isotope item end -->

                <div class="col-sm-6 col-md-4 col-lg-3 development isotope-item">
                    <div class="grid">
                        <figure class="m-0 effect-oscar">
                            <img src="{{ asset('userHomepage') }}/images/portfolio/portfolio7.jpg" alt="">
                            <figcaption>
                                <h3>Light Carpet</h3>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto"
                                    href="{{ asset('userHomepage') }}/images/portfolio/portfolio-bg2.jpg"><i
                                        class="fa fa-search"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- Isotope item end -->

                <div class="col-sm-6 col-md-4 col-lg-3 development isotope-item">
                    <div class="grid">
                        <figure class="m-0 effect-oscar">
                            <img src="{{ asset('userHomepage') }}/images/portfolio/portfolio8.jpg" alt="">
                            <figcaption>
                                <h3>Amazing Keyboard</h3>
                                <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                                <a class="view icon-pentagon" data-rel="prettyPhoto"
                                    href="{{ asset('userHomepage') }}/images/portfolio/portfolio-bg3.jpg"><i
                                        class="fa fa-search"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- Isotope item end -->
            </div>
            <!-- Content row end -->
        </div><!-- Container end -->
    </section> --}}
    <!-- Portfolio end -->

    <!-- Counter Strat -->
    <section class="ts_counter p-0">
        <div class="container-fluid">
            <div class="row facts-wrapper wow fadeInLeft text-center">
                <div class="facts one col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="fa fa-check"></i></span>
                    <div class="facts-num">
                        <span class="counter">{{ __('translate.counter1.number') }}</span>
                    </div>
                    <h3>{{ __('translate.counter1.title') }}</h3>
                </div>

                <div class="facts two col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="fa fa-users"></i></span>
                    <div class="facts-num">
                        <span class="counter">{{ __('translate.counter2.number') }}</span>
                    </div>
                    <h3>{{ __('translate.counter2.title') }}</h3>
                </div>

                <div class="facts three col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="fa fa-support "></i></span>
                    <div class="facts-num">
                        <span class="counter">{{ __('translate.counter3.number') }}</span>
                    </div>
                    <h3>{{ __('translate.counter3.title') }}</h3>
                </div>

                <div class="facts four col-md-3 col-sm-6">
                    <span class="facts-icon"><i class="fa fa-id-badge"></i></span>
                    <div class="facts-num">
                        <span class="counter">{{ __('translate.counter4.number') }}</span>
                    </div>
                    <h3>{{ __('translate.counter4.title') }}</h3>
                </div>

            </div>
        </div>
        <!--/ Container end -->
    </section>
    <!--/ Counter end -->

    <!-- Feature box start -->
    {{-- <section id="feature" class="feature">
        <div class="container">
            <div class="row">
                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-heart-o"></i></span>
                    <div class="feature-content">
                        <h3>Clean &amp; Modern Design</h3>
                        <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
                    </div>
                </div>
                <!--/ End first featurebox -->

                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-codepen"></i></span>
                    <div class="feature-content">
                        <h3>Useful Shortcodes</h3>
                        <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                    </div>
                </div>
                <!--/ End 2nd featurebox -->

                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-film"></i></span>
                    <div class="feature-content">
                        <h3>Parallax Section</h3>
                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
                <!--/ End 3rd featurebox -->
                <!-- </div> -->
                <!-- Content row end -->

                <!-- <div class="gap-40"></div> -->

                <!-- <div class="row"> -->
                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-newspaper-o"></i></span>
                    <div class="feature-content">
                        <h3>Multipurpose Concept</h3>
                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
                <!--/ End 1st featurebox -->

                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-desktop"></i></span>
                    <div class="feature-content">
                        <h3>Responsive Layout</h3>
                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
                <!--/ End 2nd featurebox -->

                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-pagelines"></i></span>
                    <div class="feature-content">
                        <h3>Light wight Performance</h3>
                        <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                    </div>
                </div>
                <!--/ End 3rd featurebox -->

                <!-- </div> -->
                <!-- Content row end -->

                <!-- <div class="gap-40"></div>

                                         <div class="row"> -->
                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-recycle"></i></span>
                    <div class="feature-content">
                        <h3>Free Lifetime Updates</h3>
                        <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
                    </div>
                </div>
                <!--/ End first featurebox -->

                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
                    <div class="feature-content">
                        <h3>Endless Possibilites</h3>
                        <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                    </div>
                </div>
                <!--/ End first featurebox -->

                <div class="feature-box col-md-6 col-lg-4 wow fadeInDown" data-wow-delay=".5s">
                    <span class="feature-icon float-left"><i class="fa fa-whatsapp"></i></span>
                    <div class="feature-content">
                        <h3>24/7 Live Support</h3>
                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
                <!--/ End first featurebox -->
            </div><!-- Content row end -->

        </div>
        <!--/ Container end -->
    </section> --}}
    <!--/ Feature box end -->


    {{-- <section id="image-block" class="image-block p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 ts-padding"
                    style="height:650px;background:url({{ asset('userHomepage') }}/images/image-block-bg.jpg) 50% 50% / cover no-repeat;">
                </div>
                <div class="col-lg-6 ts-padding img-block-right">
                    <div class="img-block-head text-center">
                        <h2>Know More About Our Company</h2>
                        <h3>Why Choose Us</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            sem nibh id elit.
                            Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis
                            bibendum auctor.
                        </p>
                    </div>

                    <div class="gap-30"></div>

                    <div class="image-block-content">
                        <span class="feature-icon float-left"><i class="fa fa-bicycle"></i></span>
                        <div class="feature-content">
                            <h3>Tons of Features</h3>
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                    <!--/ End 1st block -->

                    <div class="image-block-content">
                        <span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
                        <div class="feature-content">
                            <h3>PowerPack Theme</h3>
                            <p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
                        </div>
                    </div>
                    <!--/ End 1st block -->

                    <div class="image-block-content">
                        <span class="feature-icon float-left"><i class="fa fa-street-view"></i></span>
                        <div class="feature-content">
                            <h3>Day Night Support</h3>
                            <p>Simply dummy text and typesettings industry has been the industry</p>
                        </div>
                    </div>
                    <!--/ End 1st block -->

                </div>
            </div>
        </div>
    </section> --}}
    <!--/ Image block end -->
    <!-- Pricing table start -->
    @if (count($packages) > 0)
        <section id="pricing" class="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading">
                        <span class="title-icon float-left"><i class="fa fa-list-ul"></i></span>
                        <h2 class="title">{{ __('translate.packageHeading') }} <span
                                class="title-desc mt-2">{{ __('translate.packageTitle') }}</span>
                        </h2>
                    </div>
                </div><!-- Title row end -->
                <div class="row">
                    {{-- <!-- plan start -->
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".5s">
                    <div class="plan text-center">
                        <span class="plan-name">Basic <small>Monthly plan</small></span>
                        <p class="plan-price"><sup class="currency">$</sup><strong>49</strong><sub>.99</sub></p>
                        <ul class="list-unstyled">
                            <li>100GB Monthly Bandwidth</li>
                            <li>$100 Google AdWords</li>
                            <li>100 Domain Hosting</li>
                            <li>SSL Shopping Cart</li>
                            <li>24/7 Live Support</li>
                        </ul>
                        <a class="btn btn-outline-primary" href="#.">Sign Up</a>
                    </div>
                </div><!-- plan end -->
                <!-- plan start -->
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="1s">
                    <div class="plan text-center">
                        <span class="plan-name">Standared <small>Monthly plan</small></span>
                        <p class="plan-price"><sup class="currency">$</sup><strong>99</strong><sub>.99</sub></p>
                        <ul class="list-unstyled">
                            <li>100GB Monthly Bandwidth</li>
                            <li>$100 Google AdWords</li>
                            <li>100 Domain Hosting</li>
                            <li>SSL Shopping Cart</li>
                            <li>24/7 Live Support</li>
                        </ul>
                        <a class="btn btn-outline-primary" href="#.">Sign Up</a>
                    </div>
                </div><!-- plan end -->
                <!-- plan start -->
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="1.4s">
                    <div class="plan text-center featured">
                        <span class="plan-name">Professional <small>Monthly plan</small></span>
                        <p class="plan-price"><sup class="currency">$</sup><strong>149</strong><sub>.99</sub></p>
                        <ul class="list-unstyled">
                            <li>100GB Monthly Bandwidth</li>
                            <li>$100 Google AdWords</li>
                            <li>100 Domain Hosting</li>
                            <li>SSL Shopping Cart</li>
                            <li>24/7 Live Support</li>
                        </ul>
                        <a class="btn btn-outline-primary" href="#.">Sign Up</a>
                    </div>
                </div><!-- plan end -->
                <!-- plan start -->
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="1.6s">
                    <div class="plan text-center">
                        <span class="plan-name">Premium <small>Monthly plan</small></span>
                        <p class="plan-price"><sup class="currency">$</sup><strong>399</strong><sub>.99</sub></p>
                        <ul class="list-unstyled">
                            <li>100GB Monthly Bandwidth</li>
                            <li>$100 Google AdWords</li>
                            <li>100 Domain Hosting</li>
                            <li>SSL Shopping Cart</li>
                            <li>24/7 Live Support</li>
                        </ul>
                        <a class="btn btn-outline-primary" href="#.">Sign Up</a>
                    </div>
                </div><!-- plan end --> --}}

                    @foreach ($packages as $package)
                        <!-- plan start -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp m-auto"
                            data-wow-delay="{{ 1 + $loop->index * 0.5 }}s">
                            <div class="plan text-center {{ $package->is_featured == 'yes' ? 'featured' : '' }}">
                                <span class="plan-name">{{ $package->package_name }} ({{ $package->year }})
                                    <small>{{ $package->package_duration }}</small></span>
                                <p class="plan-price" {{-- style="background-image: url('{{ $package->package_image }}'); background-size: cover;" --}}>
                                    @php
                                        // $package->package_price = number_format($package->package_price, 2);
                                    @endphp
                                    <sup
                                        class="currency">{{ app()->getLocale() == 'bn' ? '৳' : 'Tk' }}</sup><strong>{{ explode('.', $package->package_price)[0] }}</strong><sub>.{{ explode('.', $package->package_price)[1] }}</sub>
                                </p>

                                <ul class="list-unstyled">
                                    @foreach ($package->features as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                                <a class="btn btn btn-outline-primary"
                                    href="{{ route('homepage.package.show', $package->slug) }}">{{ __('translate.seeMore') }}</a>
                            </div>
                        </div>
                        <!-- plan end -->
                    @endforeach
                </div>
                <!--/ Content row end -->
            </div>
            <!--/  Container end-->
        </section>
    @endif
    <!--/ Pricing table end -->


    <!-- Team start -->
    <section id="team" class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon float-left"><i class="fa fa-weixin"></i></span>
                    <h2 class="title">{{ __('translate.teamHeading') }} <span
                            class="title-desc mt-2">{{ __('translate.teamTitle') }}</span></h2>
                </div>
            </div><!-- Title row end -->

            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="team wow slideInLeft">
                        <div class="img-hexagon">
                            <img src="{{ asset('userHomepage/images/team/team-1.jpg') }}" alt="">
                            <span class="img-top"></span>
                            <span class="img-bottom"></span>
                        </div>
                        <div class="team-content">
                            <h3>{{ __('translate.team1Name') }}</h3>
                            <p>{{ __('translate.team1Position') }}</p>
                            <div class="team-social">
                                <a class="fb" href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                <a class="gplus" href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                                <a class="linkdin" target="_blank" href="https://wa.me/+8801761788306"><i
                                        class="fa fa-whatsapp"></i></a>
                                <a class="dribble" href="javascript:void(0)"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Team 1 end -->
                <div class="col-md-6 col-lg-3">
                    <div class="team wow slideInLeft">
                        <div class="img-hexagon">
                            <img src="{{ asset('userHomepage/images/team/team-2.jpg') }}" alt="">
                            <span class="img-top"></span>
                            <span class="img-bottom"></span>
                        </div>
                        <div class="team-content">
                            <h3>{{ __('translate.team2Name') }}</h3>
                            <p>{{ __('translate.team2Position') }}</p>
                            <div class="team-social">
                                <a class="fb" target="_blank"
                                    href="https://www.facebook.com/profile.php?id=61550204040888"><i
                                        class="fa fa-facebook"></i></a>
                                <a class="gplus" href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                                <a class="linkdin" target="_blank" href="https://wa.me/+8801733111463"><i
                                        class="fa fa-whatsapp"></i></a>
                                <a class="dribble" href="javascript:void(0)"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Team 2 end -->
                <div class="col-md-6 col-lg-3">
                    <div class="team wow slideInRight">
                        <div class="img-hexagon">
                            <img src="{{ asset('userHomepage/images/team/team-3.jpg') }}" alt="">
                            <span class="img-top"></span>
                            <span class="img-bottom"></span>
                        </div>
                        <div class="team-content">
                            <h3>{{ __('translate.team3Name') }}</h3>
                            <p>{{ __('translate.team3Position') }}</p>
                            <div class="team-social">
                                <a class="fb" href="https://www.facebook.com/abdulajij.cb1" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                                <a class="gplus" href="https://www.instagram.com/abdulajij.cb/" target="_blank"><i
                                        class="fa fa-instagram"></i></a>
                                <a class="linkdin" href="https://wa.me/+8801799745020" traget="_blank"><i
                                        class="fa fa-whatsapp"></i></a>
                                <a class="dribble" href="hhttps://abdulajij.msrajtravels.com/" target="_blank"><i
                                        class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Team 3 end -->
                <div class="col-md-6 col-lg-3">
                    <div class="team animate wow slideInRight">
                        <div class="img-hexagon">
                            <img src="{{ asset('userHomepage/images/team/team-4.jpg') }}" alt="">
                            <span class="img-top"></span>
                            <span class="img-bottom"></span>
                        </div>
                        <div class="team-content">
                            <h3>{{ __('translate.team4Name') }}</h3>
                            <p>{{ __('translate.team4Position') }}</p>
                            <div class="team-social">
                                <a class="fb" href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                <a class="gplus" href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                                <a class="linkdin" href="javascript:void(0)"><i class="fa fa-whatsapp"></i></a>
                                <a class="dribble" href="javascript:void(0)"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Team 4 end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>
    <!--/ Team end -->

    <!-- Parallax 1 start -->
    {{-- <section class="parallax parallax1">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Are You Ready to Buy This Template!</h2>
                    <h3>Just Click Button and Use Your Own</h3>
                    <p>
                        <a href="#" class="btn btn-outline-white mr-2">Purchase Now</a>
                        <a href="#" class="btn btn-outline-primary text-white">Get In Touch</a>
                    </p>
                </div>
            </div>
        </div><!-- Container end -->
    </section> --}}
    <!-- Parallax 1 end -->


    <!-- Testimonial start-->
    {{-- <section class="testimonial parallax parallax2">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">
                <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
                    <div class="item">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('userHomepage') }}/images/team/testimonial1.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">
                                Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover
                                many web sites still
                                in their infancy. Various versions have evolved over the years, sometimes by
                                accident, sometimes on
                                purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                            <h3 class="name">Sarah Arevik<span>Chief Executive</span></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('userHomepage') }}/images/team/testimonial2.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">
                                Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover
                                many web sites still
                                in their infancy. Various versions have evolved over the years, sometimes by
                                accident, sometimes on
                                purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                            <h3 class="name">Narek Bedros<span>Sr. Manager</span></h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-thumb">
                            <img src="{{ asset('userHomepage') }}/images/team/testimonial3.jpg" alt="testimonial">
                        </div>
                        <div class="testimonial-content">
                            <p class="testimonial-text">
                                Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover
                                many web sites still
                                in their infancy. Various versions have evolved over the years, sometimes by
                                accident, sometimes on
                                purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                            <h3 class="name">Taline Lucine<span>Sales Manager</span></h3>
                        </div>
                    </div>
                </div>
                <!--/ Testimonial carousel end-->
            </div>
            <!--/ Row end-->
        </div>
        <!--/  Container end-->
    </section> --}}
    <!--/ Testimonial end-->


    <!-- Clients start -->
    <section id="clients" class="clients">
        <div class="container">
            <div class="row wow fadeInLeft">
                <div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
                    <figure class="m-0 item client_logo">
                        <a href="https://hajj.gov.bd/" target="_blank">
                            <img style="height: 75px; width: 75px"
                                src="{{ asset('userHomepage') }}/images/clients/client1.png" alt="client">
                        </a>
                    </figure>
                    <figure class="m-0 item client_logo">
                        <a href="https://haabbd.com/" target="_blank">
                            <img style="height: 75px; width: 75px"
                                src="{{ asset('userHomepage') }}/images/clients/client2.png" alt="client">
                        </a>
                    </figure>
                    <figure class="m-0 item client_logo">
                        <a href="https://www.atab.org.bd/" target="_blank">
                            <img style="height: 75px; width: 75px"
                                src="{{ asset('userHomepage') }}/images/clients/client3.png" alt="client">
                        </a>
                    </figure>
                    <figure class="m-0 item client_logo">
                        <a href="https://www.iata.org/" target="_blank">
                            <img style="height: 75px; width: 75px"
                                src="{{ asset('userHomepage') }}/images/clients/client4.png" alt="client">
                        </a>
                    </figure>
                    <figure class="m-0 item client_logo">
                        <a href="https://www.nusuk.sa/" target="_blank">
                            <img style="height: 75px; width: 75px"
                                src="{{ asset('userHomepage') }}/images/clients/client5.png" alt="client">
                        </a>
                    </figure>
                    {{-- <figure class="m-0 item client_logo">
                        <a href="#" target="_blank">
                            <img style="height: 75px; width: 75px" src="{{ asset('userHomepage') }}/images/clients/client6.png" alt="client">
                        </a>
                    </figure> --}}
                    <figure class="m-0 item client_logo">
                        <a href="javascript:void(0);">
                            <img style="height: 75px; width: 75px"
                                src="{{ asset('userHomepage') }}/images/clients/client7.png" alt="client">
                        </a>
                    </figure>
                    <figure class="m-0 item client_logo">
                        <a href="javascript:void(0);">
                            <img style="height: 75px; width: 75px"
                                src="{{ asset('userHomepage') }}/images/clients/client8.png" alt="client">
                        </a>
                    </figure>
                </div><!-- Owl carousel end -->
            </div><!-- Main row end -->
        </div>
        <!--/ Container end -->
    </section>
    <!--/ Clients end -->
@endsection


@section('scripts')
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliders = ['slider2', 'slider3', 'slider4', 'slider1'];
            let currentIndex = 0;

            function clickNextSlider() {
                const currentSlider = document.querySelector(`.${sliders[currentIndex]}`);
                if (currentSlider) {
                    currentSlider.click();
                }
                currentIndex = (currentIndex + 1) % sliders.length;
            }

            setInterval(clickNextSlider, 3000);
        });
    </script> --}}
@endsection
