<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
class ArtsController extends Controller
{
     public function index()
    {   
        $galleries = Gallery::where('type', 'live')->select('heading', 'caption', 'image','year')->get();
    	$live = 'true';
    	return view('front.arts.live_drama',compact('live','galleries'));
    }

    public function ttc()
    {   
        $galleries = Gallery::where('type', 'ttc')->select('heading', 'caption', 'image','year')->get();
    	$live = 'true';
    	return view('front.arts.ttc',compact('live','galleries'));
    }
    public function case()
    {
    	$live = 'true';
        $galleries = Gallery::where('type', 'case')->select('heading', 'caption', 'image','year')->get();
    	return view('front.arts.case',compact('live','galleries'));
    }
}
