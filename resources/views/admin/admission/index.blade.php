@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_admission_index') }}</h1>
            </div>
            <div class="content-box intro-box">
                <table class="table table-bordered" id="admission_table">
                    <thead>
                        <tr>
                            <td>Application No</td>
                            <td>Student Name</td>
                            <td>Fathers Name</td>
                            <td>Phone Number</td>
                            <td>Class</td>
                            <td>Date</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ST-2021-000001</td>
                            <td>Sonam Basu</td>
                            <td>Rahul Basu</td>
                            <td>986543210</td>
                            <td>KG-II</td>
                            <td>20-SEP-2020</td>
                            <td>
                                <a href="{{ route('admission.admission_details') }}" class="btn btn-danger">View Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

@endsection


