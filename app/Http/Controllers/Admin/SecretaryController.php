<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use App\Http\Controllers\Controller;
use App\Secretary;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretarys = Secretary::latest()->paginate(10);
        return view('backend.admin.secretary.index', compact('secretarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.secretary.create');
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
            'title'=> 'required',
            'type'=> 'required',
            'date'=> 'required',
//            'description'=> 'required',
            'file'=> 'required|mimes:pdf,jpeg,png,jpg'
        ]);

        $image = $request->file('file');

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $fileName = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('secretary'))
            {
                Storage::disk('public')->makeDirectory('secretary');
            }
            $request->file->move(public_path('storage/secretary/'), $fileName);
        }
        $secretary = new Secretary();
        $secretary->title = $request->title;
        $secretary->description = $request->description;
        $secretary->date = $request->date;
        $secretary->type = $request->type;
        $secretary->file = $fileName;

        if(isset($request->is_publish))
        {
            $secretary->is_publish = true;
        }else{
            $secretary->is_publish = false;
        };
        $secretary->save();
        Toastr::success("Content Add Successfully", "Secretary");
        return redirect()->route('admin.secretary.index');
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
        $secretary = Secretary::find($id);
        return view('backend.admin.secretary.edit', compact('secretary'));
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
        $this->validate($request, [
            'title'=> 'required',
            'type'=> 'required',
            'date'=> 'required',
//            'description'=> 'required',
            'file'=> 'mimes:pdf,jpeg,png,jpg'
        ]);

        $image = $request->file('file');
        $secretary = Secretary::find($id);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $fileName = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('secretary'))
            {
                Storage::disk('public')->makeDirectory('secretary');
            }
            if(Storage::disk('public')->exists('secretary/'.$secretary->file))
            {
                Storage::disk('public')->delete('secretary/'.$secretary->file);
            }
            $request->file->move(public_path('storage/secretary/'), $fileName);
        }else{
            $fileName = $secretary->file;
        }

        $secretary->title = $request->title;
        $secretary->description = $request->description;
        $secretary->date = $request->date;
        $secretary->type = $request->type;
        $secretary->file = $fileName;

        if(isset($request->is_publish))
        {
            $secretary->is_publish = true;
        }else{
            $secretary->is_publish = false;
        };
        $secretary->save();
        Toastr::success("Content Update Successfully", "Secretary");
        return redirect()->route('admin.secretary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secretary = Secretary::find($id);
        if(Storage::disk('public')->exists('secretary/'.$secretary->file))
        {
            Storage::disk('public')->delete('secretary/'.$secretary->file);
        }
        $secretary->delete();
        Toastr::success('Item Delete Successfully', 'Success');
        return redirect()->back();
    }
}
