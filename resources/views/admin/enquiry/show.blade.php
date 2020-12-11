@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / <a href="{{ route('enquiry.index') }}"> {{ trans('custom_info.prayukty_enquiry') }}</a> / {{ trans('custom_info.prayukty_view') }}</h1>
            </div>
            <div class="content-box intro-box">
                <div class="table-responsive">
                    <table class="table table-bordered single-student">
                        <tr>
                            <th>{{ trans('custom_table_header.prayukty_name') }}</th>
                            <td>{{ $prayukty_enquery_details->firstname }} {{ $prayukty_enquery_details->secondname }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('custom_table_header.prayukty_email_id') }}</th>
                            <td>{{ $prayukty_enquery_details->email }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('custom_table_header.prayukty_subject') }}</th>
                            <td>{{ $prayukty_enquery_details->subject }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('custom_table_header.prayukty_message') }}</th>
                            <td>{{ $prayukty_enquery_details->description }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('custom_table_header.prayukty_date') }}</th>
                            <td>{{ PrayuktyDateFormat($prayukty_enquery_details->created_at) }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('custom_info.prayukty_reply') }}</th>
                            <td>{{ $prayukty_enquery_details->reply_message }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('custom_info.prayukty_note') }}</th>
                            <td>{{ $prayukty_enquery_details->note }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection



