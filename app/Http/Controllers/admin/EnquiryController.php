<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\admin\Enquiry;
use App\Mail\EnquiryReplyEmail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\EnquiryValidationRequest;

class EnquiryController extends Controller
{
    public function index()
    {   $prayukty_enquiries = PrayuktySelect('App\Models\admin\Enquiry','status','all');
        //$enquiries = Enquiry::all();
        return view('admin.enquiry.index', compact('prayukty_enquiries'));
    }

    public function notreplied()
    {   $prayukty_enquiries = PrayuktySelect('App\Models\admin\Enquiry','status','false');
        return view('admin.enquiry.index', compact('prayukty_enquiries'));
    }

    public function reply($id)
    {
        $prayukty_enquiry_details = Enquiry::find($id);
        return view('admin.enquiry.edit',compact('prayukty_enquiry_details'));
    }

    public function store(EnquiryValidationRequest $prayukty_request)
    {
        $prayukty_enquiry = new Enquiry;
        $prayukty_enquiry->firstname = $prayukty_request->firstname;
        $prayukty_enquiry->secondname = $prayukty_request->secondname;
        $prayukty_enquiry->email = $prayukty_request->email;
        $prayukty_enquiry->subject = $prayukty_request->subject;
        $prayukty_enquiry->description = $prayukty_request->description;
        $prayukty_enquiry->save();
        return redirect('/enquiry/index')->with('success','You have successfully Raise your Request');
    }

    public function update(Request $request,$id)
    {
        DB::transaction(function () use($request,$id){
        $prayukty_enquery = Enquiry::find($id);
        $prayukty_enquery->reply_message = $request->reply_message;
        $prayukty_enquery->note = $request->note;
        $prayukty_enquery->status = true;
        $prayukty_enquery->save();

        Mail::to($prayukty_enquery->email)->send(new EnquiryReplyEmail($prayukty_enquery->firstname,$prayukty_enquery->secondname,$request->reply_message));
        },5);
        return redirect('/enquiry/index')->with('success','You have successfully Updated The Query');
    }

    public function show($id)
    {
        $prayukty_enquery_details = Enquiry::find($id);
        return view('admin.enquiry.show',compact('prayukty_enquery_details'));
    }
}
