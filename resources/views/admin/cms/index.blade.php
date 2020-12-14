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
                            <label>Meta Keywords</label>
                            <input type="text" name="keywords" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Meta Subject</label>
                            <input type="text" name="meta_subject" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Meta Copyrights</label>
                            <input type="text" name="meta_copyrights" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Meta Language</label>
                            <input type="text" name="meta_language" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Meta Classification</label>
                            <input type="text" name="meta_classification" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Meta Author</label>
                            <input type="text" name="meta_author" class="form-control">
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


