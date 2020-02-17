@extends('layouts.backend.app')
@section('title', 'Counter-Terrorism and Transnational Crime')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Tab</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.cttcPage.update', $cttc->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Tab Title</label>
                                <input type="text" name="title" value="{{$cttc->title}}" placeholder="Tab Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Tab Content</label>
                                <textarea name="content"  cols="30" rows="5" placeholder="Tab Content" class="form-control">{{$cttc->content}}</textarea>
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

