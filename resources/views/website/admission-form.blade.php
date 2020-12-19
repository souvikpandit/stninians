@extends('website.includes.app')
@section('main-content')
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Apply Now</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{ route('website.student-dashboard') }}">Dashboard</a>
		                        </li>
		                        <li>Admission Form</li>
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
                    <div class="col-lg-12 col-md-12">
		                <div class="abt-title">
		                    <h2>Admission Form</h2>
		                </div>
                    	<div class="form-desc">
                			<form action="#" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="child_name">Child's Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="child_name">Date of Birth</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="child_name">Passport Size Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="row">
                                    <div class="col-md-12 abt-title">
                                        <h2>Parents Details</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="child_name">Father's Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="child_name">Father's Occupation</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="child_name">Father's Address <small>Residential</small></label>
                                            <textarea class="form-control" id="" cols="30" rows="4"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label for="child_name">Father's Address <small>Office</small></label>
                                            <textarea class="form-control" id="" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="child_name">Mothers's Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="child_name">Mothers's Occupation</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="child_name">Mothers's Address <small>Residential</small></label>
                                            <textarea class="form-control" id="" cols="30" rows="4"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label for="child_name">Mothers's Address <small>Office</small></label>
                                            <textarea class="form-control" id="" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 abt-title">
                                        <h2>Other Information</h2>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="child_name">Telephone Number</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="child_name">Religion</label>
                                        <select type="number" class="form-control">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="child_name">Caste</label>
                                        <select type="number" class="form-control">
                                            <option value="">Select</option>
                                            <option value="General">General</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                            <option value="OBC">OBC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 abt-title">
                                        <h2>Guardina Details  <input type="checkbox"> <small style="font-size:12px;">Click here If same as parents</small></h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="child_name">Guardian Name</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="child_name">Guardian Telephone Number</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="child_name">Guardian's Address</label>
                                            <textarea class="form-control" id="" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 abt-title">
                                        <h2>Academics</h2>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="child_name">Class to which pupil seeks admission</label>
                                        <select type="number" class="form-control">
                                            <option value="">Select</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Name of the school last attended</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="checkbox" requird>  I here by declare that all the information is true.
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4 offset-md-8">
                                        <input type="submit" value="Apply" class="btn btn-danger btn-block">
                                    </div>
                                </div>
                            </form>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->
@endsection
