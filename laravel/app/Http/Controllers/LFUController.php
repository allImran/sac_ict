<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Gallery;
use Illuminate\Http\Request;

class LFUController extends Controller
{
	public function blanket()
	{

		$lfu = 'true';
		$sliders = Slider::where('type', 'flood')->select('title_1', 'title_2', 'body_text', 'image')->get();
        $galleries = Gallery::where('type', 'flood')->select('heading', 'caption', 'image','year')->get();
    	return view('front.lfu.blanket',compact('lfu'));
	}
	public function flood()
	{

		$lfu = 'true';
		$sliders = Slider::where('type', 'lfu_flood')->select('title_1', 'title_2', 'body_text', 'image')->get();
        $galleries = Gallery::where('type', 'lfu_flood')->select('heading', 'caption', 'image','year')->get();
    	return view('front.lfu.flood',compact('lfu','sliders','galleries'));
	}

	public function child()
	{

		$lfu = 'true';
    	return view('front.lfu.child',compact('lfu'));
	}
}
