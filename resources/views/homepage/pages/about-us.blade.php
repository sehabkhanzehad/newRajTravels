@extends('homepage.layouts.main')
@section('pageTitle', 'About Us')

@section('content')
    <div id="banner-area">
        <img src="{{ asset('userHomepage') }}/images/banner/banner1.jpg" class="w-100" style="height: 300px" alt="" />
        <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>About Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Main container start -->
    <section id="main-container">
        <div class="container">

            <!-- Company Profile -->
            <div class="row">
                <div class="col-md-12 heading">
                    <span class="title-icon classic float-left"><i class="fa fa-suitcase"></i></span>
                    <h2 class="title classic">Company Profile</h2>
                </div>
            </div><!-- Title row end -->

            <div class="row landing-tab">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills border-md-right h-100 mr-lg-5 mb-3 mb-md-0" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">
                        <a class="animated fadeIn nav-link  py-2 py-lg-4  active d-flex align-items-center"
                            data-toggle="pill" href="#tab_1" role="tab" aria-selected="true">
                            <i class="fa fa-info-circle mr-4"></i>
                            <span class="h4 mb-0 font-weight-bold">Who Are We</span>
                        </a>
                        <a class="animated fadeIn nav-link py-2 py-lg-4 d-flex align-items-center" data-toggle="pill"
                            href="#tab_2" role="tab" aria-selected="true">
                            <i class="fa fa-briefcase mr-4"></i>
                            <span class="h4 mb-0 font-weight-bold">OUR COMPANY</span>
                        </a>
                        <a class="animated fadeIn nav-link py-2 py-lg-4 d-flex align-items-center" data-toggle="pill"
                            href="#tab_3" role="tab" aria-selected="true">
                            <i class="fa fa-android mr-4"></i>
                            <span class="h4 mb-0 font-weight-bold">What We Do</span>
                        </a>
                        <a class="animated fadeIn nav-link py-2 py-lg-4 d-flex align-items-center" data-toggle="pill"
                            href="#tab_4" role="tab" aria-selected="true">
                            <i class="fa fa-pagelines mr-4"></i>
                            <span class="h4 mb-0 font-weight-bold">Modern Design</span>
                        </a>
                        <a class="animated fadeIn nav-link py-2 py-lg-4 d-flex align-items-center" data-toggle="pill"
                            href="#tab_5" role="tab" aria-selected="true">
                            <i class="fa fa-support mr-4"></i>
                            <span class="h4 mb-0 font-weight-bold">Dedicated Support</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane pl-md-5 fade show active animated px-3  fadeInLeft" id="tab_1"
                            role="tabpanel">
                            <i class="fa fa-trophy icon-xl text-primary mb-4"></i>
                            <h3>We Are Awwared Winning Company</h3>
                            <p>Over the year we have lots of experience in our field. In sit amet massa sapien. Vestibulum
                                diam turpis,
                                gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Aliquam
                                sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
                        </div>
                        <div class="tab-pane pl-md-5 fade animated fadeInLeft px-3 " id="tab_2" role="tabpanel">
                            <i class="fa fa-briefcase icon-xl text-primary mb-4"></i>
                            <h3>We Have Worldwide Business</h3>
                            <p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR retro,
                                Etsy VHS
                                kitsch actually messenger bag pug. Pbrb semiotics try-hard, Schlitz occupy dreamcatcher
                                master cleanse
                                Marfa Vice tofu. </p>
                        </div>
                        <div class="tab-pane pl-md-5 fade animated fadeInLeft px-3 " id="tab_3" role="tabpanel">
                            <i class="fa fa-android icon-xl text-primary mb-4"></i>
                            <h3>We Build Readymade Applications</h3>
                            <p>Over the year we have lots of experience in our field. In sit amet massa sapien. Vestibulum
                                diam turpis,
                                gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Aliquam
                                sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
                        </div>
                        <div class="tab-pane pl-md-5 fade animated fadeInLeft px-3 " id="tab_4" role="tabpanel">
                            <i class="fa fa-pagelines icon-xl text-primary mb-4"></i>
                            <h3>Clean and Modern Design</h3>
                            <p>Over the year we have lots of experience in our field. In sit amet massa sapien. Vestibulum
                                diam turpis,
                                gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Aliquam
                                sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
                        </div>
                        <div class="tab-pane pl-md-5 fade animated fadeInLeft px-3 " id="tab_5" role="tabpanel">
                            <i class="fa fa-support icon-xl text-primary mb-4"></i>
                            <h3>24/7 Dedicated Support</h3>
                            <p>Occupy selfies Tonx, +1 Truffaut beard organic normcore tilde flannel artisan squid cray
                                single-origin
                                coffee. Master cleanse vinyl Austin kogi, semiotics skateboard fap wayfarers health goth.
                                Helvetica cray
                                church-key hashtag Carles. Four dollar toast meggings seitan, Tonx pork belly VHS Bushwick.
                                Chambray banh
                                mi cornhole. Locavore messenger bag seitan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ 1st container end -->


        <div class="gap-60"></div>


        <!-- Counter Strat -->
        <div class="ts_counter_bg parallax parallax2">
            <div class="parallax-overlay"></div>
            <div class="container">
                <div class="row wow fadeInLeft text-center">
                    <div class="facts col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="fa fa-user"></i></span>
                        <div class="facts-num">
                            <span class="counter">1200</span>
                        </div>
                        <h3>Clients</h3>
                    </div>

                    <div class="facts col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="fa fa-institution"></i></span>
                        <div class="facts-num">
                            <span class="counter">1277</span>
                        </div>
                        <h3>Item Sold</h3>
                    </div>

                    <div class="facts col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="fa fa-suitcase"></i></span>
                        <div class="facts-num">
                            <span class="counter">869</span>
                        </div>
                        <h3>Projects</h3>
                    </div>

                    <div class="facts col-md-3 col-sm-6">
                        <span class="facts-icon"><i class="fa fa-trophy"></i></span>
                        <div class="facts-num">
                            <span class="counter">76</span>
                        </div>
                        <h3>Awwards</h3>
                    </div>

                    <div class="gap-40"></div>

                    <div class="col-12 text-center"><a href="#" class="btn btn-outline-primary text-white">See Our
                            Portfolio</a></div>

                </div>
                <!--/ row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Counter end -->

        <div class="gap-60"></div>


        <div class="container">
            <!-- 2nd container start -->

            <!-- Team start -->
            <section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading">
                            <span class="title-icon float-left"><i class="fa fa-weixin"></i></span>
                            <h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with
                                    4 years
                                    experience</span></h2>
                        </div>
                    </div><!-- Title row end -->

                    <div class="row text-center">
                        <div class="col-md-6 col-lg-3">
                            <div class="team wow slideInLeft">
                                <div class="img-hexagon">
                                    <img src="images/team/team1.jpg" alt="">
                                    <span class="img-top"></span>
                                    <span class="img-bottom"></span>
                                </div>
                                <div class="team-content">
                                    <h3>Vosgi Varduhi</h3>
                                    <p>Web Designer</p>
                                    <div class="team-social">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Team 1 end -->
                        <div class="col-md-6 col-lg-3">
                            <div class="team wow slideInLeft">
                                <div class="img-hexagon">
                                    <img src="images/team/team2.jpg" alt="">
                                    <span class="img-top"></span>
                                    <span class="img-bottom"></span>
                                </div>
                                <div class="team-content">
                                    <h3>Robert Aleska</h3>
                                    <p>Web Designer</p>
                                    <div class="team-social">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Team 2 end -->
                        <div class="col-md-6 col-lg-3">
                            <div class="team wow slideInRight">
                                <div class="img-hexagon">
                                    <img src="images/team/team3.jpg" alt="">
                                    <span class="img-top"></span>
                                    <span class="img-bottom"></span>
                                </div>
                                <div class="team-content">
                                    <h3>Taline Voski</h3>
                                    <p>Web Designer</p>
                                    <div class="team-social">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Team 3 end -->
                        <div class="col-md-6 col-lg-3">
                            <div class="team animate wow slideInRight">
                                <div class="img-hexagon">
                                    <img src="images/team/team4.jpg" alt="">
                                    <span class="img-top"></span>
                                    <span class="img-bottom"></span>
                                </div>
                                <div class="team-content">
                                    <h3>Alban Spencer</h3>
                                    <p>Web Designer</p>
                                    <div class="team-social">
                                        <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twt" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
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


        </div><!-- 2nd container end -->
    </section>
    <!--/ Main container end -->



@endsection
