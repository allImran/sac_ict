@extends('front.layouts.master')
@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/17.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Checkout</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home </a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
	
    <!--Checkout Section-->
    <section class="checkout-section">
        <div class="auto-container">
        	<!--Defaults Links-->
            
            
            <!--Billing Details-->
            <div class="billing-details">
                <div class="checkout-form">
                    
                    
                </div>
                
            </div>
    		<!--End Billing Details-->
            
        </div>
    </section>
    <!--End Checkout Section-->

	<!--Checkout Cart Section-->
    <section class="checkout-cart-section">
    	<div class="auto-container">
        	<h2>Your Order Summary</h2>
            <!--Cart Outer-->
            <product :cart="cart" :carttotal="cartTotal" :totalitems="totalItems" cartlink="{{route('cart.Checkout')}}"></product>
        </div>
    </section>
	
  <!--Place Order-->
    <div class="place-order">
        <div class="auto-container">
            <h2>Payment Methods</h2>
            
            <!--Payment Options-->
        <form  method="post" action="{{ route('payment.first') }}">@csrf
            <div class="payment-options">
                 <ul>
                    <li>
                        <div class="radio-option">
                            <input type="radio" name="payment_method" value="bKash" id="payment-1" >
                            <label for="payment-1">bKash</label>
                        </div>
                    </li>
                    <li>
                        <div class="radio-option">
                            <input type="radio" name="payment_method" value="roket" id="payment-1" >
                            <label for="payment-1">Roket</label>
                        </div>
                    </li>
                    
                    <li>
                        <div class="radio-option">
                            <input type="radio" name="payment_method" value="bank" id="payment-1" >
                            <label for="payment-1">Direct Bank Transfer <span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                        </div>
                    </li>
                    <li>
                        <div class="radio-option">
                            <input type="radio" name="payment_method" value="cheque" id="payment-2" >
                            <label for="payment-2">Cheque Payment</label>
                        </div>
                    </li>
                    <li>
                        <div class="radio-option">
                            <input type="radio" name="payment_method" value="cash" id="payment-3">
                            <label for="payment-3">Cash On Delivery</label>
                        </div>
                    </li>
                    
                </ul>
        <payment :cart="cart" :carttotal="cartTotal" :totalitems="totalItems" cartlink="{{route('cart.Checkout')}}"></payment>
	
            
            <button type="submit" class="theme-btn btn-style-four place-order-btn">Place Order</button>
        </div>
        <!--End Place Order-->
	</form>
            
    </div>
    
@endsection