<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use GuzzleHttp\Psr7;
use Illuminate\Support\Facades\Storage;
use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Auth;
use App\Album;
use App\Song;

use Carbon\Carbon;

class SongController extends Controller
{
    public function create()
    {
        $activesateus = 'song';
        $subactivesateus = 'song.add';
        $albums=Album::all();
        return view('back.song.create', compact('activesateus', 'subactivesateus', 'albums'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'file' => 'file|mimes:audio/mpeg,mpga,mp3,wav,aac'
        ]);


        if ($request->hasFile('file')) {

            $file = $request->file;
            $name = $file->getClientOriginalName();
            $extention = $file->getClientOriginalExtension();
            $filename = $name . "." . $extention;
            Input::file('file')->move('back/assets/img/products/album/' . $filename);
            //return $request->all();
            $request['audio'] = $filename;
        }
        $request['user_id'] = Auth::user()->id;

        Song::create($request->except('_token', 'file'));
        
        return redirect()->back()->with('message', 'Song Added Successfully.');
    }
}
