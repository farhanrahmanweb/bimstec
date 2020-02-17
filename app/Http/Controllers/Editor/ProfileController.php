<?php

namespace App\Http\Controllers\Editor;

use App\Event;
use App\Photo;
use App\User;
use App\Http\Controllers\Controller;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function edit($id)
    {
        $user = Auth::user();
        return view('backend.editor.profile.edit', compact('user'));
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
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2000'
        ]);

        $user = User::find($id);
        if (Hash::check($request->user_password, $user->password)) {
            $user->name = $request->user_name;
            $user->email = $request->user_email;
            $image = $request->file('image');
            if (isset($image)) {

                if (!Storage::disk('public')->exists('profile')) {
                    Storage::disk('public')->makeDirectory('profile');
                }
                if (!Storage::disk('public')->exists('profile/thumbnail')) {
                    Storage::disk('public')->makeDirectory('profile/thumbnail');
                }

                $currentDate = Carbon::now()->toDateString();
                $imageName = $currentDate . '-' . uniqid() . time() . '.' . $image->getClientOriginalExtension();
                $request->file('image')->move(public_path('storage/profile/'), $imageName);

                $user->image = $imageName;
            }
            $user->save();
            Toastr::success("Profile Updated Successfully", "Profile");
            return redirect()->route('editor.dashboard');
        } else {
            Toastr::error("Profile Update Failed. Invalid password", "Profile");
            return redirect()->route('editor.profile.edit', $user->id);
        }


    }

    public function changePassword()
    {
        $user = Auth::user();
        return view('backend.editor.profile.changePassword', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'user_old_password' => 'required',
            'user_new_password' => 'required',
        ]);

        $id = Auth::user()->id;

        $user = User::find($id);
        if (Hash::check($request->user_old_password, $user->password)) {
            $user->password = Hash::make($request->user_new_password);

            $user->save();
            Toastr::success("Password Changed Successfully", "Profile");
            return redirect()->route('editor.dashboard');
        } else {
            Toastr::error("Password Change Failed. Invalid old password.", "Profile");
            return view('backend.editor.profile.changePassword', compact('user'));
        }


    }
}
