@extends('layouts.backend.app')
@section('title', 'Update News')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update News/Press</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.news.update', $news->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Title</label>
                                <input type="text" name="title" value="{{$news->title}}" placeholder="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <textarea name="description" id="editor" cols="30" rows="20" placeholder="News Description" class="form-control">{{$news->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">News Date</label>
                                <input  id="news_date" name="news_date" value="{{$news->news_date}}" placeholder="News Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Type</label>
                                <select class="form-control" name="type">
                                    <option value="">--Select Type--</option>
                                    <option value="news" @if($news->type=="news") selected @endif>News</option>
                                    <option value="press" @if($news->type=="press") selected @endif>Press</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">News Link</label>
                                <input  id="news_link" name="news_link" value="{{$news->news_link}}" placeholder="News link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">News Image</label>
                                <input type="file" name="image" class="form-control"> <br>
                                <img src="{{asset('storage/news/'.$news->image)}}" width="150" alt="">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input" @if($news->is_publish==1) checked @endif>
                                    <label for="customCheck1" class="custom-control-label">Publish News?</label>
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
            CKEDITOR.replace( 'editor');
            $('#news_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });

        })(jQuery)

    </script>
@endpush
