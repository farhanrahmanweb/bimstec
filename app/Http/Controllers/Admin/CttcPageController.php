<?php

namespace App\Http\Controllers\Admin;

use App\CttcPage;
use App\Director;
use App\Division;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CttcPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cttcs = CttcPage::latest()->paginate(10);
        return view('backend.admin.cttc.index', compact('cttcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.cttc.create');
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
            'content' => 'required',
            'file' => 'mimes:pdf,xlx,csv',
        ]);

        $cttc = new CttcPage();
        $cttc->title = $request->title;
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
        Toastr::success("CTTC Group Added Successfully", "CTTC");
        return redirect()->route('admin.cttcPage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\CttcPage $cttcPage
     * @return \Illuminate\Http\Response
     */
    public function show(CttcPage $cttcPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cttc = CttcPage::find($id);
        return view('backend.admin.cttc.edit', compact('cttc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'file' => 'mimes:pdf,xlx,csv',
        ]);

        $cttc = CttcPage::find($id);
        $cttc->title = $request->title;
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
        Toastr::success("CTTC Group Updated Successfully", "CTTC");
        return redirect()->route('admin.cttcPage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param bigInt $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cttc = CttcPage::find($id);
        $cttc->delete();
        Toastr::success('Tab Deleted Successfully', 'Success');
        return redirect()->back();
    }
}
