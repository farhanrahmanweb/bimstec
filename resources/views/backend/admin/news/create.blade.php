@extends('layouts.backend.app')
@section('title', 'Create Event')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create News/Press</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.news.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Title</label>
                                <input type="text" name="title" value="{{old('title')}}" placeholder="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <textarea name="description" id="editor" cols="30" rows="20" placeholder="News Description" class="form-control">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">News Date</label>
                                <input  id="news_date" name="news_date" value="{{old('news_date')}}" placeholder="News Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Type</label>
                                <select class="form-control" name="type">
                                    <option value="">--Select Type--</option>
                                    <option value="news">News</option>
                                    <option value="press">Press</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">News Link</label>
                                <input  id="news_link" name="news_link" value="{{old('news_link')}}" placeholder="News link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">News Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Publish News?</label>
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
            CKEDITOR.replace( 'editor');
            $('#news_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });

        })(jQuery)

    </script>
    @endpush
