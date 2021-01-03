@extends('website.includes.app')
@section('main-content')
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR COURSES</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{ route('website.index') }}">Home</a>
		                        </li>
		                        <li>Our Courses</li>
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
                    <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    	<a href="#">
							<img src="{{ asset('website-assets/images/about/history.jpg') }}" alt="History Image">
                    	</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>NURSERY / KG-I / KG-II</h2>
		                </div>
                    	<div class="about-desc">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Session Fee</td>
                                    <td>- Rs.</td>
                                    <td>2500.00</td>
                                    <td>Yearly</td>
                                </tr>
                                <tr>
                                    <td>Development</td>
                                    <td>- Rs.</td>
                                    <td>2000.00</td>
                                    <td>Yearly</td>
                                </tr>
                                <tr>
                                    <td>Contingency</td>
                                    <td>- Rs.</td>
                                    <td>2000.00</td>
                                    <td>Yearly</td>
                                </tr>
                                <tr>
                                    <td>Tution Fee</td>
                                    <td>- Rs.</td>
                                    <td>1000.00</td>
                                    <td>Monthly</td>
                                </tr>
                                <tr>
                                    <td>New Admission Fee</td>
                                    <td>- Rs.</td>
                                    <td>5000.00</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td>12500.00</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->


@endsection
