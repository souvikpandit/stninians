@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_principal_desk') }}</h1>
            </div>
            <div class="content-box intro-box">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Principal Image <span style="color:red">(Resolution : 1920 * 1080)</span></label>
                            <input type="file" name="keywords" class="form-control">
                            <br>
                            <img src="{{ asset('website-assets/images/about/history.jpg') }}" alt="">
                        </div>
                        <div class="form-group col-md-8">
                            <label>Principal Content</label>
                            <textarea name="description" class="form-control" cols="30" rows="14"></textarea>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="Update" class="btn-block btn btn-danger">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

@endsection


