@extends('layouts.backend.app')
@section('title', 'Update Slider')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Slider</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Slider Title</label>
                                <input type="text" name="title" value="{{$slider->title}}" placeholder="Slider title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Slider Description</label>
                                <textarea name="description" id="" cols="30" rows="5" placeholder="Slider Description" class="form-control">{{$slider->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Slider Link</label>
                                <input type="text" name="link" value="{{$slider->link}}" placeholder="Slider Link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Slider Image</label>
                                <input type="file" name="image" class="form-control"> <br>
                                <img src="{{asset('storage/slider/'. $slider->image)}}" width="200" alt="">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input" @if($slider->is_publish==1) checked @endif>
                                    <label for="customCheck1" class="custom-control-label">Publish Slider?</label>
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
        $(function ($) {
            CKEDITOR.replace( 'description', {height: 500});
        })(jQuery)
        $(function ($) {
            $('#event_start_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
            $('#event_end_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
        })(jQuery)

    </script>
@endpush

