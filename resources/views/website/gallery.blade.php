@extends('website.includes.app')
@section('main-content')
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">GALLERY</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Gallery</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Gallery Start -->
        <div class="rs-gallery-4 rs-gallery sec-spacer">
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
        <!-- Gallery End -->


@endsection
