@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_banner') }}</h1>
            </div>
            <div class="content-box intro-box">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Title</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Sub-Title</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Readmore Button Link</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Get Started Now Button Link</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Readmore Button Target</label>
                            <select class="form-control">
                                <option value="_self">Open in same page</option>
                                <option value="_blank">Open in New Page</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Readmore Button Target</label>
                            <select class="form-control">
                                <option value="_self">Open in same page</option>
                                <option value="_blank">Open in New Page</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Serial No</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Banner Image <span style="color:red">(Resolution : 1920 * 820)</span></label>
                            <input type="file" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Status</label>
                            <select class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" value="Add" class="btn btn-danger btn-block">
                        </div>
                    </div>
                </form>
            </div>
            <div class="divider"></div>
            <div class="content-box intro-box">
                <table class="table table-bordered" id="banner">
                    <thead>
                        <tr>
                            <td>SN</td>
                            <td>Image</td>
                            <td>Title</td>
                            <td>Sub-title</td>
                            <td>Readmore Button Link</td>
                            <td>Get Started Now Button Link</td>
                            <td>Status</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>                        
                        <tr>
                            <td>1</td>
                            <td><img style="width:150px;height:100px;" src="{{ asset('website-assets/images/slider/home1/slide1.jpg') }}" alt=""></td>
                            <td>WELCOME TO ST. NINIAN'S HIGH SCHOOL</td>
                            <td>The first Bishop of Scotland and founder of 1st church of scotland.</td>
                            <td>#</td>
                            <td>SELF</td>
                            <td>Active</td>
                            <td>
                                <a href="#" class="btn btn-primary">Update Image</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit Info</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img style="width:150px;height:100px;" src="{{ asset('website-assets/images/slider/home1/slide2.jpg') }}" alt=""></td>
                            <td>WELCOME TO ST. NINIAN'S HIGH SCHOOL</td>
                            <td>The first Bishop of Scotland and founder of 1st church of scotland.</td>
                            <td>#</td>
                            <td>SELF</td>
                            <td>Active</td>
                            <td>
                                <a href="#" class="btn btn-primary">Update Image</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit Info</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img style="width:150px;height:100px;" src="{{ asset('website-assets/images/slider/home1/slide3.jpg') }}" alt=""></td>
                            <td>WELCOME TO ST. NINIAN'S HIGH SCHOOL</td>
                            <td>The first Bishop of Scotland and founder of 1st church of scotland.</td>
                            <td>#</td>
                            <td>SELF</td>
                            <td>Active</td>
                            <td>
                                <a href="#" class="btn btn-primary">Update Image</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit Info</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

@endsection


