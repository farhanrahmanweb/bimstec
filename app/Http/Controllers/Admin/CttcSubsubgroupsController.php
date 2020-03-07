<?php

namespace App\Http\Controllers\Admin;

use App\CttcPage;
use App\CttcSubgroups;
use App\CttcSubsubgroups;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CttcSubsubgroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cttc_subsubgroups = CttcSubsubgroups::latest()->paginate(10);
        return view('backend.admin.cttcsubsubgroup.index', compact('cttc_subsubgroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cttc_subgroup = CttcSubgroups::latest()->get();
        return view('backend.admin.cttcsubsubgroup.create', compact('cttc_subgroup'));
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
            'content' => 'required',
            'cttc_subgroup_id' => 'required',
            'file' => 'mimes:pdf,xlx,csv',
        ]);

        $cttc = new CttcSubsubgroups();
        $cttc->title = $request->title;
        $cttc->cttc_subgroup_id = $request->cttc_subgroup_id;
        $cttc->content = $request->get('content');

        if ($request->has('file')) {
            $image = $request->file('file');
            $slug = Str::slug($request->title, '-');

            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $fileName = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('cttc')) {
                    Storage::disk('public')->makeDirectory('cttc');
                }
                $request->file->move(public_path('storage/cttc/'), $fileName);
            } else {
                $fileName = "default.pdf";
            }
            $cttc->file = $fileName;
        }

        $cttc->save();
        Toastr::success("CTTC Sub Subgroup Added Successfully", "CTTC");
        return redirect()->route('admin.cttcSubsubgroup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CttcSubsubgroups  $cttcSubsubgroups
     * @return \Illuminate\Http\Response
     */
    public function show(CttcSubsubgroups $cttcSubsubgroups)
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
        $cttc_subgroup = CttcSubgroups::get();
        $cttc_subsubgroup = CttcSubsubgroups::find($id);
        return view('backend.admin.cttcsubsubgroup.edit', compact('cttc_subgroup', 'cttc_subsubgroup'));
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
            'title'=> 'required',
            'content' => 'required',
            'cttc_subgroup_id' => 'required',
            'file' => 'mimes:pdf,xlx,csv',
        ]);

        $cttc = CttcSubsubgroups::find($id);
        $cttc->title = $request->title;
        $cttc->cttc_subgroup_id = $request->cttc_subgroup_id;
        $cttc->content = $request->get('content');

        if ($request->has('file')) {
            $image = $request->file('file');
            $slug = Str::slug($request->title, '-');

            if (isset($image)) {
                $currentDate = Carbon::now()->toDateString();
                $fileName = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('cttc')) {
                    Storage::disk('public')->makeDirectory('cttc');
                }
                $request->file->move(public_path('storage/cttc/'), $fileName);
            } else {
                $fileName = "default.pdf";
            }
            $cttc->file = $fileName;
        }

        $cttc->save();
        Toastr::success("CTTC Sub Subgroup Updated Successfully", "CTTC");
        return redirect()->route('admin.cttcSubsubgroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cttc = CttcSubsubgroups::find($id);
        $cttc->delete();
        Toastr::success('Sub SubGroup Deleted Successfully', 'Success');
        return redirect()->back();
    }
}
