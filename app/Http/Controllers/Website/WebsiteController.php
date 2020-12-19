<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Type $var = null)
    {
        return view('website.index');
    }
    public function about(Type $var = null)
    {
        return view('website.about');
    }
    public function prospectus(Type $var = null)
    {
        return view('website.prospectus');
    }
    public function gallery(Type $var = null)
    {
        return view('website.gallery');
    }
    public function contact(Type $var = null)
    {
        return view('website.contact');
    }
    public function admissionForm(Type $var = null)
    {
        return view('website.admission-form');
    }
    public function admissionDashboard(Type $var = null)
    {
        return view('website.admission-dashboard');
    }
    public function login(Type $var = null)
    {
        return view('website.login');
    }
}
