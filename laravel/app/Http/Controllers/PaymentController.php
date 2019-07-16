<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bkash;

class PaymentController extends Controller
{
	public function first(Request $request)
	{
		//return $request;
		//dd($request);
		

		//return $product_ids;
    	$invoice = rand(111, 999);
    	//$donated_for = $request->donated_for;
    	if ($request->payment_method == 'bKash') {
    		return view('front.transaction.payment.bkash',compact('request','invoice'));
		}
	}

	public function store(Request $request)
	{
		//return $request;
		$request['product_id'] = json_encode($request->product_id);
        Bkash::create($request->except('_token'));

	}
    	
}
