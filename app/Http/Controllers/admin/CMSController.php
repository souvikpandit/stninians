<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function index(){
        $slug = "CSNHS SEO Management";
        return view('admin.cms.index',compact('slug'));
    }
    public function schoolInfo(){
        $slug = "CSNHS School Information";
        return view('admin.cms.school_info',compact('slug'));
    }
    public function schoolBanner(){
        $slug = "CSNHS Banner Management";
        return view('admin.cms.banner',compact('slug'));
    }
    public function schoolAbout(){
        $slug = "CSNHS Banner Management";
        return view('admin.cms.about',compact('slug'));
    }
    public function schoolPrincipalDesk(){
        $slug = "CSNHS Principal Desk";
        return view('admin.cms.principal_desk',compact('slug'));
    }
}
