@extends('layouts.template')
@section('title','Login')
@section('sub-title','')
@section('content')

<!--Login Section-->
<section class="login-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column col-lg-6 col-md-12 col-sm-12 wow fadeIn  mx-auto">
                <!-- Login Form -->
                <div class="sec-title">
                    <h2>Login</h2>
                </div>
                <div class="login-form">
                    <!--Login Form-->
                    <form method="post" action="login">
                        <div class="form-group">
                            <label>Username or Email Address</label>
                            <input type="text" name="username" placeholder="Name or Email " required>
                        </div>

                        <div class="form-group">
                            <label>Enter Your Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="clearfix">
                            <div class="pull-right">
                                <div class="form-group text-right">
                                    <button class="theme-btn btn-style-two" type="submit"
                                        name="submit-form">LOGIN</button>
                                </div>
                            </div>
                            <div class="pull-left">
                                <div class="form-group remember">
                                    <input type="checkbox" name="shipping-option" id="account-option-2">&nbsp;
                                    <label for="account-option-2">Remember me</label>
                                    <a href="{{url('#')}}" class="psw">Lost your password?</a>
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
