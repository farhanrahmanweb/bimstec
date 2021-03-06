@extends('layouts.backend.app')
@section('title', 'Counter-Terrorism and Transnational Crime')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create New Group</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.cttcPage.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Group Title</label>
                                <input type="text" name="title"  placeholder="Group Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Group Content</label>
                                <textarea name="content" cols="30" rows="20" placeholder="Group Content" class="form-control" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Upload PDF</label>
                                <input type="file" name="file" class="form-control" accept="application/pdf">
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
            CKEDITOR.replace( 'content');
        })(jQuery)

    </script>
@endpush
