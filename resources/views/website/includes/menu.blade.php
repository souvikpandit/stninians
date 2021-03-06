<!--Full width header Start-->
		<div class="full-width-header">

			<!-- Toolbar Start -->
			<div class="rs-toolbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="rs-toolbar-left">
								<div class="welcome-message">
									<i class="fa fa-bank"></i><span>Welcome Cossipore St Ninians High School</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="rs-toolbar-right">
								<div class="toolbar-share-icon">
									<ul>
										<li><a href="https://www.youtube.com/channel/UCYjdpIBFB96whi626TqS0Qg"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://www.youtube.com/channel/UCYjdpIBFB96whi626TqS0Qg"><i class="fa fa-youtube-play"></i></a></li>
										<li><a href="https://www.google.com/search?gs_ssp=eJzj4tZP1zcsSTE0LDCrNGC0UjWoMLZMs7BMsUhJMktJsUxNSrMyqEhKTUo2NkgxTrMwtTBLMUjxEiwuUcjLzMtMzCtWKE7OyM_PAQDyKBZB&q=st+ninians+school&oq=st+ninians+&aqs=chrome.1.69i57j46i39i175i199j0j46i175i199l2j69i60l3.3966j0j7&sourceid=chrome&ie=UTF-8"><i class="fa fa-google"></i></a></li>
										{{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
									</ul>
                                </div>
                                @auth
                                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>Logout</a>
                                @endauth
                                @guest
								    <a href="{{ route('website.login') }}" class="apply-btn">Login/Sign Up</a>
                                @endguest
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Toolbar End -->

			<!--Header Start-->
			<header id="rs-header" class="rs-header">

				<!-- Header Top Start -->
				<div class="rs-header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact">
						            <div id="info-details" class="widget-text">
                                        <i class="glyph-icon flaticon-email"></i>
						                <div class="info-text">
                                            <a href="mailto:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[10] }}"> <span>Mail Us</span> {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[10] }}</a><br>
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="logo-area text-center">
									<a href="{{ route('website.index') }}"><img src="{{ asset('storage/'.$school_info->image) }}" alt="logo"></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact pull-right">
						            <div id="phone-details" class="widget-text">
						                <i class="glyph-icon flaticon-phone-call"></i>
						                <div class="info-text">
                                            <a href="tel:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[13] }}"><span>Call Us</span>{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[13] }}</a><br>
						                </div>
						            </div>
						        </div>
							</div>
						</div>
					</div>
				</div>
				<!-- Header Top End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="main-menu">
							<div class="row">
								<div class="col-sm-12">
									<!-- <div id="logo-sticky" class="text-center">
										<a href="index.html"><img src="images/logo.png" alt="logo"></a>
									</div> -->
									<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
									<nav class="rs-menu">
										<ul class="nav-menu">
											<!-- Home -->
											<!-- <li class="current-menu-item current_page_item menu-item-has-children"> <a href="#" class="home">Home</a>
												<ul class="sub-menu">
												  <li class="active"><a href="index.html">Home One</a> </li>
												  <li><a href="index2.html">Home Two</a> </li>
												  <li><a href="index3.html">Home Three</a></li>
												  <li><a href="index4.html">Home Four</a> </li>
												  <li><a href="index5.html">Home Five</a> </li>
												  <li><a href="instructor-home.html">Home Instructor</a> </li>
												  <li><a href="index7.html">Home Seven</a> </li>
												  <li><a href="index8.html">Home Eight</a> </li>
												</ul>
											</li> -->
                                            <!-- End Home -->
                                            @guest
                                            <li> <a href="{{ route('website.index') }}">Home</a></li>

                                            <li> <a href="{{ route('website.about') }}">About Us</a></li>

                                            <li> <a href="{{ route('website.prospectus') }}">Prospectus</a></li>

                                            <li> <a href="{{ route('website.gallery') }}">Gallery</a></li>

                                            <li> <a href="{{ route('website.contact') }}">Contact</a></li>

                                            <li> <a href="{{ route('website.login') }}">Apply Now</a></li>
                                            @endguest

                                            @auth

                                            <li> <a href="{{ route('website.index') }}">Home</a></li>

                                            <li> <a href="{{ route('website.about') }}">About Us</a></li>

                                            <li> <a href="{{ route('website.prospectus') }}">Prospectus</a></li>

                                            <li> <a href="{{ route('website.gallery') }}">Gallery</a></li>

                                            <li> <a href="{{ route('website.contact') }}">Contact</a></li>

                                            <li> <a href="{{ route('website.admission-form') }}">Admission Form</a></li>

                                            <li> <a href="{{ route('website.student-dashboard') }}">Dashboard</a></li>
                                            @endauth

										</ul>
									</nav>
                                    <div class="right-bar-icon rs-offcanvas-link text-right">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-user"></i></a>


                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
			</header>
			<!--Header End-->

		</div>
        <!--Full width header End-->
