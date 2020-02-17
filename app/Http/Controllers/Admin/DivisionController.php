<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Division;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::latest()->paginate(10);
        return view('backend.admin.division.index', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.division.create');
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
            'division_title'=> 'required',
            'division_description'=> 'required',
            'division_sectors_activities'=> 'required',
        ]);

        $division = new Division();
        $division->title = $request->division_title;
        $division->description = $request->division_description;
        $division->sectors_activities = $request->division_sectors_activities;
        $division->save();
        Toastr::success("Division Added Successfully", "Division");
        return redirect()->route('admin.division.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
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
        $division = Division::find($id);
        return view('backend.admin.division.edit', compact('division'));
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
            'division_title'=> 'required',
            'division_description'=> 'required',
            'division_sectors_activities'=> 'required',
        ]);

        $division = Division::find($id);
        $division->title = $request->division_title;
        $division->description = $request->division_description;
        $division->sectors_activities = $request->division_sectors_activities;
        $division->save();
        Toastr::success("Division Updated Successfully", "Division");
        return redirect()->route('admin.division.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::find($id);
        $division->delete();
        Toastr::success('Division Deleted Successfully', 'Success');
        return redirect()->back();
    }
}
