<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Director;
use App\Division;
use App\Document;
use App\Http\Controllers\Controller;
use App\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use Cassandra\Bigint;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Director::latest()->paginate(10);
        return view('backend.admin.director.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all();
        return view('backend.admin.director.create', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'director_name'=> 'required',
            'division_id'=> 'required',
            'director_designation'=> 'required',
            'director_contact'=> 'required',
            'director_about'=> 'required',
            'director_image'=> 'image|mimes:jpeg,png,jpg|max:2000',
        ]);

        $director = new Director();
        $director->name = $request->director_name;
        $director->designation = $request->director_designation;
        $director->division_id = $request->division_id;
        $director->contact = $request->director_contact;
        $director->about = $request->director_about;

        $image = $request->file('director_image');
        if (isset($image)) {

            if (!Storage::disk('public')->exists('director')) {
                Storage::disk('public')->makeDirectory('director');
            }
            if (!Storage::disk('public')->exists('director/thumbnail')) {
                Storage::disk('public')->makeDirectory('director/thumbnail');
            }

            $currentDate = Carbon::now()->toDateString();
            $imageName = $currentDate . '-' . uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $request->file('director_image')->move(public_path('storage/director/'), $imageName);

            $director->image = $imageName;
        }

        $director->save();
        Toastr::success("Director Added Successfully", "Director");
        return redirect()->route('admin.director.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $director = Director::find($id);
        $divisions = Division::all();
        return view('backend.admin.director.edit', compact('director', 'divisions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'director_name'=> 'required',
            'division_id'=> 'required',
            'director_designation'=> 'required',
            'director_contact'=> 'required',
            'director_about'=> 'required',
            'director_image' => 'image|mimes:jpeg,png,jpg|max:2000'
        ]);

        $director = Director::find($id);
        $director->name = $request->director_name;
        $director->designation = $request->director_designation;
        $director->division_id = $request->division_id;
        $director->contact = $request->director_contact;
        $director->about = $request->director_about;

        $image = $request->file('director_image');
        if (isset($image)) {

            if (!Storage::disk('public')->exists('director')) {
                Storage::disk('public')->makeDirectory('director');
            }
            if (!Storage::disk('public')->exists('director/thumbnail')) {
                Storage::disk('public')->makeDirectory('director/thumbnail');
            }

            $currentDate = Carbon::now()->toDateString();
            $imageName = $currentDate . '-' . uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $request->file('director_image')->move(public_path('storage/director/'), $imageName);

            $director->image = $imageName;
        }

        $director->save();
        Toastr::success("Director Updated Successfully", "Director");
        return redirect()->route('admin.director.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director = Director::find($id);
        $director->delete();
        Toastr::success('Director Deleted Successfully', 'Success');
        return redirect()->back();
    }
}
