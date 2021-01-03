<?php

namespace App\Http\Controllers\admin;

use App\SmsGateWay;
use App\Mail\DeclineStudent;
use Illuminate\Http\Request;
use App\Mail\AdmissionAccept;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\student\PaymentDetails;

class AdmissionController extends Controller
{
    public function index(){
        $prayukty_admissions = PrayuktySelect('App\Models\student\Student','confirmed','all');
        $slug = "CSNHS Admission";
        return view('admin.admission.index',compact('slug','prayukty_admissions'));
    }
    public function admissionDetails(Request $request){
        $student_details = PrayuktySelectOne('App\Models\student\Student','student_id',$request->student_id);
        $student_payment_details = PaymentDetails::where([['user_id',$student_details->user_id],['session',GetDefaultSession()]])->first();
        //$student_id
        $slug = "CSNHS Admission Detais";
        return view('admin.admission.admission_details',compact('slug','student_details','student_payment_details'));
    }
    public function pending(){
        $prayukty_admissions = PrayuktySelect('App\Models\student\Student','confirmed',0);
        $slug = "CSNHS Admission Pending";
        //dd($prayukty_admissions);
        return view('admin.admission.index',compact('slug','prayukty_admissions'));
    }
    public function approved(){
        $prayukty_admissions = PrayuktySelect('App\Models\student\Student','confirmed',1);
        $slug = "CSNHS Admission Aprroved";
        //dd($prayukty_admissions);
        return view('admin.admission.index',compact('slug','prayukty_admissions'));
    }
    public function declined(){
        $prayukty_admissions = PrayuktySelect('App\Models\student\Student','confirmed',2);
        $slug = "CSNHS Admission Declined";
        //dd($prayukty_admissions);
        return view('admin.admission.index',compact('slug','prayukty_admissions'));
    }

    public function payment(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {

                $student_id = $request->student_id;
                $student_payment = prayuktySelectOne('App\Models\student\Student','student_id',$student_id);
                $student_ph = $student_payment->student_phone_number;
                //$student_mail = prayuktySelectOne('App\Models\student\User','id',$student_id);
                $student_email = $student_payment->user->email;
                $message = "Your admission form is approved by school authority. Plase login in our site and pake payment for admission.";

                $student_payment->confirmed = true;
                $student_payment->save();
                Mail::to($student_email)->send(new AdmissionAccept());
                SmsGateWay::sendSms($student_ph,$message);

            });
            return redirect()->route('admission.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function admissionDeclined(Request $request)
    {

            try {
                DB::transaction(function () use ($request){
                    $student_id = $request->student_id;
                    $student_details = PrayuktySelectOne('App\Models\student\Student','student_id',$student_id);
                    $student_details->confirmed = 2;
                    $student_details->declined_reason = $request->declined_reason;
                    $student_details->save();
                    $student_email = $student_details->user->email;
                    $student_ph = $student_details->student_phone_number;
                    $message = "Sorry!! Your admission form is Declined By Admin. Please check mail to know the reason.";

                    //Mail Integration
                    Mail::to($student_email)->send(new DeclineStudent($request->declined_reason));

                    //Sms Gateway Code Here

                    SmsGateWay::sendSms($student_ph,$message);

                });
                return redirect()->route('admission.pending');
            } catch (\Throwable $th) {
                throw $th;
            }


    }
}
