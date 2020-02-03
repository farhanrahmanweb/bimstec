@extends('layouts.backend.app')
@section('title', 'Create Subcategory')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create New Subcategory</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.subcategory.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" placeholder="Type name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Parent Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">--Select Category--</option>
                                    @foreach($categorys as $key=>$category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

