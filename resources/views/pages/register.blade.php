@extends('layouts.template')
@section('title','Register')
@section('sub-title','')
@section('content')

<!--Login Section-->
<section class="login-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column col-lg-6 col-md-12 col-sm-12 wow fadeIn  mx-auto" data-wow-delay="600ms">
                <div class="sec-title">
                    <h2>Register</h2>
                </div>
                <!-- Login Form -->
                <div class="login-form">
                    <!--Login Form-->
                    <form method="post" action="login">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" name="username" placeholder="Your Email " required>
                        </div>

                        <div class="form-group">
                            <label>Enter Your Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="clearfix">
                            <div class="pull-right">
                                <div class="form-group text-right">
                                    <button class="theme-btn btn-style-two" type="submit"
                                        name="submit-form">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Login Form -->
            </div>
        </div>
    </div>
</section>
<!--End Login  Section-->
@endsection
