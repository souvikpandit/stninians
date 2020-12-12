@extends('website.includes.app')
@section('main-content')
        <!-- Vision Start -->
        <div class="rs-vision sec-spacer">
            <div class="container">
                <div class="row">

                        <div class="col-md-6">
                            <div class="abt-title">
                                <h2>Sign IN</h2>
                            </div>
                            <div class="login-form">
                                <div class="form-group">
                                    <label for="emailid">Email ID</label>
                                    <input type="email" name="emailid" id="emailid" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Retype Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <input type="submit" value="Sign UP" class="btn btn-danger btn-block">
                            </div>
                        </div>
                    	<div class="col-md-6">
                            <div class="abt-title">
                                <h2>Log In</h2>
                            </div>
                            <div class="login-form">
                                <div class="form-group">
                                    <label for="emailid">Email ID</label>
                                    <input type="email" name="emailid" id="emailid" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <input type="submit" value="Login" class="btn btn-danger btn-block">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- Vision End -->
@endsection
