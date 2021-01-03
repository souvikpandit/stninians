@extends('website.includes.app')
@section('main-content')
        <!-- Vision Start -->
        <div class="rs-vision sec-spacer">
            <div class="container">
                <div class="row">
                    <div id="form-messages" class="col-md-12">
                                <b>@include('website.includes.messages')</b>
                            </div>
                        <div class="col-md-6">
                                <h5 style="color: #f14236">If you are a new user please Sign In to apply.</h5>
                            <div class="abt-title">
                                <h2>Sign IN</h2>
                            </div>
                            <div class="login-form">
                            <form method="POST" action="{{ route('student.register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="emailid">Email ID</label>
                                    <input type="email" name="email" id="emailid" class="form-control" onblur="verifyEmail(this.value)">
                                </div>

                                {{-- <div class="form-group" id="otp_div" style="display:none">
                                    <label for="OTP">Enter OTP</label>
                                    <input type="email" name="otp" id="otp" class="form-control">
                                </div> --}}

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Retype Password</label>
                                    <input type="password" name="password_confirmation" id="password" class="form-control">
                                </div>
                                <input type="submit" value="Sign UP" class="btn btn-danger btn-block">
                            </div>
                        </form>
                        </div>
                    	<div class="col-md-6">
                            <h5 style="color: #f14236">Resister user please Log In to apply.</h5>
                            <div class="abt-title">
                                <h2>Log In</h2>
                            </div>
                            <div class="login-form">
                                <form action="{{ route('student.login') }}" method="POST">
                                    @csrf
                                <div class="form-group">
                                    <label for="emailid">Email ID</label>
                                    <input type="email" name="email" id="emailid" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <input type="submit" value="Login" class="btn btn-danger btn-block">
                            </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- Vision End -->
@endsection
{{-- <script>

    function verifyEmail(email) {
        document.getElementById('otp_div').style.display='block';

        $.ajax({
        url: "getOtpAjax",
        type: "get",
        data: email ,
        success: function (response) {
            document.getElementById("otp_div").innerHTML = response;
           // You will get response from your PHP page (what you echo or print)
        },
        error: function() {
           console.log("Fail");
        }
    });
    }

</script> --}}
