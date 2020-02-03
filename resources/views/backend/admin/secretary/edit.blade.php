@extends('layouts.backend.app')
@section('title', 'Secretary')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Statement/page</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.secretary.update', $secretary->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Title</label>
                                <input type="text" name="title" value="{{$secretary->title}}" placeholder="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Date</label>
                                <input id="dates" name="date" value="{{$secretary->date}}" placeholder="Date" class="form-control" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="">--Select Type--</option>
                                    <option value="page" @if($secretary->type=='page') selected @endif>Page</option>
                                    <option value="statement" @if($secretary->type=='statement') selected @endif>Statement</option>
                                </select>
                            </div>
                            @if($secretary->type=='page')
                                <div class="form-group" id="description">
                                    <label class="form-control-label">Description</label>
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$secretary->description}}</textarea>
                                </div>
                            @endif

                            <div class="form-group">
                                <label class="form-control-label">File/image</label>
                                <input type="file" name="file" class="form-control"> <br>
                                @if($secretary->type=='page')
                                    <img src="{{asset('storage/secretary/'.$secretary->file)}}" width="200" alt="">
                                    @endif
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input" @if($secretary->is_publish==1) checked @endif>
                                    <label for="customCheck1" class="custom-control-label">Publish?</label>
                                </div>
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary">update</button>
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
        //$(function ($) {
        $('#dates').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });

        //$('#description').hide();
        $('#type').change(function(){
            if($('#type').val() == 'page') {
                $('#description').show();
            } else {
                $('#description').hide();
            }
        });


    </script>
@endpush

