@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_schoolinfo') }}</h1>
            </div>
            <div class="content-box intro-box">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>School Name Short Code</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>School Full Name</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>School Short Name</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">Address</h4>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Line 1</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Line 2</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Street</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>City</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>District</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>State</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Pin</label>
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">GPS Map Link</h4>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="" cols="30" rows="7"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Email ID 1</label>
                            <input type="email" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Email ID 2</label>
                            <input type="email" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Phone Number 1</label>
                            <input type="number" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Phone Number 2</label>
                            <input type="number" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Affiliation</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Affiliation No</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>School Logo</label>
                            <input type="file" name="" class="form-control">
                            <div style="margin-top:5px;padding:10px;">
                                <img src="{{ asset('website-assets/images/logo.png') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="Update" class="btn btn-danger btn-block">
                        </div>
                        
                    </div>
                </form>
            </div>

        </div>
    </section>

@endsection


