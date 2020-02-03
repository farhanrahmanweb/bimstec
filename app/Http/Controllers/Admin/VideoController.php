<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Video;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::latest()->paginate(10);
        return view('backend.admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.video.create');
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
            'video_url'=> 'required',
        ]);

        $video = new Video();
        $video->title = $request->title;
        $vexplode = explode("?v=",$request->video_url);
        $video->video_url = $vexplode[1];
        if(isset($request->is_publish))
        {
            $video->is_publish = true;
        }else{
            $video->is_publish = false;
        };

        $video->save();
        Toastr::success("Video Add Successfully", "Video");
        return redirect()->route('admin.video.index');
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
        $video = Video::find($id);
        return view('backend.admin.video.edit', compact('video'));
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
            'video_url'=> 'required',
        ]);

        $video = Video::find($id);
        $video->title = $request->title;
        $vexplode = explode("?v=",$request->video_url);
        $video->video_url = $vexplode[1];
        if(isset($request->is_publish))
        {
            $video->is_publish = true;
        }else{
            $video->is_publish = false;
        };

        $video->save();
        Toastr::success("Video Update Successfully", "Video");
        return redirect()->route('admin.video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docs = Video::find($id);
        $docs->delete();
        Toastr::success('Video Delete Successfully', 'Success');
        return redirect()->back();
    }
}
