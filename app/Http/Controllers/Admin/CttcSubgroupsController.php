<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\CttcPage;
use App\CttcSubgroups;
use App\Http\Controllers\Controller;
use App\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CttcSubgroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cttc_subgroups = CttcSubgroups::latest()->paginate(10);
        return view('backend.admin.cttcsubgroup.index', compact('cttc_subgroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cttc_group = CttcPage::latest()->get();
        return view('backend.admin.cttcsubgroup.create', compact('cttc_group'));
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
            'cttc_page_id' => 'required',
            'file' => 'mimes:pdf,xlx,csv',
        ]);

        $cttc = new CttcSubgroups();
        $cttc->title = $request->title;
        $cttc->cttc_page_id = $request->cttc_page_id;
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
        Toastr::success("CTTC Subgroup Added Successfully", "CTTC");
        return redirect()->route('admin.cttcSubgroup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CttcSubgroups  $cttcSubgroups
     * @return \Illuminate\Http\Response
     */
    public function show(CttcSubgroups $cttcSubgroups)
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
        $cttc_group = CttcPage::get();
        $cttc_subgroup = CttcSubgroups::find($id);
        return view('backend.admin.cttcSubgroup.edit', compact('cttc_group', 'cttc_subgroup'));
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
            'cttc_page_id' => 'required',
            'file' => 'mimes:pdf,xlx,csv',
        ]);

        $cttc = CttcSubgroups::find($id);
        $cttc->title = $request->title;
        $cttc->cttc_page_id = $request->cttc_page_id;
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
        Toastr::success("CTTC Subgroup Updated Successfully", "CTTC");
        return redirect()->route('admin.cttcSubgroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cttc = CttcSubgroups::find($id);
        $cttc->delete();
        Toastr::success('SubGroup Deleted Successfully', 'Success');
        return redirect()->back();
    }
}
