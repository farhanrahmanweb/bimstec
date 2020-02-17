@extends('layouts.backend.app')
@section('title', 'Update Director')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Director</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.director.update', $director->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" name="director_name" value="{{$director->name}}" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Designation</label>
                                <input type="text" name="director_designation" value="{{$director->designation}}" placeholder="Designation" class="form-control">
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
                                <textarea name="director_contact"  cols="30" rows="5" placeholder="Contact Information" class="form-control">{{$director->contact}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">About Director</label>
                                <textarea name="director_about"  cols="30" rows="5" placeholder="About Director" class="form-control">{{$director->about}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Photo</label>
                                <input type="file" name="director_image"  placeholder="Photo" class="form-control">
                                <img src="{{asset('storage/director/'. $director->image)}}" class="img-thumbnail" width="200" alt="">
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
            CKEDITOR.replace( 'director_about');
            CKEDITOR.replace( 'director_contact');
        })(jQuery)

    </script>
@endpush

