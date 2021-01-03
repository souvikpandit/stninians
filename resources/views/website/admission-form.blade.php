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
        @if (empty($student_form_details))

        <div class="rs-history sec-spacer">
            <div class="container">
                <div id="form-messages" class="col-md-12" style="margin-top: -70px;">
                    <b>@include('website.includes.messages')</b>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
		                <div class="abt-title">
		                    <h2>Admission Form</h2>
		                </div>
                    	<div class="form-desc">
                			<form action="{{ route("student.admission") }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>All ( <span style="color:red">*</span> ) fields are mandetory to be filled.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="student_id" value="{{ Auth::user()->id }}">
                                    <div class="form-group col-md-3">
                                        <label>Child's Name <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" name="student_name" value="{{ old('student_name') }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Date of Birth <span style="color:red">*</span></label>
                                        <input type="date" class="form-control" name="student_date_of_birth" value="{{ old('student_date_of_birth') }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Birth Certificate <span style="color:red">*</span></label>
                                        <input type="file" class="form-control" name="student_birth_certificate">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Passport Size Image <span style="color:red">*</span></label>
                                        <input type="file" class="form-control" name="student_photo">
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="row">
                                    <div class="col-md-12 abt-title">
                                        <h2>Parents Details</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text" class="form-control" id="father_name" name="student_father_name" value="{{ old('student_father_name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Occupation</label>
                                            <input type="text" class="form-control" name="student_father_occupation" value="{{ old('student_father_occupation') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Father's Address <small>Residential</small></label>
                                            <textarea class="form-control" id="father_address" cols="30" rows="4" name="student_father_address">{{ old('student_father_address') }}</textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Father's Address <small>Office</small></label>
                                            <textarea class="form-control" id="" cols="30" rows="4" name="student_father_office_address">{{ old('student_father_office_address') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mothers's Name</label>
                                            <input type="text" class="form-control" name="student_mother_name" value="{{ old('student_mother_name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Mothers's Occupation</label>
                                            <input type="text" class="form-control" name="student_mother_occupation" value="{{ old('student_mother_occupation') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Mothers's Address <small>Residential</small></label>
                                            <textarea class="form-control" id="" cols="30" rows="4" name="student_mother_address">{{ old('student_mother_address') }}</textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Mothers's Address <small>Office</small></label>
                                            <textarea class="form-control" id="" cols="30" rows="4" name="student_mother_office_address">{{ old('student_mother_office_address') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 abt-title">
                                        <h2>Other Information</h2>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Telephone Number <span style="color:red">*</span></label>
                                        <input type="number" class="form-control" id="father_phno" name="student_phone_number">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Religion</label>
                                        <select type="number" class="form-control" name="student_religion">
                                            <option value="">Select</option>
                                            <option value="Hinduism" {{ old('student_religion') == 'Hinduism' ? 'selected' : '' }}>Hinduism</option>
                                            <option value="Christianity" {{ old('student_religion') == 'Christianity' ? 'selected' : '' }}>Christianity</option>
                                            <option value="Islam" {{ old('student_religion') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                            <option value="Sikhism" {{ old('student_religion') == 'Sikhism' ? 'selected' : '' }}>Sikhism</option>
                                            <option value="Buddhism" {{ old('student_religion') == 'Buddhism' ? 'selected' : '' }}>Buddhism</option>
                                            <option value="Jainism" {{ old('student_religion') == 'Jainism' ? 'selected' : '' }}>Jainism</option>
                                            <option value="Unaffiliated" {{ old('student_religion') == 'Unaffiliated' ? 'selected' : '' }}>Unaffiliated</option>
                                            <option value="Others" {{ old('student_religion') == 'Others' ? 'selected' : '' }}>Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Caste <span style="color:red">*</span></label>
                                        <select type="number" class="form-control" name="student_caste">
                                            <option value="">Select</option>
                                            <option value="General" {{ old('student_religion') == 'General' ? 'selected' : '' }}>General</option>
                                            <option value="SC" {{ old('student_religion') == 'SC' ? 'selected' : '' }}>SC</option>
                                            <option value="ST" {{ old('student_religion') == 'ST' ? 'selected' : '' }}>ST</option>
                                            <option value="OBC" {{ old('student_religion') == 'OBC' ? 'selected' : '' }}>OBC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 abt-title">
                                        <h2>Guardian Details  <input type="checkbox" onclick="gurdianSameAsParent()" id="same_as_parent"> <small style="font-size:12px;">Click here If same as parents</small></h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Guardian Name <span style="color:red">*</span></label>
                                            <input type="text" class="form-control" id="guardian_name" name="student_guardian_name" value="{{ old('"student_guardian_name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Guardian Telephone Number <span style="color:red">*</span></label>
                                            <input type="number" class="form-control" id="guardian_phno" name="student_guardian_phone_number" value="{{ old('student_guardian_phone_number') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Guardian's Address <span style="color:red">*</span></label>
                                            <textarea class="form-control"  cols="30" rows="4" id="guardian_address" name="student_guardian_address">{{ old('student_guardian_address') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 abt-title">
                                        <h2>Academics</h2>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Class to which pupil seeks admission <span style="color:red">*</span></label>
                                        <select type="number" class="form-control" name="student_class">
                                            <option value="">Select</option>
                                            <option value="Nursery" {{ old('student_class') == 'Nursery' ? 'selected' : '' }}>Nursery</option>
                                            <option value="KG-I" {{ old('student_class') == 'KG-I' ? 'selected' : '' }}>KG-I</option>
                                            <option value="KG-II" {{ old('student_class') == 'KG-II' ? 'selected' : '' }}>KG-II</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label>Name of the school last attended</label>
                                        <input type="text" class="form-control" name="student_last_school" value="{{ old('student_last_school') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="checkbox" required>  I here by declare that all the information is true.
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
                @else


            <div class="rs-history sec-spacer">
                <div class="container">
                        <div class="col-lg-12 col-md-12">
                                <div class="abt-title">
                                    <h2>Admission Form Details</h2>
                                </div>
                                <div class="about-desc">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td style="width: 30%">Student Name</td>
                                            <td>{{ Auth::user()->name }}</td>

                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td>{{ date("d M , Y",strtotime($student_form_details->student_date_of_birth)) }}</td>

                                        </tr>
                                        <tr>
                                            <td>Birth Cirtificate</td>
                                            <td><a href="{{ asset('storage'.$student_form_details->student_birth_certificate) }}" target="_blank">view</a></td>

                                        </tr>
                                        <tr>
                                            <td>Photo</td>
                                            <td><a href="{{ asset('storage'.$student_form_details->student_photo) }}" target="_blank">view</a></td>

                                        </tr>
                                        <tr>
                                            <td>Father's Name</td>
                                            <td>{{$student_form_details->student_father_name}}</td>

                                        </tr>
                                        <tr>
                                            <td>Father's Occupation</td>
                                            <td>{{$student_form_details->student_father_occupation}}</td>

                                        </tr>
                                        <tr>
                                            <td>Father's Recidencial Address</td>
                                            <td>{{$student_form_details->student_father_address}}</td>

                                        </tr>
                                        <tr>
                                            <td>Father's Office Address</td>
                                            <td>{{$student_form_details->student_father_office_address}}</td>

                                        </tr>
                                        <tr>
                                            <td>Mother's Name</td>
                                            <td>{{$student_form_details->student_mother_name}}</td>

                                        </tr>
                                        <tr>
                                            <td>Mother's Occupation</td>
                                            <td>{{$student_form_details->student_mother_occupation}}</td>

                                        </tr>
                                        <tr>
                                            <td>Mother's Recidencial Address</td>
                                            <td>{{$student_form_details->student_mother_address}}</td>

                                        </tr>
                                        <tr>
                                            <td>Mother's Office Address</td>
                                            <td>{{$student_form_details->student_mother_office_address}}</td>

                                        </tr>
                                        <tr>
                                            <td>Telephone Number </td>
                                            <td>{{$student_form_details->student_phone_number}}</td>

                                        </tr>
                                        <tr>
                                            <td>Religion</td>
                                            <td>{{$student_form_details->student_religion}}</td>

                                        </tr>
                                        <tr>
                                            <td>Caste</td>
                                            <td>{{$student_form_details->student_caste}}</td>

                                        </tr>
                                        <tr>
                                            <td>Gurdian Name</td>
                                            <td>{{$student_form_details->student_guardian_name}}</td>

                                        </tr>
                                        <tr>
                                            <td>Gurdian Telephone Number</td>
                                            <td>{{$student_form_details->student_guardian_phone_number}}</td>

                                        </tr>
                                        <tr>
                                            <td>Gurdian Address</td>
                                            <td>{{$student_form_details->student_guardian_address}}</td>

                                        </tr>
                                        <tr>
                                            <td>Selected Class</td>
                                            <td>{{$student_form_details->student_class}}</td>

                                        </tr>
                                        <tr>
                                            <td>Last School</td>
                                            <td>{{$student_form_details->student_last_school}}</td>

                                        </tr>

                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <!-- History End -->


        <script>

            function gurdianSameAsParent() {

                    // Get the checkbox
                    var checkBox = document.getElementById("same_as_parent");
                    // Get the output text
                    //var text = document.getElementById("text");

                    // If the checkbox is checked, display the output text
                    if (checkBox.checked == true){
                        //alert("Checked");
                        var father_name = document.getElementById('father_name').value;
                        var father_address = document.getElementById('father_address').value;
                        var phno = document.getElementById('father_phno').value;
                        //alert(father_name);
                        document.getElementById('guardian_name').value = father_name;
                        document.getElementById('guardian_address').value = father_address;
                        document.getElementById('guardian_phno').value = phno;

                        document.getElementById('guardian_name').disabled = true;
                        document.getElementById('guardian_address').disabled = true;
                        document.getElementById('guardian_phno').disabled = true;
                    } else {

                        document.getElementById('guardian_name').value = "";
                        document.getElementById('guardian_address').value = "";
                        document.getElementById('guardian_phno').value = "";

                        document.getElementById('guardian_name').disabled = false;
                        document.getElementById('guardian_address').disabled = false;
                        document.getElementById('guardian_phno').disabled = false;
                    }

            }

        </script>
@endsection
