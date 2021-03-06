@extends('layouts.backend.app')
@section('title', 'Counter-Terrorism and Transnational Crime')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Group</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.cttcPage.update', $cttc->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Group Title</label>
                                <input type="text" name="title" value="{{$cttc->title}}" placeholder="Group Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Group Content</label>
                                <textarea name="content"  cols="30" rows="5" placeholder="Group Content" class="form-control">{{$cttc->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Upload PDF</label>
                                <input type="file" name="file" class="form-control" accept="application/pdf">
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
            CKEDITOR.replace( 'content');
        })(jQuery)

    </script>
@endpush

