@extends('layouts.backend.app')
@section('title', 'Secretary')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create New Statement/page</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.secretary.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Title</label>
                                <input type="text" name="title" value="{{old('title')}}" placeholder="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Date</label>
                                <input type="date" id="dates" name="date" value="{{old('date')}}" placeholder="Date" class="form-control" autocomplete="false">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="">--Select Type--</option>
                                    <option value="page">Page</option>
                                    <option value="statement">Statement</option>
                                </select>
                            </div>
                            <div class="form-group" id="description">
                                <label class="form-control-label">Description</label>
                                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">File/image</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Publish?</label>
                                </div>
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

@push('js')
    <script >
        $(function ($) {
            CKEDITOR.replace( 'description', {height: 500});
        })(jQuery)
        //$(function ($) {
            $('#dates').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });

            $('#description').hide();
            $('#type').change(function(){
                if($('#type').val() == 'page') {
                    $('#description').show();
                } else {
                    $('#description').hide();
                }
            });


    </script>
@endpush

