<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Photo;
use App\SecretaryProfile;
use Brian2694\Toastr\Facades\Toastr;
use Cassandra\Bigint;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SecretaryProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $secretary = DB::table('secretary_profiles')->first();
        return view('backend.admin.editSecretaryProfile', compact('secretary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'secretary_content'=> 'required',
        ]);

        $secretary = SecretaryProfile::find(1);
        $secretary->content = $request->get('secretary_content');

        $secretary->save();

        Toastr::success("Updated Successfully", "Secretary Profile");
        return redirect()->route('admin.dashboard');
    }
}
