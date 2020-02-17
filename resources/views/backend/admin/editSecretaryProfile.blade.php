@extends('layouts.backend.app')
@section('title', 'Edit Secretary General Profile')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Edit Secretary General Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.secretaryProfile.update', 1)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group" >
                                <label class="form-control-label">Content</label>
                                <textarea name="secretary_content"   cols="40" rows="30" placeholder="Content" class="form-control">{{$secretary->content}}</textarea>
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
            CKEDITOR.replace( 'secretary_content', {height: 500});
        })(jQuery)

    </script>
@endpush

