@extends('front.layouts.master')
@section('content')
	<!-- Who We Are -->
    <section class="who-we-are">
        <div class="inner-container">
            <!-- Packeges Tabs -->
            <div class="services-tabs tabs-box clearfix">

                <ul class="tab-buttons">
                	
                    	<img src="{{ asset('assets/bKash.png') }}" alt="">
                    </li>
                </ul> 

                <!--Tabs Container-->
                <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="service-1">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="sec-title">
                                    <h2>Process</h2>
                                    <div class="text">
                                    	<ul>
                                    		<li>ধাপ ১: ডায়াল *247#</li>
                                    		<li>ধাপ ২: অপশন বেছে নিনঃ “Send Money”</li>
                                    		<li>ধাপ ৩: bKash Account নাম্বারটি লিখুনঃ 016xxxxxxxxx</li>
                                    		<li>ধাপ ৪: টাকার পরিমাণটি লিখুন</li>
                                    		<li>ধাপ ৫: রেফারেন্স নাম্বার হিসেবে ইনভয়েস নাম্বার দিব {{ $invoice }}</li>
                                    		<li>ধাপ ৬: পিন নাম্বার লিখুনঃ XXXX</li>
                                    		<li>ধাপ ৭: Payment সম্পন্ন হলে  Form পুরন করে Submit প্রেস করুন</li>
                                    	</ul>
                                    </div>
                                </div>

                                
                            </div>

                            <!-- Image Column -->
                            <div class="image-column" style="background-image: url({{ asset('front/assets')  }}/images/resource/tab-image-1.jpg);">
                            	<div style="width: 100%;" class="content-column">
                            	<div class="sec-title">
                                    <h4>Detail Form</h4>
                                    <div class="text">
                                    	<div class="subscribe-form">
							                <form method="POST" action="{{ route('bkash.payment.store') }}" enctype="multipart/form-data">@csrf
							                    <div class="row">
							                        
							                        <div class="col-md-12">
							                            <div class="form-group">
							                                <input type="text" name="phone" value="" placeholder="Enter Your bKash Phone Number" required="">
							                            </div>
							                            @error('phone')
							                                <div class="alert alert-danger">{{ $message }}</div>
							                            @enderror
							                        </div>

							                        <div class="col-md-12">
							                            <div class="form-group">
							                                <input type="text" name="amount" value="" placeholder="The Amount you donated" required="">
							                            </div>
							                            @error('amount')
							                                <div class="alert alert-danger">{{ $message }}</div>
							                            @enderror
							                        </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" name="transaction_id" value="" placeholder="Transaction ID" required="">
                                                        </div>
                                                        @error('transaction_id')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
							                        
							                        <div class="col-md-12">
							                            <div class="form-group">
							                            	<input type="hidden" name="invoice" value="{{ $invoice }}">
                                                            <payment :cart="cart" :carttotal="cartTotal" :totalitems="totalItems" cartlink="{{route('cart.Checkout')}}"></payment>
							                                <button type="submit" class="theme-btn btn-style-one">Submit</button>
							                            </div>
							                        </div>
							                    </div>
							                    
							                </form>
							            </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Who We Are -->
@endsection