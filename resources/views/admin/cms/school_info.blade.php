@extends('admin.includes.app')
@section('main-content')
    <section class="page-content">
        <div class="wrapper">
            <div id="form-messages" class="col-md-4 pull-right">
                 <b>@include('website.includes.messages')</b>
            </div>
            <div class="page-header">
                <h1><a href="{{ route('admin.dashboard') }}">{{ trans('admininfo.admin_panel_breadcrumb') }}</a> / {{ trans('custom_info.prayukty_schoolinfo') }}</h1>
            </div>
            <div class="content-box intro-box">
                <form action="{{ route('general.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Post[type]" value="sc_info">
                    @if (isset($school_info))
                        <div class="row">
                        <input type="hidden" name="id" value="{{ $school_info->id }}">
                        <div class="form-group col-md-4">
                            <label>School Name Short Code</label>
                            <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[0] }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>School Full Name</label>
                            <input type="text" name="Post[title]" class="form-control" value="{{ $school_info->name }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label>School Short Name</label>
                            <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[1] }}">
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">Address</h4>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Line 1</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[2] }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Line 2</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[3] }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Street</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[4] }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>City</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[5] }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>District</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[6] }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>State</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[7] }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Pin</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[8] }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">GPS Map Link</h4>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="" cols="30" rows="7" name="PostMeta[sc_info][]">{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[9] }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Email ID 1</label>
                            <input type="email" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[10] }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Email ID 2</label>
                            <input type="email" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[11] }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Phone Number 1</label>
                            <input type="number" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[12] }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Phone Number 2</label>
                            <input type="number" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[13] }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Affiliation</label>
                            <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[14] }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Affiliation No</label>
                            <input type="text" name="PostMeta[sc_info][]" class="form-control" value="{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[15] }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>School Logo</label>
                            <input type="file" name="Post[image]" class="form-control">
                            <div style="margin-top:5px;padding:10px;">
                                <img src="{{ asset('storage/'.$school_info->image) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="Update" class="btn btn-danger btn-block">
                        </div>

                    </div>
                    @else
                        <div class="row">
                        <div class="form-group col-md-4">
                            <label>School Name Short Code</label>
                            <input type="text" name="PostMeta[sc_info][]" class="form-control" >
                        </div>
                        <div class="form-group col-md-4">
                            <label>School Full Name</label>
                            <input type="text" name="Post[title]" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>School Short Name</label>
                            <input type="text" name="PostMeta[sc_info][]" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">Address</h4>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Line 1</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Line 2</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Street</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>City</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>District</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>State</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Pin</label>
                                    <input type="text" name="PostMeta[sc_info][]" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">GPS Map Link</h4>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="" cols="30" rows="7" name="PostMeta[sc_info][]"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Email ID 1</label>
                            <input type="email" name="PostMeta[sc_info][]" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Email ID 2</label>
                            <input type="email" name="PostMeta[sc_info][]" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Phone Number 1</label>
                            <input type="number" name="PostMeta[sc_info][]" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Phone Number 2</label>
                            <input type="number" name="PostMeta[sc_info][]" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Affiliation</label>
                            <input type="text" name="PostMeta[sc_info][]" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Affiliation No</label>
                            <input type="text" name="PostMeta[sc_info][]" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>School Logo</label>
                            <input type="file" name="Post[image]" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="Update" class="btn btn-danger btn-block">
                        </div>

                    </div>
                    @endif
                </form>
            </div>

        </div>
    </section>

@endsection

