@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_seo') }}</h1>
            </div>
            <div class="content-box intro-box">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Keywords</label>
                            <input type="text" name="keywords" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>

@endsection


