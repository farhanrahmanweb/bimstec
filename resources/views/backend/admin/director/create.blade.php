@extends('layouts.backend.app')
@section('title', 'Create Director')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create New Director</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.director.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" name="director_name"  placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Designation</label>
                                <input type="text" name="director_designation"  placeholder="Designation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Division</label>
                                <select name="division_id" class="form-control">
                                    <option value="">--Select Division--</option>
                                    @foreach($divisions as $key=>$division)
                                        <option value="{{$division->id}}">{{$division->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Contact Information</label>
                                <textarea name="director_contact" cols="30" rows="20" placeholder="Contact Information" class="form-control" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">About Director</label>
                                <textarea name="director_about" id="editor" cols="30" rows="20" placeholder="About Director" class="form-control" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Photo</label>
                                <input type="file" name="director_image"  placeholder="Photo" class="form-control">
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
            CKEDITOR.replace( 'director_contact');
            CKEDITOR.replace( 'director_about');
        })(jQuery)

    </script>
@endpush
