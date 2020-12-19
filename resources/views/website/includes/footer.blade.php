@guest
<div class="charecter hide" id="charecter">
    <a href="{{ route('website.login') }}">
        <img class="blink" src="{{ asset('website-assets/images/character.png') }}" alt="">
    </a>
</div>
@endguest
        <!-- Footer Start -->
        <footer id="rs-footer" class="bg3 rs-footer">
			<div class="container">
				<!-- Footer Address -->
				<div>
					<div class="row footer-contact-desc">
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
                                <h4 class="contact-title">Address</h4>
                                @if ($school_info)
								<p class="contact-desc">
									{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[2] }}, {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[3] }}, {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[5] }} - {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[8] }}<br>
                                    {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[4] }}, {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[6] }}<br>
                                    {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[7] }}
								</p>

                                @else
                                    <p class="contact-desc">
									{{ GetDefaultText() }}<br>

								</p>
                                @endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-phone"></i>
                                <h4 class="contact-title">Phone Number</h4>
                                @if ($school_info)
                                    <p class="contact-desc">
                                        <a href="tel:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[13] }}">{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[13] }}</a><br>
									    <a href="tel:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[12] }}">{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[12] }}</a>
								    </p>
                                @else
                                    <p class="contact-desc">
									    {{ GetDefaultText() }}<br>
								    </p>
                                @endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
                                <h4 class="contact-title">Email Address</h4>
                                @if ($school_info)
                                    <p class="contact-desc">
									   <a href="mailto:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[10] }}"> {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[10] }}</a><br>
									    <a href="mailto:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[11] }}"> {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[11] }}</a>
								    </p>
                                @else
                                    <p class="contact-desc">
									    {{ GetDefaultText() }}<br>
								    </p>
                                @endif

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="about-widget">
                                <img src="{{ asset('website-assets/images/logo-footer.png') }}" alt="Footer Logo">
                                <p>We create Premium Html Themes for more than three years. Our team goal is to reunite the elegance of unique.</p>
                                <p class="margin-remove">We create Unique and Easy To Use Flexible Html Themes.</p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <h5 class="footer-title">Usefull Links</h5>
                            <ul class="sitemap-widget">
                                <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses</a></li>
                                <li><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                                <li><a href="error-404.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Error 404</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h5 class="footer-title">NEWSLETTER</h5>
                            <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                            <form class="news-form">
                                <input type="text" class="form-input" placeholder="Enter Your Email">
                                <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="footer-share">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>© 2020 <a href="http://prayukty.com/">PRAYUKTY Theme</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>


        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Computer Technology" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ asset('website-assets/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('website-assets/js/jquery.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('website-assets/js/bootstrap.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('website-assets/js/owl.carousel.min.js') }}"></script>
		<!-- slick.min js -->
        <script src="{{ asset('website-assets/js/slick.min.js') }}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('website-assets/js/isotope.pkgd.min.js') }}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('website-assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('website-assets/js/wow.min.js') }}"></script>
        <!-- counter top js -->
        <script src="{{ asset('website-assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('website-assets/js/jquery.counterup.min.js') }}"></script>
        <!-- magnific popup -->
        <script src="{{ asset('website-assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- rsmenu js -->
        <script src="{{ asset('website-assets/js/rsmenu-main.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('website-assets/js/plugins.js') }}"></script>
        <!-- google map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ"></script>
		 <!-- main js -->
        <script src="{{ asset('website-assets/js/main.js') }}"></script>

        <script src="{{ asset('website-assets/js/custom.js') }}"></script>

        <script>
            setTimeout(function(){
            document.getElementById('charecter').classList.remove('hide').fadein();
            }, 5000);
        </script>
    </body>
</html>
