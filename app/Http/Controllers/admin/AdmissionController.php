<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(){
        $slug = "CSNHS Admission";
        return view('admin.admission.index',compact('slug'));
    }
    public function admissionDetails(){
        $slug = "CSNHS Admission Detais";
        return view('admin.admission.admission_details',compact('slug'));
    }
}
