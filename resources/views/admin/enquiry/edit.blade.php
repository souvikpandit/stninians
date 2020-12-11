@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / <a href="{{ route('enquiry.index') }}"> {{ trans('custom_info.prayukty_enquiry') }}</a> / {{ trans('custom_info.prayukty_edit') }}</h1>
            </div>
            <div class="content-box intro-box">
                <form action="{{ route('enquiry.update',$prayukty_enquiry_details->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="firstname" id="" value="{{ $prayukty_enquiry_details->firstname }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="secondname" id="" value="{{ $prayukty_enquiry_details->secondname }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="email" id="" value="{{ $prayukty_enquiry_details->email}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" type="text" name="subject" id="" value="{{ $prayukty_enquiry_details->subject }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $prayukty_enquiry_details->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Reply Message</label>
                                <textarea class="form-control" name="reply_message" id="editor1" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Note</label>
                                <textarea class="form-control" name="note" id="" cols="30" rows="5">{{ $prayukty_enquiry_details->note }}</textarea>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                    <select name="status" id="" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                            </div>
                        </div> --}}

                            <input type="submit" value="Update" class="btn btn-info pull-right" style="margin-right: 15px;">


                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


