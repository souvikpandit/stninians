@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div id="form-messages" class="col-md-4 pull-right">
                 <b>@include('website.includes.messages')</b>
            </div>
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_banner') }}</h1>
            </div>


            <div class="content-box intro-box">
                <form action="{{ route('general.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="Post[type]" value="banner">

                        @if (!isset($banner_details))
                            {{-- Insert new Banner --}}
                            <input type="hidden" name="id" value="">
                            <div class="form-group col-md-12">
                                <label>Title</label>
                                <input type="text" class="form-control" id="" name="Post[title]" value="{{ old('Post[title]') }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Sub-Title</label>
                                <input type="text" class="form-control" id="" name="PostMeta[sub_title]" value="{{ old('PostMeta[sub_title]') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Readmore Button Link</label>
                                <input type="text" class="form-control" id="" name="PostMeta[read_more_button_url]" value="{{ old('PostMeta[read_more_button_url]') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Get Started Now Button Link</label>
                                <input type="text" class="form-control" id="" name="PostMeta[get_started_button_url]" value="{{ old('PostMeta[get_started_button_url]') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Readmore Button Target</label>
                                <select class="form-control" name="PostMeta[read_more_button_target]">
                                    <option value="_self">Open in same page</option>
                                    <option value="_blank">Open in New Page</option>
                                </select>
                            </div>
                            {{-- <div class="form-group col-md-4">
                                <label>Serial No</label>
                                <input type="text" class="form-control" id="" name="PostMeta[serial_no]" value="{{ old('PostMeta[serial_no]') }}">
                            </div> --}}
                            <div class="form-group col-md-4">
                                <label>Banner Image <span style="color:red">(Resolution : 1920 * 820)</span></label>
                                <input type="file" class="form-control" id="" name="Post[image]">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Status</label>
                                <select class="form-control" name="Post[status]">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        {{-- Insert new Banner End--}}
                        @else
                        {{-- Edit Existing Banner --}}
                        <input type="hidden" name="id" value="{{ $banner_details->id }}">
                            <div class="form-group col-md-12">
                                <label>Title</label>
                                <input type="text" class="form-control" id="" name="Post[title]" value="{{ $banner_details->name }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Sub-Title</label>
                                <input type="text" class="form-control" id="" name="PostMeta[sub_title]" value="{{ $banner_details->getMetaDetails($banner_details->id,'sub_title') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Readmore Button Link</label>
                                <input type="text" class="form-control" id="" name="PostMeta[read_more_button_url]" value="{{ $banner_details->getMetaDetails($banner_details->id,'read_more_button_url') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Get Started Now Button Link</label>
                                <input type="text" class="form-control" id="" name="PostMeta[get_started_button_url]" value="{{ $banner_details->getMetaDetails($banner_details->id,'get_started_button_url') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Readmore Button Target</label>
                                <select class="form-control" name="PostMeta[read_more_button_target]">
                                    <option value="_self">Open in same page</option>
                                    <option value="_blank">Open in New Page</option>
                                </select>
                            </div>
                            {{-- <div class="form-group col-md-4">
                                <label>Serial No</label>
                                <input type="text" class="form-control" id="" name="PostMeta[serial_no]" value="{{ $banner_details->getMetaDetails($banner_details->id,'serial_no') }}">
                            </div> --}}
                            <div class="form-group col-md-4">
                                <label>Banner Image <span style="color:red">(Resolution : 1920 * 820)</span></label>
                                <input type="file" class="form-control" id="" name="Post[image]" value="{{ $banner_details->image }}">
                                <img src="{{ asset('storage/'.$banner_details->image) }}" alt="">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Status</label>
                                <select class="form-control" name="Post[status]">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        {{-- Edit Existing Banner End --}}
                        @endif





                        <div class="form-group col-md-3"><label></label>
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
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banners as $banner)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img style="width:150px;height:100px;" src="{{ asset('storage/'.$banner->image) }}" alt=""></td>
                            <td>{{ $banner->name }}</td>
                            <td>{{ $banner->getMetaDetails($banner->id,'sub_title') }}</td>
                            <td>{{ $banner->getMetaDetails($banner->id,'read_more_button_url') }}</td>
                            <td>{{ $banner->getMetaDetails($banner->id,'get_started_button_url') }}</td>
                            <td>{{ $banner->status_check }}</td>
                            <td>
                                <a href="{{ route('general.edit',$banner->id) }}" class="btn btn-primary">Edit Info</a>
                            </td>
                        </tr>
                        @empty
                            <td>No Data Found</td>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </section>

@endsection


