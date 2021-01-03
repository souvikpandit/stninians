@extends('website.includes.app')
@section('main-content')
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="height: 200px;">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title" style="margin-top: -35px;">Welcome ! {{ Auth::user()->name }}  </h1>
		                    {{-- <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Admission Form</li>
		                    </ul> --}}
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
        <div id="form-messages" class="col-md-4 pull-right" style="margin-top: 7px;">
            <b>@include('website.includes.messages')</b>
         </div>

		<!-- History Start -->
        <div class="rs-history sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="margin-top: -35px;">
		                <div class="abt-title">
                            <h2>Dashboard</h2>
                            @php
                                $user_id = Auth::user()->id;

                                $student_details = PrayuktySelectOne("App\Models\student\Student","confirmed", true);
                            @endphp
                            @if ($student_details)
                            @php
                                $payment_details = App\Models\student\PaymentDetails::where([['user_id',$user_id],['session',GetDefaultSession()]])->get();
                                //dd($payment_details);
                                $numrows = count($payment_details);
                                //echo $payment_details;

                            @endphp
                                @if ($numrows==0)
                                    <form action="{{ route("student.payment") }}" method="POST">
                                        @csrf
                                        <input type="text" name="amount" value="12500" hidden>
                                        <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                                        <input type="text" name="student_name" value="{{ Auth::user()->name }}" hidden>
                                        <input type="text" name="student_email" value="{{ Auth::user()->email }}" hidden>
                                        <input type="text" name="phno" value="{{ $student_details->student_phone_number }}" hidden>
                                        <input type="submit" class="pull-right my-button" value="Pay Now">
                                    </form>
                                @else

                                @endif

                            @endif
                        </div>
                        <h3>For any details contact to St. Ninians School</h3>
                        <div class="row ">
                            <div class="form-desc col-md-6">
                                <h3>Phone Number</h3>
                                <h3><a href="tel:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[13] }}">{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[13] }}</a>,
								<a href="tel:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[12] }}">{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[12] }}</a></h3>
                            </div>
                            <div class="form-desc col-md-6 pull-right">
                                <h3>Email Id</h3>
                                <h3><a href="mailto:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[10] }}"> {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[10] }}</a>,
									    <a href="mailto:{{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[11] }}"> {{ json_decode($school_info->getMetaDetails($school_info->id,'sc_info'),true)[11] }}</a></h3>
                    	    </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->
@endsection

