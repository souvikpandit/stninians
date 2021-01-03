@extends('website.includes.app')
@section('main-content')


		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">About Us</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{ route('website.index') }}">Home</a>
		                        </li>
		                        <li>About Us</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- History Start -->
        <div class="rs-history sec-spacer">
            <div class="container">
                <div class="row">
                    @if ($about)
                        <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    	    <a href="#">
							    <img src="{{ asset('storage/'.$about->image) }}" alt="History Image">
                    	    </a>
                        </div>
                    @else
                        <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    	    <a href="#">
							    <img src="{{ asset(GetDefaultImage()) }}" alt="History Image">
                    	    </a>
                        </div>
                    @endif

                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>OUR HISTORY</h2>
                        </div>
                        @if ($about)
                            <div class="about-desc">
                			    <p>{{ $about->getMetaDetails($about->id,'about') }}</p>
                    	    </div>
                        @else
                            <div class="about-desc">
                			    <p>{{ GetDefaultText() }}</p>
                    	    </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->

        <!-- Mission Start -->
        <div class="rs-mission sec-color sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mobile-mb-50">
		                <div class="abt-title">
		                    <h2>OUR MISSION</h2>
		                </div>
                    	@if ($about)
                            <div class="about-desc">
                			    <p>{{ $about->getMetaDetails($about->id,'mission') }}</p>
                    	    </div>
                        @else
                            <div class="about-desc">
                			    <p>{{ GetDefaultText() }}</p>
                    	    </div>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-12">
                    	<div class="row">
                    		@if ($about)
                                <div class="col-lg-12 col-md-12 rs-vertical-bottom mobile-mb-50">
                                    <a href="#">
                                        <img src="{{ asset('storage/'.$about->getMetaDetails($about->id,'mission_image')) }}" alt="Mission Image">
                                    </a>
                                </div>
                            @else
                                <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                                    <a href="#">
                                        <img src="{{ asset(GetDefaultImage()) }}" alt="Mission Image">
                                    </a>
                                </div>
                            @endif

                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission End -->

        <!-- Vision Start -->
        <div class="rs-vision sec-spacer">
            <div class="container">
                <div class="row">
                    @if ($about)
                        <div class="col-lg-6 col-md-12 mobile-mb-50">
                            <div class="vision-img rs-animation-hover">
                                <img src="{{ asset('storage/'.$about->getMetaDetails($about->id,'vision_image')) }}" alt="Vision">
                                <a class="popup-youtube rs-animation-fade" href="{{ $about->getMetaDetails($about->id,'video_link') }}" title="Video Icon">
                                </a>
                                <div class="overly-border"></div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">

                                <img src="{{ asset(GetDefaultImage()) }}" alt="Mission Image">
                        </div>

                    @endif

                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>OUR VISION</h2>
		                </div>
                    	@if ($about)
                            <div class="vision-desc">
                			    <p>{{ $about->getMetaDetails($about->id,'vision') }}</p>
                    	    </div>
                        @else
                            <div class="about-desc">
                			    <p>{{ GetDefaultText() }}</p>
                    	    </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Vision End -->
@endsection
