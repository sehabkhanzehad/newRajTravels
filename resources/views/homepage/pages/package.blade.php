@extends('homepage.layouts.main')
@section('pageTitle', 'Package | ' . $package->name)
@section('styles')
<style>
    .post-content  li {
        margin-left: 20px;
    }
</style>
@endsection

@section('content')
    <div id="banner-area">
        <img src="{{ asset('userHomepage') }}/images/banner/banner1.jpg" class="w-100" style="height: 300px" alt="" />
        <div class="parallax-overlay"></div>
        <!-- Subpage title start -->
        <div class="banner-title-content">
            <div class="text-center">
                <h2>Package Details</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('homepage.index') }}">Home</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">{{ $package->package_name }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Blog details page start -->
    <section id="main-container">
        <div class="container">
            <div class="row">
                <!-- Blog start -->
                <div class="col-lg-8">
                    <!-- Blog post start -->
                    <div class="post-content">
                        <!-- post image start -->
                        <div class="post-image-wrapper">
                            <img src="{{ $package->package_image }}" class="img-fluid w-100 h-auto" alt="" />
                            {{-- <span class="blog-date"><a href="#"> May 03, 2015</a></span> --}}
                        </div><!-- post image end -->
                        <div class="post-header clearfix">
                            <h2 class="post-title">
                                {{ $package->package_name }}
                            </h2>
                            {{-- <div class="post-meta">
                                <span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
                                <span class="post-meta-cats">in <a href="#"> News</a></span>
                                <div class="float-right">
                                    <span class="post-meta-comments"><a href="#"><i class="fa fa-comment-o"></i>
                                            11</a></span>
                                    <span class="post-meta-hits"><a href="#"><i class="fa fa-heart-o"></i>
                                            62</a></span>
                                </div>

                            </div><!-- post meta end --> --}}
                        </div><!-- post heading end -->
                        <div class="entry-content">
                            <p>{!! $package->package_description !!}</p>
                        </div>
                        <!-- Author info start -->
                        {{-- <div class="about-author">
                            <div class="author-img float-left">
                                <img src="images/blog/author.jpg" alt="" />
                            </div>
                            <div class="author-info">
                                <h3>Josefine Kristy <span>Web Developer</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum eget justo
                                    sit amet
                                    varius.</p>
                                <p class="author-url">Website: <span><a href="#">http://www.spikeincor.eu</a></span>
                                </p>

                            </div>
                        </div> --}}
                        <!-- Author info end -->

                        <div class="gap-30"></div>
                    </div><!-- Blog post end -->
                </div>
                <!--/ Content col end -->
                <!-- sidebar start -->
                <div class="col-lg-4">

                    <div class="sidebar sidebar-right">

                        <!-- Blog search start -->
                        {{-- <div class="widget widget-search">
                            <h3 class="widget-title">Search</h3>
                            <div id="search">
                                <input class="form-control form-control-lg" placeholder="search" type="search">
                            </div>
                        </div><!-- Blog search end --> --}}

                        <!-- Tab widget start-->
                        {{-- <div class="widget widget-tab">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#popular-tab"
                                        data-toggle="tab">popular</a></li>
                                <li class="nav-item"><a class="nav-link" href="#recent-tab" data-toggle="tab">recent</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#comments-tab"
                                        data-toggle="tab">comments</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="popular-tab">
                                    <ul class="posts-list list-unstyled clearfix">
                                        <li>
                                            <div class="posts-thumb float-left">
                                                <a href="#">
                                                    <img alt="img" src="images/blog/blog1.jpg">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's
                                                        'oldest town'</a>
                                                </h4>
                                                <p class="post-meta">
                                                    <span class="post-meta-author">Posted by <a href="#">
                                                            Admin</a></span>
                                                    <span class="post-meta-date"><a href="#"> <i
                                                                class="fa fa-clock-o"></i> November 14</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li><!-- First post end-->
                                        <li>
                                            <div class="posts-thumb float-left">
                                                <a href="#">
                                                    <img alt="img" src="images/blog/blog2.jpg">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="entry-title">
                                                    <a href="#">Lorem ipsum dolor sit amet, consectetur claims</a>
                                                </h4>
                                                <p class="post-meta">
                                                    <span class="post-meta-author">Posted by <a href="#">
                                                            Admin</a></span>
                                                    <span class="post-meta-date"><a href="#"> <i
                                                                class="fa fa-clock-o"></i> October 19</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li><!-- 2nd post end-->
                                        <li>
                                            <div class="posts-thumb float-left">
                                                <a href="#">
                                                    <img alt="img" src="images/blog/blog3.jpg">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="entry-title">
                                                    <a href="#">Should You Ever Skip Giving A Tip?</a>
                                                </h4>
                                                <p class="post-meta">
                                                    <span class="post-meta-author">Posted by <a href="#">
                                                            Admin</a></span>
                                                    <span class="post-meta-date"><a href="#"> <i
                                                                class="fa fa-clock-o"></i> November 21</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li><!-- 3rd post end-->
                                    </ul>
                                </div><!-- Popular tabpan end -->

                                <div class="tab-pane fade" id="recent-tab">
                                    <ul class="posts-list list-unstyled clearfix">
                                        <li>
                                            <div class="posts-thumb float-left">
                                                <a href="#">
                                                    <img alt="img" src="images/blog/blog3.jpg">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's
                                                        'oldest town'</a>
                                                </h4>
                                                <p class="post-meta">
                                                    <span class="post-meta-author">Posted by <a href="#">
                                                            Admin</a></span>
                                                    <span class="post-meta-date"><a href="#"> <i
                                                                class="fa fa-clock-o"></i> November 21</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li><!-- First post end-->
                                        <li>
                                            <div class="posts-thumb float-left">
                                                <a href="#">
                                                    <img alt="img" src="images/blog/blog1.jpg">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's
                                                        'oldest town'</a>
                                                </h4>
                                                <p class="post-meta">
                                                    <span class="post-meta-author">Posted by <a href="#">
                                                            Admin</a></span>
                                                    <span class="post-meta-date"><a href="#"> <i
                                                                class="fa fa-clock-o"></i> October 19</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li><!-- 2nd post end-->
                                    </ul>
                                </div><!-- Recent tabpan end -->

                                <div class="tab-pane fade" id="comments-tab">
                                    <ul class="posts-list list-unstyled clearfix">
                                        <li>
                                            <div class="posts-avator float-left">
                                                <a href="#">
                                                    <img alt="img" src="images/blog/avator1.png">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="entry-title"><a href="#">If you are going to use a
                                                        passage of Lorem Ipsum</a>
                                                </h4>
                                                <p class="post-meta">
                                                    <span class="post-meta-author">Posted by <a href="#">
                                                            John</a></span>
                                                    <span class="post-meta-date"><a href="#"> <i
                                                                class="fa fa-clock-o"></i> November 21</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li><!-- First post end-->
                                        <li>
                                            <div class="posts-avator float-left">
                                                <a href="#">
                                                    <img alt="img" src="images/blog/avator2.jpg">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="entry-title"><a href="#">you need to be sure there isn’t
                                                        anything embarra</a>
                                                </h4>
                                                <p class="post-meta">
                                                    <span class="post-meta-author">Posted by <a href="#">
                                                            Tina</a></span>
                                                    <span class="post-meta-date"><a href="#"> <i
                                                                class="fa fa-clock-o"></i> October 18</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </li><!-- 2nd post end-->
                                    </ul>
                                </div><!-- Comment tabpan end -->
                            </div><!-- Tab content end -->
                        </div> --}}
                        <!-- Tab widget end-->

                        <!-- Blog category start -->
                        <div class="widget widget-categories">
                        <h3 class="widget-title">Package Features</h3>
                            <ul class="category-list clearfix">
                                @foreach ($package->features as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Blog category end -->



                        <!-- Blog tags start -->
                        {{-- <div class="widget">
                            <h3 class="widget-title">Text Widgets</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when
                                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                normalopposed.</p>
                        </div> --}}
                        <!-- Text widget end -->

                    </div><!-- sidebar end -->
                </div>
            </div>
            <!--/ row end -->
        </div>
        <!--/ container end -->
    </section><!-- Blog details page end -->


@endsection
