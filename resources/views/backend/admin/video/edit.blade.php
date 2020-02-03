@extends('layouts.backend.app')
@section('title', 'Update Video')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Video</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.video.update', $video->id)}}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Video Title</label>
                                <input type="text" name="title" value="{{$video->title}}" placeholder="Video title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Video URL (Youtube)</label>
                                <input type="text" name="video_url" value="https://www.youtube.com/watch?v={{$video->video_url}}" placeholder="Video Url" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input" @if($video->is_publish==1) checked @endif>
                                    <label for="customCheck1" class="custom-control-label">Publish Video?</label>
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

