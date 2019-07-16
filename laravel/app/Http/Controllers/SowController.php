<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Gallery;
use Illuminate\Http\Request;

class SowController extends Controller
{
    public function index()
    {
    	$sow = 'true';
        $sliders = Slider::where('type', 'sow')->select('title_1', 'title_2', 'body_text', 'image')->get();
        $galleries = Gallery::where('type', 'sow')->select('heading', 'caption', 'image','year')->get();
    	return view('front.sow.sow',compact('sow','sliders','galleries'));
    }

    public function wme()
    {
    	$sow = 'true';
        $sliders = Slider::where('type', 'wme')->select('title_1', 'title_2', 'body_text', 'image')->get();
    	return view('front.sow.wme',compact('sow','sliders'));
    } 

    public function imp_bn()
    {
        $sow = 'true';
        return view('front.sow.imp_bn',compact('imp_bn','sow'));
    }
    public function imp_in()
    {
        $sow = 'true';
        return view('front.sow.imp_in',compact('imp_in','sow'));
    }
}
