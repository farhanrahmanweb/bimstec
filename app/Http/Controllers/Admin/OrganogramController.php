<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Organogram;

use Brian2694\Toastr\Facades\Toastr;
use Cassandra\Bigint;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class OrganogramController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Organogram $organogram
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $organogram = DB::table('organograms')->first();
        return view('backend.admin.editOrganogram', compact('organogram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'organogram_content' => 'required',
        ]);

        $organogram = Organogram::find(1);
        $organogram->content = $request->get('organogram_content');

        $organogram->save();

        Toastr::success("Updated Successfully", "Organogram");
        return redirect()->route('admin.dashboard');
    }
}
