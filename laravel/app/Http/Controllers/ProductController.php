<?php

namespace App\Http\Controllers;

use Auth;
use App\Album;
use App\Slider;
use App\Song;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $pro = 'true';
        $albums = Album::all();
        $sliders = Slider::where('type', 'in-house')->select('title_1', 'title_2', 'body_text', 'image')->get();
        return view('front.pm.product',compact('pro', 'albums', 'sliders'));
    }
    public function album($id)
    {
        $pro = 'true';
        $album = Album::where('id', $id)->with('song')->first();
        //return $album;
        return view('front.pm.album', compact('pro', 'album'));
    }
    public function cartDetail(){
        $pro = 'true';
        session(['cart' => 'true']);
        $albums = Album::all();
        return view('front.cart.cartDetail', compact('pro', 'albums'));
    }
    public function cartCheckout(){
        $pro = 'true';
        $albums = Album::all();
        return view('front.cart.cartCheckout', compact('pro', 'albums'));
    }

    public function downloadZip($id)
    {
        $headers = ["Content-Type" => "application/zip"];
        $album = Album::find($id);
        $songs = Song::where('album_id', $id)->get();
        // $fileName =  // name of zip
        $zip_file = $album->title . ".zip";;
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        

        foreach ($songs as $song) {
            // We're skipping all subfolders
            

                $zip->addFile("back/assets/img/products/album/" . $song->audio);
            
        }
        $zip->close();
        return response()->download($zip_file);

         //return response()->download(("back/assets/img/products/album/" . $fileName), $fileName, $headers);
    }
}
