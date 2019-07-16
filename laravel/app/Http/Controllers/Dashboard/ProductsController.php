<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use GuzzleHttp\Psr7;
use Auth;
use App\Album;

class ProductsController extends Controller
{
    public function create()
    {
        $activesateus = 'products';
        $subactivesateus = 'products.add';
        return view('back.products.create', compact('activesateus', 'subactivesateus'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'production' => 'required',
            'photo' => 'required'
        ]);


        if ($request->hasFile('photo')) {
            $q = $request->quality;
            $file = $request->photo;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('photo'))->save('back/assets/img/products/' . $filename, $q);
            //return $request->all();
            $request['image'] = $filename;
        }
        $request['user_id'] = Auth::user()->id;
        Album::create($request->except('_token', 'photo', 'quality'));

        return redirect()->back()->with('message', 'Album Added Successfully.');
    }
    public function index()
    {
        $activesateus = 'products';
        $subactivesateus = 'products.manage';
        $albums = Album::orderBy('created_at')->paginate(10);
        return view('back.products.index', compact('activesateus', 'subactivesateus', 'albums'));
    }
    public function edit($id)
    {
        $activesateus = 'products';
        $subactivesateus = 'products.manage';
        $album = Album::find($id);
        return view('back.products.edit', compact('activesateus', 'subactivesateus', 'album'));
    }
    public function update(Request $request, $id)
    {
        $album = Album::find($id);
        if ($request->hasFile('photo')) {
            $q = $request->quality;
            $file = $request->photo;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('photo'))
                //->resize(300, 200)
                ->save('back/assets/img/products/' . $filename, $q);
            $request['image'] = $filename;

            if (file_exists('back/assets/img/products/' . $album->image) && $album->image != null) {
                unlink('back/assets/img/products/' . $album->image);
            }
        }
        $album->fill($request->all())->save();
        return redirect()->back()->with('message', 'Album Updated Successfully.');
    }
    public function delete($id)
    {
        $album = Album::find($id);
        if (file_exists('back/assets/img/products/' . $album->image)) {
            unlink('back/assets/img/products/' . $album->image);
        }
        $album->delete();
        return redirect()->back()->with('message', 'Album Deleted Successfully.');
    }
}
