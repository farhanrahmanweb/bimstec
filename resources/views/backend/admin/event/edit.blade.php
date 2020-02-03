@extends('layouts.backend.app')
@section('title', 'Update Event')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Event</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.event.update', $event->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Event Title</label>
                                <input type="text" name="event_title" value="{{$event->event_title}}" placeholder="Event title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event Description</label>
                                <textarea name="event_description" id="" cols="30" rows="5" placeholder="Event Description" class="form-control">{{$event->event_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event Start Date</label>
                                <input  id="event_start_date" name="event_start_date" value="{{$event->event_start_date}}"  placeholder="Event Start Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event End Date</label>
                                <input  id="event_end_date" name="event_end_date" value="{{$event->event_end_date}}" placeholder="Event End Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event Location</label>
                                <input type="text" name="event_location" value="{{$event->event_location}}" placeholder="Event Location" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event Image</label>
                                <input type="file" name="image[]" placeholder="Event Image" class="form-control"> <br>
                                @foreach($eventphotos as $eventphoto)
                                        <img src="{{asset('storage/event/thumbnail/'. $eventphoto->image)}}" class="img-thumbnail" width="200" alt="">
                                @endforeach
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input" @if($event->is_publish==1) checked @endif>
                                    <label for="customCheck1" class="custom-control-label">Publish Event?</label>
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
            $('#event_start_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
            $('#event_end_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
            CKEDITOR.replace( 'event_description');
        })(jQuery)

    </script>
@endpush

