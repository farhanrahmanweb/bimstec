@extends('layouts.backend.app')
@section('title', 'Update Category')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Category Name</label>
                                <input type="text" name="name" value="{{$category->name}}" placeholder="Category title" class="form-control">
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

