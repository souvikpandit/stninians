@extends('website.includes.app')
@section('main-content')
    @include('website.includes.banner')
		<!-- Services Start -->
        <div class="rs-services rs-services-style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	    	<i class="fa fa-flag"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Playground</h4>
                    	        <p>Big play-ground available for students</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-book rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Books & Liberary</h4>
                    	        <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-user rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Certified Teachers</h4>
                    	        <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title">Certification</h4>
                    	        <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Services End -->
		<!-- History Start -->
        <div class="rs-history sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    	<a href="#">
							<img src="{{ asset('website-assets/images/about/history.jpg') }}" alt="History Image">
                    	</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>Principal's Desk</h2>
		                </div>
                    	<div class="about-desc">
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe derit in voluptate velit esse cillum.</p>

                			<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot fore see the pain and trouble that are bound to belongs to who fail in their duty.</p>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->


		<!-- Counter Up Section Start-->
        <div class="rs-counter pt-100 pb-70 bg3">
            <div class="container">
                <div class="row">
                	{{-- <div class="col-lg-5 col-md-12">
                		<div class="counter-content">
                			<h2 class="counter-title">NOTICE</h2>
                			<div class="counter-text">
                				<p>ALl notice avalable here</p>
                			</div>
                			<div class="counter-img rs-image-effect-shine">
                				<img src="{{ asset('website-assets/images/counter/1.jpg') }}" alt="Counter Discussion">
                			</div>
                		</div>
                	</div> --}}
                	<div class="col-lg-12 col-md-12 mt-80">
                		<div class="row">
		                    <div class="col-md-4">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">2500</h2>
		                            <h4 class="counter-desc">Session Fee</h4>
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">2000</h2>
		                            <h4 class="counter-desc">Development</h4>
		                        </div>
                            </div>
                            <div class="col-md-4">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">2000</h2>
		                            <h4 class="counter-desc">Contingency</h4>
		                        </div>
		                    </div>
                		</div>
                		<div class="row">
		                    <div class="col-md-4">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">1000</h2>
		                            <h4 class="counter-desc">Tution Fee <small>(Monthly)</small> </h4>
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">5000</h2>
		                            <h4 class="counter-desc">New Admissiomn Fee</h4>
		                        </div>
                            </div>
                            <div class="col-md-4">
		                        <div class="rs-counter-list">
		                            <h2 class="counter-number plus">12500</h2>
		                            <h4 class="counter-desc">Total</h4>
		                        </div>
		                    </div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <!-- Counter Down Section End -->

        <!-- About Us Start -->
        <div id="rs-about" class="rs-about sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>ABOUT US</h2>
                	<p>Fusce sem dolor, interdum in fficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img rs-animation-hover">
							<img src="{{ asset('website-assets/images/about/about.jpg') }}" alt="img02">
							<a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=tzMpWiGL8D8" title="Video Icon">
							</a>
							<div class="overly-border"></div>
						</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                    	<div class="about-desc">
                		    <h3>WELCOME TO EDULEARN</h3>
                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    	</div>
						<div id="accordion" class="rs-accordion-style1">
						    <div class="card">
						        <div class="card-header" id="headingOne">
						            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          		Our History
						            </h3>
						        </div>
						        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						            <div class="card-body">
						                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						            </div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="card-header" id="headingTwo">
						            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          		Our Mission
						            </h3>
						        </div>
						        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						            <div class="card-body">
						                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						            </div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="card-header mb-0" id="headingThree">
						            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          		Our Vision
						            </h3>
						        </div>
						        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						            <div class="card-body">
						                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
						            </div>
						        </div>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us End -->

        <!-- Calltoaction Start -->
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">Admission Open</h2>
                        <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
                    </div>
				    <a class="cta-button" href="#">Apply Now</a>
				</div>
            </div>
        </div>
        <!-- Calltoaction End -->






		<!-- Testimonial Start -->
        {{-- <div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
					<h2 class="white-color">WHAT PEOPLE SAYS</h2>
					<p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
				</div>
				<div class="row">
			        <div class="col-md-12">
						<div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
			                <div class="testimonial-item">
			                    <div class="testi-img">
			                        <img src="{{ asset('website-assets/images/testimonial/1.jpg') }}" alt="Jhon Smith">
			                    </div>
			                    <div class="testi-desc">
			                        <h4 class="testi-name">Luise Henrikes</h4>
			                        <p>
			                            Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
			                        </p>
			                    </div>
			                </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{ asset('website-assets/images/testimonial/2.jpg') }}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{ asset('website-assets/images/testimonial/3.jpg') }}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{ asset('website-assets/images/testimonial/4.jpg') }}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{ asset('website-assets/images/testimonial/5.jpg') }}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
			            </div>
			        </div>
			    </div>
			</div>
        </div> --}}
        <!-- Testimonial End -->

        <!-- Partner Start -->
        <div id="rs-partner" class="rs-gallery-4 rs-gallery sec-spacer">
            <div class="container">
            	<div class="sec-title-2 mb-50 text-center">
            	    <h2>GALLERY (4 COLUMNS)</h2>
            		<p>Considering primary motivation for the generation of narratives is a useful concept</p>
            	</div>
            	<div class="row">
            		<div class="col-lg-3 col-md-6">
            			<div class="gallery-item">
            			    <img src="{{ asset('website-assets/images/gallery/1.jpg') }}" alt="Gallery Image">
            			    <div class="gallery-desc">
            					<h3><a href="#">Photo Title Here</a></h3>
            					<p>There are many variations of Lorem Ipsum available</p>
            					<a class="image-popup" href="{{ asset('website-assets/images/gallery/1.jpg') }}" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
            		<div class="col-lg-3 col-md-6">
            			<div class="gallery-item">
            			    <img src="{{ asset('website-assets/images/gallery/2.jpg') }}" alt="Gallery Image">
            			    <div class="gallery-desc">
            					<h3><a href="#">Photo Title Here</a></h3>
            					<p>There are many variations of Lorem Ipsum available</p>
            					<a class="image-popup" href="{{ asset('website-assets/images/gallery/2.jpg') }}" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
            		<div class="col-lg-3 col-md-6">
            			<div class="gallery-item">
            			    <img src="{{ asset('website-assets/images/gallery/3.jpg') }}" alt="Gallery Image">
            			    <div class="gallery-desc">
            					<h3><a href="#">Photo Title Here</a></h3>
            					<p>There are many variations of Lorem Ipsum available</p>
            					<a class="image-popup" href="{{ asset('website-assets/images/gallery/3.jpg') }}" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
            		<div class="col-lg-3 col-md-6">
            			<div class="gallery-item">
            			    <img src="{{ asset('website-assets/images/gallery/4.jpg') }}" alt="Gallery Image">
            			    <div class="gallery-desc">
            					<h3><a href="#">Photo Title Here</a></h3>
            					<p>There are many variations of Lorem Ipsum available</p>
            					<a class="image-popup" href="{{ asset('website-assets/images/gallery/4.jpg') }}" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
                </div>
                <div class="row">
            		<div class="col-lg-3 col-md-6">
            			<div class="gallery-item">
            			    <img src="{{ asset('website-assets/images/gallery/5.jpg') }}" alt="Gallery Image">
            			    <div class="gallery-desc">
            					<h3><a href="#">Photo Title Here</a></h3>
            					<p>There are many variations of Lorem Ipsum available</p>
            					<a class="image-popup" href="{{ asset('website-assets/images/gallery/5.jpg') }}" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
            		<div class="col-lg-3 col-md-6">
            			<div class="gallery-item">
            			    <img src="{{ asset('website-assets/images/gallery/6.jpg') }}" alt="Gallery Image">
            			    <div class="gallery-desc">
            					<h3><a href="#">Photo Title Here</a></h3>
            					<p>There are many variations of Lorem Ipsum available</p>
            					<a class="image-popup" href="{{ asset('website-assets/images/gallery/6.jpg') }}" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
            		<div class="col-lg-3 col-md-6">
            			<div class="gallery-item">
            			    <img src="{{ asset('website-assets/images/gallery/5.jpg') }}" alt="Gallery Image">
            			    <div class="gallery-desc">
            					<h3><a href="#">Photo Title Here</a></h3>
            					<p>There are many variations of Lorem Ipsum available</p>
            					<a class="image-popup" href="{{ asset('website-assets/images/gallery/5.jpg') }}" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
            		<div class="col-lg-3 col-md-6">
            			<div class="gallery-item">
            			    <img src="{{ asset('website-assets/images/gallery/1.jpg') }}" alt="Gallery Image">
            			    <div class="gallery-desc">
            					<h3><a href="#">Photo Title Here</a></h3>
            					<p>There are many variations of Lorem Ipsum available</p>
            					<a class="image-popup" href="{{ asset('website-assets/images/gallery/1.jpg') }}" title="Photo Title Here">
            						<i class="fa fa-search"></i>
            					</a>
            			    </div>
            			</div>
            		</div>
            	</div>
        	    <nav aria-label="Page navigation example">
        			<ul class="pagination justify-content-center">
        				<li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
        				<li class="page-item"><a class="page-link active" href="#">1</a></li>
        				<li class="page-item"><a class="page-link" href="#">2</a></li>
        				<li class="page-item"><a class="page-link dotted" href="#">...</a></li>
        				<li class="page-item"><a class="page-link" href="#">5</a></li>
        				<li class="page-item"><a class="page-link" href="#">6</a></li>
        				<li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
        			</ul>
        	    </nav>
            </div>
        </div>
        <!-- Partner End -->
@endsection
