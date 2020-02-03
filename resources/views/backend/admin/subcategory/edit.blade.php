@extends('layouts.backend.app')
@section('title', 'Update Subcategory')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Subcategory</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.subcategory.update', $subcategory->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" name="name" value="{{$subcategory->name}}" placeholder="Type name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Parent Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">--Select Category--</option>
                                    @foreach($categorys as $key=>$category)
                                        <option value="{{$category->id}}" @if($category->id==$subcategory->category_id) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

