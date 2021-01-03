<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function privacy(Type $var = null)
    {
        return view('website.privacy');
    }
    public function terms(Type $var = null)
    {
        return view('website.terms');
    }
    public function admissionForm(Type $var = null)
    {
        $student_form_details = PrayuktySelectOne('App\Models\student\Student','user_id',Auth::User()->id);
        return view('website.admission-form', compact('student_form_details'));
    }
    public function admissionDashboard(Type $var = null)
    {
        return view('website.admission-dashboard');
    }
    public function login(Type $var = null)
    {
        return view('website.login');
    }
    public function getOtpAjax()
    {
        $email = $_GET['data'];
        echo $email;
    }

}
