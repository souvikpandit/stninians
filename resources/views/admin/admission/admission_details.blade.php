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
                            <td>ST-20-000001</td>
                        </tr>
                        <tr>
                            <td>Childs Name</td>
                            <td>Sona Basu</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>25-Dec-2016</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><a href="#">View</a></td>
                        </tr>
                        <tr>
                            <td>DOB Prove</td>
                            <td><a href="#">View</a></td>
                        </tr>                        
                        <tr>
                            <td>Fathers Name</td>
                            <td>Abhishek Basu</td>
                        </tr>
                        <tr>
                            <td>Fathers Occupation</td>
                            <td>Engineer</td>
                        </tr>
                        <tr>
                            <td>Fathers Residential Address</td>
                            <td>4/1/1 PN Dey Lane, KOlkata - 700036</td>
                        </tr>
                        <tr>
                            <td>Fathers Office Address</td>
                            <td>4/1/1 PN Dey Lane, KOlkata - 700036</td>
                        </tr>
                        <tr>
                            <td>Mothers Name</td>
                            <td>Abhishek Basu</td>
                        </tr>
                        <tr>
                            <td>Mothers Occupation</td>
                            <td>Engineer</td>
                        </tr>
                        <tr>
                            <td>Mothers Residential Address</td>
                            <td>4/1/1 PN Dey Lane, KOlkata - 700036</td>
                        </tr>
                        <tr>
                            <td>Mothers Office Address</td>
                            <td>4/1/1 PN Dey Lane, KOlkata - 700036</td>
                        </tr>
                        <tr>
                            <td>Telephone Number</td>
                            <td>987654320</td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td>Hindu</td>
                        </tr>
                        <tr>
                            <td>Caste</td>
                            <td>General</td>
                        </tr>
                        <tr>
                            <td>Guardian Name</td>
                            <td>Abhishek Basu</td>
                        </tr>
                        <tr>
                            <td>Guardian Telephone Number</td>
                            <td>8776543210</td>
                        </tr>
                        <tr>
                            <td>Guardian Address</td>
                            <td>4/1/1 PN Dey Lane, KOlkata - 700036</td>
                        </tr>
                        <tr>
                            <td>Class to which pupil seeks admission</td>
                            <td>KG-II</td>
                        </tr>
                        <tr>
                            <td>Name of the school last attended</td>
                            <td>Mordern KG</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-4">
                        <form action="#" method="POST">
                            <input type="submit" class="btn btn-danger btn-block" value="Approve for Payment">
                        </form>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="content-box intro-box">
                <h2 class="text-center">Payment Status</h2>
                <hr>
                <table class="table table-bordered">
                    <tr>
                        <td>Payment Mode</td>
                        <td>Cash/Online</td>
                    </tr>
                    <tr>
                        <td>Receipt Image</td>
                        <td><a href="#">View</a></td>
                    </tr>
                    <tr>
                        <td>Transaction ID</td>
                        <td>32456987</td>
                    </tr>
                    <tr>
                        <td>Admission Status</td>
                        <td>Pending/Success/Declined</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

@endsection


