<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Gallery;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activesateus = 'gallery';
        $subactivesateus = 'gallery.manage';
        $galleries = Gallery::paginate(12);
        return view('back.gallery.index',compact('activesateus','subactivesateus','galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $activesateus = 'gallery';
        $subactivesateus = 'gallery.add';
        //$images = Ucimage::where('ucevent_id', $id)->select('id','image')->get();
        //return $images;
        //$event = Ucevent::where('id', $id)->select('id','name')->first();
        return view('back.gallery.create',compact('activesateus','subactivesateus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'heading' => 'required',
            'photo' => 'required',
            'year' => 'required'
        ]);


        if($request->hasFile('photo')){
            $q = $request->quality;
            $file = $request->photo;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('photo'))->save('back/assets/img/gallery/'.$filename, $q);
           //return $request->all();
            $request['image']=$filename;
        }
        $request['user_id']=Auth::user()->id;
        Gallery::create($request->except('_token','photo','quality'));
        
        return redirect()->back()->with('message','Image Uploaded Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activesateus = 'gallery';
        $subactivesateus = 'gallery.manage';
        $gallery = Gallery::find($id);
        return view('back.gallery.edit',compact('activesateus','subactivesateus','gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'heading' => 'required',
        ]);

        $img = Gallery::find($id);
        if($request->hasFile('photo'))
        {
            $q = $request->quality;
            $file = $request->photo;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('photo'))->save('back/assets/img/gallery/'.$filename, $q);
           //return $request->all();
            $request['image']=$filename;
            if(file_exists('back/assets/img/gallery/'.$img->image) && $img->image !=null )
                {
                    unlink('back/assets/img/gallery/'.$img->image);
                }
        }
        $img->fill($request->all())->save();
        return redirect()->back()->with('message','Image updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = Gallery::find($id);
        if(file_exists('back/assets/img/gallery/'.$img->image) && $img->image !=null )
            {
                unlink('back/assets/img/gallery/'.$img->image);
            }
        $img->delete();
        return redirect()->back()->with('message','Image Deleted Successfully.');
    }
}
