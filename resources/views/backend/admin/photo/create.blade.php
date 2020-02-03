@extends('layouts.backend.app')
@section('title', 'Create New Gallery')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create New Gallery</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.gallery.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Gallery Title</label>
                                <input type="text" name="title" value="{{old('title')}}" placeholder="Gallery title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Date</label>
                                <input type="text" name="gallery_date" id="gallery_date" value="{{old('gallery_date')}}" placeholder="Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Image</label>
                                <input type="file" name="image[]" class="form-control" multiple>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Publish Gallery?</label>
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
    <script>
        $('#gallery_date').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
    </script>
@endpush

