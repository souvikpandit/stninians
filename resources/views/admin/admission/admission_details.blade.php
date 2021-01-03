@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_admission_details') }}</h1>
            </div>
            <div class="content-box intro-box">
                <table class="table table-bordered" id="admission_detail">
                    <thead>
                        <tr class="bg-danger">
                            <td>Lable</td>
                            <td>Details</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Application No</td>
                            <td>{{ $student_details->student_id }}</td>
                        </tr>
                        <tr>
                            <td>Childs Name</td>
                            <td>{{ $student_details->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>{{ date("d M , Y",strtotime($student_details->student_date_of_birth)) }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><a href="{{ asset('storage'.$student_details->student_photo) }}" target="_blank">View</a></td>
                        </tr>
                        <tr>
                            <td>DOB Prove</td>
                            <td><a href="{{ asset('storage'.$student_details->student_birth_certificate) }}" target="_blank">View</a></td>
                        </tr>
                        <tr>
                            <td>Fathers Name</td>
                            <td>{{ $student_details->student_father_name }}</td>
                        </tr>
                        <tr>
                            <td>Fathers Occupation</td>
                            <td>{{ $student_details->student_father_occupation }}</td>
                        </tr>
                        <tr>
                            <td>Fathers Residential Address</td>
                            <td>{{ $student_details->student_father_address }}</td>
                        </tr>
                        <tr>
                            <td>Fathers Office Address</td>
                            <td>{{ $student_details->student_father_office_address }}</td>
                        </tr>
                        <tr>
                            <td>Mothers Name</td>
                            <td>{{ $student_details->student_mother_name }}</td>
                        </tr>
                        <tr>
                            <td>Mothers Occupation</td>
                            <td>{{ $student_details->student_mother_occupation }}</td>
                        </tr>
                        <tr>
                            <td>Mothers Residential Address</td>
                            <td>{{ $student_details->student_mother_address }}</td>
                        </tr>
                        <tr>
                            <td>Mothers Office Address</td>
                            <td>{{ $student_details->student_mother_office_address }}</td>
                        </tr>
                        <tr>
                            <td>Telephone Number</td>
                            <td>{{ $student_details->student_phone_number }}</td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td>{{ $student_details->student_religion }}</td>
                        </tr>
                        <tr>
                            <td>Caste</td>
                            <td>{{ $student_details->student_caste }}</td>
                        </tr>
                        <tr>
                            <td>Guardian Name</td>
                            <td>{{ $student_details->student_guardian_name }}</td>
                        </tr>
                        <tr>
                            <td>Guardian Telephone Number</td>
                            <td>{{ $student_details->student_guardian_phone_number }}</td>
                        </tr>
                        <tr>
                            <td>Guardian Address</td>
                            <td>{{ $student_details->student_guardian_address }}</td>
                        </tr>
                        <tr>
                            <td>Class to which pupil seeks admission</td>
                            <td>{{ $student_details->student_class }}</td>
                        </tr>
                        <tr>
                            <td>Name of the school last attended</td>
                            <td>{{ $student_details->student_last_school }}</td>
                        </tr>
                    </tbody>
                </table>
                @if ($student_details->confirmed==false)
                <div class="row">
                    <div class="col-md-4">
                        <form action="{{ route('admission_declined') }}" method="POST">
                            @csrf
                            <input type="hidden" name="student_id" value="{{ $student_details->student_id }}">
                            <input type="hidden" name="">

                            <input type="submit" class="btn btn-danger btn-block" value="Decline">
                            <div class="divider"></div>
                            <div class="form-group">
                                <textarea name="declined_reason" class="form-control" cols="30" rows="10" placeholder="Reason of cancellation"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form action="{{ route('admission_payment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="student_id" value="{{ $student_details->student_id }}">
                            <input type="submit" class="btn btn-success btn-block" value="Approve for Payment">
                        </form>
                    </div>

                </div>
                @endif
            </div>
            <div class="divider"></div>
            <div class="content-box intro-box">
                <h2 class="text-center">Payment Status</h2>
                <hr>
                <table class="table table-bordered">
                    <tr>
                        <td>Payment Mode</td>
                        @if ($student_payment_details)
                        <td>{{ $student_payment_details->payment_mode }}</td>
                        @else
                        <td></td>
                        @endif
                    </tr>
                    {{-- <tr>
                        <td>Receipt Image</td>
                        <td><a href="#">View</a></td>
                    </tr> --}}
                    <tr>
                        <td>Transaction ID</td>
                        @if ($student_payment_details)
                            <td>{{ sprintf("%012d",$student_payment_details->id.$student_payment_details->payu_money_id) }}</td>
                        @else
                            <td></td>
                        @endif
                    </tr>
                    <tr>
                        <td>Admission Status</td>
                        @if ($student_payment_details)
                            <td>{{ $retVal = ($student_details->payment_status==true) ? 'Success' : 'Pending'   }}</td>

                        @endif
                    </tr>
                </table>
            </div>
        </div>
    </section>

@endsection


