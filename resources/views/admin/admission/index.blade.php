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
                        @forelse ($prayukty_admissions as $prayukty_admission)
                            <tr>
                                <td>{{ $prayukty_admission->student_id }}</td>
                                <td>{{ $prayukty_admission->user->name }}</td>
                                <td>{{ $prayukty_admission->student_father_name }}</td>
                                <td>{{ $prayukty_admission->student_phone_number }}</td>
                                <td>{{ $prayukty_admission->student_class }}</td>
                                    @php
                                        $dates = date_format($prayukty_admission->created_at, "j M , Y, g:i a");
                                    @endphp
                                <td>{{ $dates }}</td>
                                <td>
                                    <form action="{{ route('admission.admission_details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{ $prayukty_admission->student_id }}">
                                        <input type="submit" value="View Details" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @empty

                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </section>

@endsection


