<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Subcategory;
use App\Document;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $documents = Document::latest()->paginate(10);
        return view('backend.admin.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        $subcategorys = Subcategory::all();
        return view('backend.admin.document.create', compact('categorys', 'subcategorys'));
    }

    public function ajaxSubcategory($id){
        $subcategoriys = Subcategory::where('category_id', $id)->get();
        return json_encode($subcategoriys);
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
            'category_id'=> 'required',
            'subcategory_id'=> 'required',
            'description'=> 'required',
            'document_date'=> 'required',
            'file'=> 'required|mimes:pdf,xlx,csv'
        ]);

        $image = $request->file('file');
        $slug = Str::slug($request->title, '-');

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $fileName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('document'))
            {
                Storage::disk('public')->makeDirectory('document');
            }
            $request->file->move(public_path('storage/document/'), $fileName);
        }else{
            $fileName = "default.pdf";
        }
        $document = new Document();
        $document->title = $request->title;
        $document->description = $request->description;
        $document->category_id = $request->category_id;
        $document->subcategory_id = $request->subcategory_id;
        $document->year = date('Y');
        $document->document_date = $request->document_date;
        $document->file = $fileName;

        if(isset($request->is_publish))
        {
            $document->is_publish = true;
        }else{
            $document->is_publish = false;
        };
        $document->save();
        Toastr::success("Documents Add Successfully", "Document");
        return redirect()->route('admin.document.index');
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
        $document = Document::find($id);
        $categorys = Category::all();
        $subcategorys = Subcategory::all();
        return view('backend.admin.document.edit', compact('document', 'categorys','subcategorys'));
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
            'category_id'=> 'required',
            'subcategory_id'=> 'required',
            'description'=> 'required',
            'document_date'=> 'required',
            'file'=> 'mimes:pdf,xlx,csv'
        ]);

        $image = $request->file('file');
        $slug = Str::slug($request->title, '-');
        $document = Document::find($id);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $fileName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('document'))
            {
                Storage::disk('public')->makeDirectory('document');
            }
            if(Storage::disk('public')->exists('document/'.$document->file))
            {
                Storage::disk('public')->delete('document/'.$document->file);
            }
            $request->file->move(public_path('storage/document/'), $fileName);
        }else{
            $fileName = $document->file;
        }

        $document->title = $request->title;
        $document->description = $request->description;
        $document->category_id = $request->category_id;
        $document->subcategory_id = $request->subcategory_id;
        $document->year = date('Y');
        $document->document_date = $request->document_date;
        $document->file = $fileName;

        if(isset($request->is_publish))
        {
            $document->is_publish = true;
        }else{
            $document->is_publish = false;
        };
        $document->save();
        Toastr::success("Documents Update Successfully", "Document");
        return redirect()->route('admin.document.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id);
        if(Storage::disk('public')->exists('document/'.$document->file))
        {
            Storage::disk('public')->delete('document/'.$document->file);
        }
        $document->delete();
        Toastr::success('Document Delete Successfully', 'Success');
        return redirect()->back();
    }
}
