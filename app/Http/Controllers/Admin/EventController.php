<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Photo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('event_end_date', 'DESC')->paginate(10);
        return view('backend.admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.event.create');
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
            'event_title'=> 'required',
            'event_description'=> 'required',
            'event_start_date'=> 'required',
            'event_end_date'=> 'required',
            'event_location'=> 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2000'
        ]);

        if ($request->hasFile('image')) {

            $event = new Event();
            $event->event_title = $request->event_title;
            $event->event_description = $request->event_description;
            $event->event_start_date = $request->event_start_date;
            $event->event_end_date = $request->event_end_date;
            $event->event_location = $request->event_location;
            if(isset($request->is_publish))
            {
                $event->is_publish = true;
            }else{
                $event->is_publish = false;
            };
            $event->save();

            if(!Storage::disk('public')->exists('event'))
            {
                Storage::disk('public')->makeDirectory('event');
            }
            if(!Storage::disk('public')->exists('event/thumbnail'))
            {
                Storage::disk('public')->makeDirectory('event/thumbnail');
            }

            foreach($request->file('image') as $file){
                $currentDate = Carbon::now()->toDateString();
                $imageName = $currentDate.'-'.uniqid().time().'.'.$file->getClientOriginalExtension();

                $mainimage = Image::make($file)->stream();
                Storage::disk('public')->put('event/'.$imageName, $mainimage);

                $thumbImage = Image::make($file)->resize(400, 300)->stream();
                Storage::disk('public')->put('event/thumbnail/'.$imageName, $thumbImage);

                $photo = new Photo();
                $photo->event_id = $event->id;
                $photo->type = 'event';
                $photo->image = $imageName;
                $photo->save();
            }
        }
        Toastr::success("Event Add Successfully", "Event");
        return redirect()->route('admin.event.index');
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
        $event = Event::find($id);
        $eventphotos = Photo::where('event_id', $id)->get();
        return view('backend.admin.event.edit', compact('event', 'eventphotos'));
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
            'event_title'=> 'required',
            'event_description'=> 'required',
            'event_start_date'=> 'required',
            'event_end_date'=> 'required',
            'event_location'=> 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2000'
        ]);

        $event = Event::find($id);
        $event->event_title = $request->event_title;
        $event->event_description = $request->event_description;
        $event->event_start_date = $request->event_start_date;
        $event->event_end_date = $request->event_end_date;
        $event->event_location = $request->event_location;
        if(isset($request->is_publish))
        {
            $event->is_publish = true;
        }else{
            $event->is_publish = false;
        };
        $event->save();

        if ($request->hasFile('image')) {

            if(!Storage::disk('public')->exists('event'))
            {
                Storage::disk('public')->makeDirectory('event');
            }
            if(!Storage::disk('public')->exists('event/thumbnail'))
            {
                Storage::disk('public')->makeDirectory('event/thumbnail');
            }

            foreach($request->file('image') as $file){
                $currentDate = Carbon::now()->toDateString();
                $imageName = $currentDate.'-'.uniqid().time().'.'.$file->getClientOriginalExtension();

                $mainimage = Image::make($file)->stream();
                Storage::disk('public')->put('event/'.$imageName, $mainimage);

                $thumbImage = Image::make($file)->resize(400, 300)->stream();
                Storage::disk('public')->put('event/thumbnail/'.$imageName, $thumbImage);

                $photo = new Photo();
                $photo->event_id = $id;
                $photo->type = 'event';
                $photo->image = $imageName;
                $photo->save();
            }
        }

        Toastr::success("Event Update Successfully", "Event");
        return redirect()->route('admin.event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $photos = Photo::where('event_id', $id)->get();
        foreach ($photos as $photo){

            if(Storage::disk('public')->exists('event/'.$photo->image))
            {
                Storage::disk('public')->delete('event/'.$photo->image);
            }
            if(Storage::disk('public')->exists('event/thumbnail/'.$photo->image))
            {
                Storage::disk('public')->delete('event/thumbnail/'.$photo->image);
            }
            $photo->delete();
        }
        $event->delete();
        Toastr::success('Event Delete Successfully', 'Success');
        return redirect()->back();
    }
}
