@extends('layouts.template')
@section('title', 'Checkout')
@section('sub-title', '')
@section('content')

    <!--CheckOut Page-->
    <div class="checkout-page">
        <div class="auto-container">
            <!--Default Links-->
            <ul class="default-links">
                <li><span class="la la-folder-open-o"></span>Returning customer? <a href="{{url('login')}}">Click here to
                        login</a></li>

                <li><span class="la la-folder-open-o"></span>Have a coupone? <a href="{{url('shopping-cart')}}">Click here to
                        enter your code</a></li>
            </ul>

            <!--Checkout Details-->
            <div class="checkout-form">
                <form method="post" action="checkout">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="sec-title">
                                <h3>Billing Details</h3>
                            </div>

                            <div class="row clearfix">

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Last Name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Company Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Country</div>
                                    <select>
                                        <option>Pakistan</option>
                                        <option>India</option>
                                        <option>Australia</option>
                                        <option>Usa</option>
                                    </select>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="field-name" value=""
                                        placeholder="Apartment,suite,unit etc. (optional)">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Postcode/ ZIP</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label
                                        for="account-option">Create An Account?</label>
                                    <div class="text">Create an account by entering the information below. if you
                                        are a returning custoer please login at the top of the page.</div>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label"><span>Account Password</span></div>
                                    <input type="password" name="field-name" value="" placeholder="Password">
                                </div>

                            </div>
                        </div>
                        <!--Column-->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="sec-title">
                                <h3>Ship to a different address?</h3>
                            </div>

                            <div class="row clearfix">

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">First Name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Last Name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Company Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Country</div>
                                    <select>
                                        <option>Pakistan</option>
                                        <option>India</option>
                                        <option>Australia</option>
                                        <option>Usa</option>
                                    </select>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">

                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="field-name" value=""
                                        placeholder="Apartment,suite,unit etc. (optional)">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-label">Postcode/ ZIP</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-label">Other Notes</div>
                                    <textarea class="" placeholder="Notes about your order,e.g. special notes for delivery."></textarea>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <!--End Checkout Details-->

            <!--Order Box-->
            <div class="order-box">
                <div class="sec-title">
                    <h2>Your Order</h2>
                </div>
                <div class="title-box clearfix">
                    <div class="col">PRODUCT</div>
                    <div class="col">TOTAL</div>
                </div>
                <ul>
                    <li class="clearfix"><strong>Patient Ninja 1</strong><span>$35.00</span></li>
                    <li class="clearfix">SUBTOTAL<span>$35.00</span></li>
                    <li class="clearfix">SHIPPING<span class="free">Free Shipping</span></li>
                    <li class="clearfix">TOTAL<span>$35.00</span></li>
                </ul>
            </div>
            <!--End Order Box-->

            <!--Payment Box-->
            <div class="payment-box">
                <div class="upper-box">

                    <!--Payment Options-->
                    <div class="payment-options">
                        <ul>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-2" checked>
                                    <label for="payment-2"><strong>Direct Bank Transfer</strong><span
                                            class="small-text">Make your payment directly into our bank account.
                                            Please use your Order ID as the payment reference. Your order won’t be
                                            shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-1">
                                    <label for="payment-1"><strong>Check Payments</strong><span class="small-text">Make
                                            your payment directly into our bank account.
                                            Please use your Order ID as the payment reference. Your order won’t be
                                            shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>

                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3">
                                    <label for="payment-3"><strong>Cash on Delivery</strong><span class="small-text">Make
                                            your payment directly into our bank account.
                                            Please use your Order ID as the payment reference. Your order won’t be
                                            shipped until the funds have cleared in our account.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-4">
                                    <label for="payment-4"><strong>PayPal</strong><span class="image"><img
                                                src="assets/images/resource/paypal.jpg" alt="" /></span></label>
                                    <a href="{{ url('#') }}" class="what-paypall">What is PayPal?</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="lower-box text-right">
                    <a href="{{ url('#') }}" class="theme-btn btn-style-one">Place Order</a>
                </div>
            </div>
            <!--End Payment Box-->

        </div>
    </div>
    <!--End CheckOut Page-->
@endsection
