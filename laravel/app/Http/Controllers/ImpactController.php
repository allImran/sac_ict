<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Gallery;
class ImpactController extends Controller
{
    public function npwc()
    {

    	$impact = 'true';
        $sliders = Slider::where('type', 'npwc')->select('title_1', 'title_2', 'body_text', 'image')->get();
        $galleries = Gallery::where('type', 'npwc')->select('heading', 'caption', 'image','year')->get();
    	return view('front.impact.npwc',compact('impact','sliders','galleries')); 
    }

    public function rt()
    {
    	$impact = 'true';
        $sliders = Slider::where('type', 'rockteens')->select('title_1', 'title_2', 'body_text', 'image')->get();
        $galleries = Gallery::where('type', 'rockteens')->select('heading', 'caption', 'image','year')->get();
    	return view('front.impact.rt',compact('impact','sliders','galleries')); 
    }

    public function gcec()
    {
    	$impact = 'true';
        $sliders = Slider::where('type', 'gcec')->select('title_1', 'title_2', 'body_text', 'image')->get();
        $galleries = Gallery::where('type', 'gcec')->select('heading', 'caption', 'image','year')->get();
    	return view('front.impact.gcec',compact('impact','sliders','galleries')); 
    }
    public function sol()
    {
        $impact = 'true';
        $sliders = Slider::where('type', 'sol')->select('title_1', 'title_2', 'body_text', 'image')->get();
        $galleries = Gallery::where('type', 'sol')->select('heading', 'caption', 'image','year')->get();
        return view('front.impact.sol',compact('impact','sliders','galleries')); 
    }
}
