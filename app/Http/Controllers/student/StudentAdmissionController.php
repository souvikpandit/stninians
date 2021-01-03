<?php

namespace App\Http\Controllers\student;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\student\Student;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdmissionFormSubmission;

class StudentAdmissionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
        'student_date_of_birth' => 'required',
        'student_birth_certificate' => 'required',
        'student_photo' => 'required',
        'student_phone_number' => 'required',
        'student_caste' => 'required',
        'student_guardian_name' => 'required',
        'student_guardian_phone_number' => 'required',
        'student_guardian_address' => 'required',
        'student_class' => 'required'
        ]);


        try {
            DB::transaction(function () use ($request) {
            $student = new Student;
            $student->user_id = $request->student_id;
            $student_id = $this->getStudentId($request->student_id);
            $student->student_id = $student_id;
            $student->student_date_of_birth = $request->student_date_of_birth;

            //Birth Certificate and photo save
            $time = time();

            $birth_certificate_store = $request->student_birth_certificate->storeAs('public/'.$request->student_class.'/'.$student_id,$time.$request->student_birth_certificate->getClientOriginalName());
            $birth_certificate_path = '/'.$request->student_class.'/'.$student_id.'/'.$time.$request->student_birth_certificate->getClientOriginalName();
            $student->student_birth_certificate = $birth_certificate_path;

            $student_photo_store = $request->student_photo->storeAs('public/'.$request->student_class.'/'.$student_id,$time.$request->student_photo->getClientOriginalName());
            $student_photo_path = '/'.$request->student_class.'/'.$student_id.'/'.$time.$request->student_photo->getClientOriginalName();
            $student->student_photo = $student_photo_path;

            $student->student_father_name = $request->student_father_name;
            $student->student_father_occupation = $request->student_father_occupation;
            $student->student_father_address = $request->student_father_address;
            $student->student_father_office_address = $request->student_father_office_address;
            $student->student_mother_name = $request->student_mother_name;
            $student->student_mother_occupation = $request->student_mother_occupation;
            $student->student_mother_address = $request->student_mother_address;
            $student->student_mother_office_address = $request->student_mother_office_address;
            $student->student_phone_number = $request->student_phone_number;
            $student->student_religion = $request->student_religion;
            $student->student_caste = $request->student_caste;
            $student->student_guardian_name = $request->student_guardian_name;
            $student->student_guardian_phone_number = $request->student_guardian_phone_number;
            $student->student_guardian_address = $request->student_guardian_address;
            $student->student_class = $request->student_class;
            $student->student_last_school = $request->student_last_school;
            $student->payment_document = $request->payment_document;
            $student->save();

            //SMS to user


            //Mail To User
            $email_id = User::find($request->student_id);

            Mail::to($email_id)->send(new AdmissionFormSubmission());
            },5);
        return redirect('/student-dashboard')->with('success','Your Application Form is Submitted');
        } catch (\Throwable $th) {
            throw $th;
        }


    }

    public function getStudentId($id)
    {
        $date = Carbon::now()->year;
        $year = substr($date,2);
        $first_part = 'st';
        $last_part = sprintf('%07d',$id);
        $student_id = $first_part.'-'.$year.'-'.$last_part;
        return $student_id;
    }
}
