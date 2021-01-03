@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div class="page-header">
                <h1>{{ trans('admininfo.admin_panel_breadcrumb') }}</h1>
            </div>

            <div class="content-box intro-box">
                <h2>{{ trans('admininfo.admin_panel_title') }}</h2>
                <h3>{{ trans('admininfo.admin_panel_desc') }}</h3>

                <a href="{{ trans('admininfo.admin_button_href') }}" target="{{ trans('admininfo.admin_button_target') }}" class="btn" style="background: #00bfa5;color: #fff;"><i class="fa fa-whatsapp"></i> {{ trans('admininfo.admin_button_value') }}</a>
                <div class="divider"></div>
                <p class="alert alert-success">Webmail URL : <a href="https://webmail.hostinger.in" target="_blank">https://webmail.hostinger.in</a></p>
            </div>

        </div>
    </section>
@endsection


