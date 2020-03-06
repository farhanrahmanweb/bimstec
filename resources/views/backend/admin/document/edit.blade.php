@extends('layouts.backend.app')
@section('title', 'Update Document')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Document</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.document.update', $document->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Document Title</label>
                                <input type="text" name="title" value="{{$document->title}}" placeholder="Document title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Document Description</label>
                                <textarea name="description" cols="30" rows="5" placeholder="Docuemnt Description" class="form-control ckeditor">{{$document->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Document Date</label>
                                <input  id="document_date" name="document_date" value="{{$document->document_date}}" placeholder="Document Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">--Select Category--</option>
                                    @foreach($categorys as $key=>$category)
                                        <option value="{{$category->id}}" @if($category->id==$document->category_id) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">SubCategory</label>
                                <select name="subcategory_id" class="form-control">
                                    <option value="">--Select SubCategory--</option>
                                    @foreach($subcategorys as $key=>$subcategory)
                                        @if($subcategory->category_id==$document->category_id)
                                        <option value="{{$subcategory->id}}" @if($subcategory->id==$document->subcategory_id) selected @endif>{{$subcategory->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Document File</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Old Password</label>
                                <input type="password" name="old_password" value="{{old('password')}}" placeholder="Old Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">New Password</label>
                                <input type="password" name="new_password" value="{{old('password')}}" placeholder="New Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input" @if($document->is_publish==1) checked @endif>
                                    <label for="customCheck1" class="custom-control-label">Publish Document?</label>
                                </div>
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

@push('js')
    <script >
        $(document).ready(function() {
            $('#document_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
                $('select[name="category_id"]').on('change', function() {
                    var catID = $(this).val();
                    if(catID) {
                        $.ajax({
                            url: '/admin/subcategory/ajax/'+catID,
                            type: "GET",
                            dataType: "json",
                            success:function(data) {
                                $('select[name="subcategory_id"]').empty();
                                $('select[name="subcategory_id"]').append('<option value="">--Select Subcategory</option>');
                                $.each(data, function(key, value) {
                                    $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                                });
                            }
                        });
                    }else{
                        $('select[name="subcategory_id"]').empty();
                        $('select[name="subcategory_id"]').append('<option value="">--Select Subcategory</option>');

                    }
                });
        });
        CKEDITOR.replace('description',
            {
                height: 500
            })
    </script>
@endpush


