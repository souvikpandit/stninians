@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_enquiry') }}</h1>
            </div>
            <div class="content-box intro-box">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr class="bg-danger text-white">
                            <td>{{ trans('custom_table_header.prayukty_name') }}</td>
                            <td>{{ trans('custom_table_header.prayukty_email_id') }}</td>
                            <td>{{ trans('custom_table_header.prayukty_subject') }}</td>
                            <td>{{ trans('custom_table_header.prayukty_message') }}</td>
                            <td>{{ trans('custom_table_header.prayukty_date') }}</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($prayukty_enquiries as $prayukty_enquiry)
                            <tr>
                                <td>{{ $prayukty_enquiry->firstname }} {{ $prayukty_enquiry->secondname }}</td>
                                <td>{{ $prayukty_enquiry->email }}</td>
                                <td>{{ $prayukty_enquiry->subject }}</td>
                                <td>{{ $prayukty_enquiry->description }}</td>
                                <td>{{ PrayuktyDateFormat($prayukty_enquiry->created_at) }}</td>
                                @if ($prayukty_enquiry->reply_status)
                                    <td> <a href="{{ $prayukty_enquiry->reply_status }}" class="btn btn-warning">{{ trans('custom_info.prayukty_reply') }}</a></td>
                                @else
                                    <td><a href="{{ route('enquiry.show',$prayukty_enquiry->id) }}" class="btn btn-info">{{ trans('custom_info.prayukty_view') }}</a></td>
                                @endif
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection


