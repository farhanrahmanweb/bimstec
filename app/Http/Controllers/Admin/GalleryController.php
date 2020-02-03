<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Photo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::latest()->paginate(10);
        return view('backend.admin.photo.index', compact('gallerys'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'gallery_date' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2000'
        ]);


        if ($request->hasFile('image')) {

            $gallery = new Gallery();
            $gallery->title = $request->title;
            $gallery->gallery_date = $request->gallery_date;
            $gallery->year = Date('Y');
            if (isset($request->is_publish)) {
                $gallery->is_publish = true;
            } else {
                $gallery->is_publish = false;
            }

            $gallery->save();

            if (!Storage::disk('public')->exists('photo')) {
                Storage::disk('public')->makeDirectory('photo');
            }
            if (!Storage::disk('public')->exists('photo/thumbnail')) {
                Storage::disk('public')->makeDirectory('photo/thumbnail');
            }

            foreach ($request->file('image') as $file) {
                $currentDate = Carbon::now()->toDateString();
                $imageName = $currentDate . '-' . uniqid() . time() . '.' . $file->getClientOriginalExtension();

                $mainimage = Image::make($file)->stream();
                Storage::disk('public')->put('photo/' . $imageName, $mainimage);

                $thumbImage = Image::make($file)->resize(400, 300)->stream();
                Storage::disk('public')->put('photo/thumbnail/' . $imageName, $thumbImage);

                $photo = new Photo();
                $photo->gallery_id = $gallery->id;
                $photo->image = $imageName;
                $photo->save();
            }
        }

        Toastr::success("Gallery Add Successfully", "Gallery");
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        $galleryphotos = Photo::where('gallery_id', $id)->get();
        return view('backend.admin.photo.edit', compact('gallery', 'galleryphotos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'gallery_date' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2000'
        ]);

        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        $gallery->gallery_date = $request->gallery_date;
        $gallery->year = Date('Y');
        if (isset($request->is_publish)) {
            $gallery->is_publish = true;
        } else {
            $gallery->is_publish = false;
        }

        $gallery->save();

        if ($request->hasFile('image')) {

            if (!Storage::disk('public')->exists('photo')) {
                Storage::disk('public')->makeDirectory('photo');
            }
            if (!Storage::disk('public')->exists('photo/thumbnail')) {
                Storage::disk('public')->makeDirectory('photo/thumbnail');
            }
            foreach ($request->file('image') as $file) {
                $currentDate = Carbon::now()->toDateString();
                $imageName = $currentDate . '-' . uniqid() . time() . '.' . $file->getClientOriginalExtension();

                $mainimage = Image::make($file)->stream();
                Storage::disk('public')->put('photo/' . $imageName, $mainimage);

                $thumbImage = Image::make($file)->resize(400, 300)->stream();
                Storage::disk('public')->put('photo/thumbnail/' . $imageName, $thumbImage);

                $photo = new Photo();
                $photo->gallery_id = $id;
                $photo->image = $imageName;
                $photo->save();
            }
        }

        Toastr::success("Gallery Update Successfully", "Gallery");
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $photos = Photo::where('gallery_id', $id)->get();
        foreach ($photos as $photo) {

            if (Storage::disk('public')->exists('photo/' . $photo->image)) {
                Storage::disk('public')->delete('photo/' . $photo->image);
            }
            if (Storage::disk('public')->exists('photo/thumbnail/' . $photo->image)) {
                Storage::disk('public')->delete('photo/thumbnail/' . $photo->image);
            }
            $photo->delete();
        }
        $gallery->delete();
        Toastr::success('Gallery Delete Successfully', 'Success');
        return redirect()->back();
    }
}
