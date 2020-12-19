@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div id="form-messages" class="col-md-4 pull-right">
                 <b>@include('website.includes.messages')</b>
            </div>
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_about') }}</h1>
            </div>

            <div class="content-box intro-box">
                <form action="{{ route('general.store') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="Post[type]" value="about">
                    <input type="hidden" name="Post[title]" value="About">
                    @csrf




                    @if (isset($about))
                        {{-- Edit About,Mission,Vision --}}
                        <input type="hidden" name="id" value="{{ $about->id }}">
                        <div class="row">
                            <div class="form-group col-md-7">
                                <label>About School</label>
                                <textarea name="PostMeta[about]" class="form-control" cols="30" rows="14">{{ $about->getMetaDetails($about->id,'about') }}</textarea>
                            </div>
                            <div class="form-group col-md-5">
                                <label>About Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                                <input type="file" class="form-control" id="" name="Post[image]" value="{{ $about->image }}">
                                <br>
                                <img src="{{ asset('storage/'.$about->image) }}" alt="">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-7">
                                <label>Mission</label>
                                <textarea name="PostMeta[mission]" class="form-control" cols="30" rows="14">{{ $about->getMetaDetails($about->id,'mission') }}</textarea>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Mission Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                                <input type="file" class="form-control" id="" name="PostMeta[mission_image]" value="{{ $about->getMetaDetails($about->id,'mission_image') }}">
                                <br>
                                <img src="{{ asset('storage/'.$about->getMetaDetails($about->id,'mission_image')) }}" alt="">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-7">
                                <label>Vision</label>
                                <textarea name="PostMeta[vision]" class="form-control" cols="30" rows="14" name="PostMeta[vision]">{{ $about->getMetaDetails($about->id,'vision') }}</textarea>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Vision Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                                <input type="file" class="form-control" id="" name="PostMeta[vision_image]" value="{{ $about->getMetaDetails($about->id,'vision_image') }}">
                                <br>
                                <img src="{{ asset('storage/'.$about->getMetaDetails($about->id,'vision_image')) }}" alt="">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Vision Youtube Video Link</label>
                                <input type="text" class="form-control" id="" name="PostMeta[video_link]" value="{{ $about->getMetaDetails($about->id,'video_link') }}">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="submit" value="Update" class="btn btn-danger btn-block">
                            </div>
                        </div>





                    @else
                        {{-- Add About,Mission,Vision --}}
                        <div class="row">
                            <input type="hidden" name="id" value="">
                            <div class="form-group col-md-7">
                                <label>About School</label>
                                <textarea name="PostMeta[about]" class="form-control" cols="30" rows="14"></textarea>
                            </div>
                            <div class="form-group col-md-5">
                                <label>About Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                                <input type="file" class="form-control" id="" name="Post[image]">
                                <br>
                                <img src="{{ asset('website-assets/images/about/history.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-7">
                                <label>Mission</label>
                                <textarea name="PostMeta[mission]" class="form-control" cols="30" rows="14"></textarea>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Mission Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                                <input type="file" class="form-control" id="" name="PostMeta[mission_image]">
                                <br>
                                <img src="{{ asset('website-assets/images/about/about2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-7">
                                <label>Vision</label>
                                <textarea name="PostMeta[vision]" class="form-control" cols="30" rows="14" name="PostMeta[vision]"></textarea>
                            </div>
                            <div class="form-group col-md-5">
                                <label>Vision Image<span style="color:red">(Resolution : 600 * 370)</span></label>
                                <input type="file" class="form-control" id="" name="PostMeta[vision_image]">
                                <br>
                                <img src="{{ asset('website-assets/images/about/vision.jpg') }}" alt="">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Vision Youtube Video Link</label>
                                <input type="text" class="form-control" id="" name="PostMeta[video_link]">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="submit" value="Update" class="btn btn-danger btn-block">
                            </div>
                        </div>
                    @endif


                </form>
            </div>

        </div>
    </section>

@endsection


