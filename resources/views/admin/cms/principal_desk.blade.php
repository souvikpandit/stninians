@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div id="form-messages" class="col-md-4 pull-right">
                 <b>@include('website.includes.messages')</b>
            </div>
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_principal_desk') }}</h1>
            </div>
            <div class="content-box intro-box">
                <form action="{{ route('general.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Post[type]" value="principle_desk">
                    <input type="hidden" name="Post[title]" value="principle_desk">
                    @if (isset($principle_desk))
                    {{-- Edit Existing Content --}}
                        <div class="row">
                            <input type="hidden" name="id" value="{{ $principle_desk->id }}">
                            <div class="form-group col-md-4">
                                <label>Principal Image <span style="color:red">(Resolution : 1920 * 1080)</span></label>
                                <input type="file" name="Post[image]" class="form-control">
                                <br>
                                <img src="{{ asset('storage/'.$principle_desk->image) }}" alt="">
                            </div>
                            <div class="form-group col-md-8">
                                <label>Principal Content</label>
                                <textarea name="PostMeta[principle_desk_content]" class="form-control" cols="30" rows="14">{{ $principle_desk->getMetaDetails($principle_desk->id,'principle_desk_content') }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <input type="submit" value="Update" class="btn-block btn btn-danger">
                            </div>
                        </div>
                    @else
                    {{-- Add Content --}}
                        <div class="row">
                            <input type="hidden" name="id" value="">
                            <div class="form-group col-md-4">
                                <label>Principal Image <span style="color:red">(Resolution : 1920 * 1080)</span></label>
                                <input type="file" name="Post[image]" class="form-control">
                                <br>
                                <img src="{{ asset('website-assets/images/about/history.jpg') }}" alt="">
                            </div>
                            <div class="form-group col-md-8">
                                <label>Principal Content</label>
                                <textarea name="PostMeta[principle_desk_content]" class="form-control" cols="30" rows="14"></textarea>
                            </div>
                            <div class="col-md-4">
                                <input type="submit" value="Update" class="btn-block btn btn-danger">
                            </div>
                        </div>
                    @endif
                </form>
            </div>

        </div>
    </section>

@endsection


