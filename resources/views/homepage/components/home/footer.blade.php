  <footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-4 col-lg-4 footer-widget mb-5 mb-lg-0">
                <h3 class="widget-title">Recent Posts</h3>
                <div class="latest-post-items media">
                    <div class="latest-post-content media-body">
                        <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
                        <p class="post-meta">
                            <span class="author">Posted by John Doe</span>
                            <span class="post-meta-cat">in<a href="#"> Blog</a></span>
                        </p>
                    </div>
                </div><!-- 1st Latest Post end -->

                <div class="latest-post-items media">
                    <div class="latest-post-content media-body">
                        <h4><a href="#">Few Answers in Case of Murdered Law Professor</a></h4>
                        <p class="post-meta">
                            <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
                            <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a
                                    href="#">03</a></span>
                        </p>
                    </div>
                </div><!-- 2nd Latest Post end -->

                <div class="latest-post-items media">
                    <div class="latest-post-content media-body">
                        <h4><a href="#">Over the year we have lots of experience in our field</a></h4>
                        <p class="post-meta">
                            <span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
                            <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a
                                    href="#">14</a></span>
                        </p>
                    </div>
                </div><!-- 3rd Latest Post end -->

            </div> --}}
            <!--/ End Recent Posts-->

			{{-- <div class="col-12 col-md-6  col-lg-4 footer-widget mb-5 mb-lg-0">
				<h3 class="widget-title">Quick Links</h3>

				<ul class="unstyled arrow">
					<li><a href="#">About CraftTheme</a></li>
					<li><a href="#">How We Help</a></li>
					<li><a href="#">Upcoming Events</a></li>
					<li><a href="#">Customer Support</a></li>
					<li><a href="#">Fill a Form</a></li>
					<li><a href="#">Latest News</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">404 Error Page</a></li>
					<li><a href="#">Coming Soon</a></li>
					<li><a href="#">Contact</a></li>
				</ul>

			</div> --}}

            {{-- <div class="col-md-8 col-lg-4 footer-widget mb-5 mb-lg-0">
                <h3 class="widget-title">Quick Links</h3>

				<ul class="unstyled arrow">
					<li><a href="#">About CraftTheme</a></li>
					<li><a href="#">How We Help</a></li>
					<li><a href="#">Upcoming Events</a></li>
					<li><a href="#">Customer Support</a></li>
					<li><a href="#">Fill a Form</a></li>
					<li><a href="#">Latest News</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">404 Error Page</a></li>
					<li><a href="#">Coming Soon</a></li>
					<li><a href="#">Contact</a></li>
				</ul> --}}







                {{-- <h3 class="widget-title">Flickr Photos</h3> --}}

                {{-- <div class="img-gallery">
                    <div class="img-container">
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/1.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/1.jpg" alt="">
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/2.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/2.jpg" alt="">
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/3.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/3.jpg" alt="">
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/4.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/4.jpg" alt="">
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/5.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/5.jpg" alt="">
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/6.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/6.jpg" alt="">
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/6.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/7.jpg" alt="">
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/6.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/8.jpg" alt="">
                        </a>
                        <a class="thumb-holder" data-rel="prettyPhoto"
                            href="{{ asset('userHomepage') }}/images/gallery/6.jpg">
                            <img src="{{ asset('userHomepage') }}/images/gallery/9.jpg" alt="">
                        </a>
                    </div>
                </div> --}}
            {{-- </div> --}}
            <!--/ end flickr -->

            <div class="col-md-12 col-lg-4 footer-widget footer-about-us mb-5 mb-lg-0 m-auto">
                <h3 class="widget-title">{{ __('translate.aboutUs') }}</h3>
                <p>{{ __('translate.footerDescription')}}</p>
                <h4>{{ __('translate.address.0') }}</h4>
                <p>{{ __('translate.address.1') }}</p>
                <div class="row">
                    <div class="col-12">
                        <h4>{{ __('translate.email.0') }}</h4>
                        <p><a href="mailto:{{ __('translate.email.1') }}" class="text-white">{{ __('translate.email.1') }}</a></p>
                    </div>
                    <div class="col-12">
                        <h4>{{ __('translate.phone.0') }}</h4>
                        <p><a href="tel:{{ __('translate.phone.1') }}" class="text-white">{{ __('translate.phone.1') }}</a></p>
                    </div>
                </div>
                <form action="#" role="form">
                    <div class="input-group subscribe">
                        <input type="email" class="form-control" placeholder="{{ __('translate.emailPlaceholder') }}"
                            required="">
                        <span class="input-group-addon">
                            <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
                        </span>
                    </div>
                </form>
            </div>
            <!--/ end about us -->

        </div><!-- Row end -->
    </div><!-- Container end -->
</footer>