@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_about') }}</h1>
            </div>
            <div class="content-box intro-box">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="form-group col-md-7">
                            <label>About School</label>
                            <textarea name="description" class="form-control" cols="30" rows="14"></textarea>
                        </div>
                        <div class="form-group col-md-5">
                            <label>About Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                            <input type="file" class="form-control" id="">
                            <br>
                            <img src="{{ asset('website-assets/images/about/history.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="divider"></div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-7">
                            <label>Mission</label>
                            <textarea name="description" class="form-control" cols="30" rows="14"></textarea>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Mission Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                            <input type="file" class="form-control" id="">
                            <br>
                            <img src="{{ asset('website-assets/images/about/about2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="divider"></div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-7">
                            <label>Vision</label>
                            <textarea name="description" class="form-control" cols="30" rows="14"></textarea>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Vision Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                            <input type="file" class="form-control" id="">
                            <br>
                            <img src="{{ asset('website-assets/images/about/vision.jpg') }}" alt="">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Vision Youtube Video Link</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" value="Update" class="btn btn-danger btn-block">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

@endsection


