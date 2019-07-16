@extends('front.layouts.master')
@section('content')

<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/front') }}/images/background/23.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h1>Cart</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home </a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
	 
    <!--Cart Section-->
    <section class="cart-section">
        
            <cart-detail :cart="cart" :carttotal="cartTotal" :totalitems="totalItems" cartlink="{{route('cart.Checkout')}}"></cart-detail>
 
    </section>
    
@endsection