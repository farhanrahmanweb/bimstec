<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses = News::latest()->paginate(10);
        return view('backend.admin.news.index', compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.news.create');
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
            'description'=> 'required',
            'news_date'=> 'required',
            'type'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2000'
        ]);

            $image = $request->file('image');
            if(isset($image)){
                $currentDate = Carbon::now()->toDateString();
                $imageName = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

                if(!Storage::disk('public')->exists('news'))
                {
                    Storage::disk('public')->makeDirectory('news');
                }
                $newsImage = Image::make($image)->save();
                Storage::disk('public')->put('news/'.$imageName, $newsImage);
            }else{
                $imageName = "default.png";
            }

            $news = new News();
            $news->title = $request->title;
            $news->description = $request->description;
            $news->news_date = $request->news_date;
            $news->year = date('Y');
            $news->month = date('M');
            $news->type = $request->type;
            $news->news_link = $request->news_link;
            $news->image = $imageName;

            if(isset($request->is_publish))
            {
                $news->is_publish = true;
            }else{
                $news->is_publish = false;
            };
            $news->save();

            Toastr::success("News Add Successfully", "News");
            return redirect()->route('admin.news.index');
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
        $news = News::find($id);
        return view('backend.admin.news.edit', compact('news'));
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
            'description'=> 'required',
            'news_date'=> 'required',
            'type'=> 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2000'
        ]);

        $image = $request->file('image');
        $news = News::find($id);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('news'))
            {
                Storage::disk('public')->makeDirectory('news');
            }
            if(Storage::disk('public')->exists('news/'.$news->image))
            {
                Storage::disk('public')->delete('news/'.$news->image);
            }
            $newsImage = Image::make($image)->save();
            Storage::disk('public')->put('news/'.$imageName, $newsImage);
        }else{
            $imageName = $news->image;
        }

        $news->title = $request->title;
        $news->description = $request->description;
        $news->news_date = $request->news_date;
        $news->year = date('Y');
        $news->month = date('M');
        $news->type = $request->type;
        $news->news_link = $request->news_link;
        $news->image = $imageName;

        if(isset($request->is_publish))
        {
            $news->is_publish = true;
        }else{
            $news->is_publish = false;
        };
        $news->save();

        Toastr::success("News Update Successfully", "News");
        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        if(Storage::disk('public')->exists('news/'.$news->image))
        {
            Storage::disk('public')->delete('news/'.$news->image);
        }
        $news->delete();
        Toastr::success('News Delete Successfully', 'Success');
        return redirect()->back();
    }
}
