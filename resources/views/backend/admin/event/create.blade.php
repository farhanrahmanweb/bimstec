@extends('layouts.backend.app')
@section('title', 'Create Event')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create New Event</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.event.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Event Title</label>
                                <input type="text" name="event_title" value="{{old('event_title')}}" placeholder="Event title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event Description</label>
                                <textarea name="event_description" id="editor" cols="30" rows="20" placeholder="Event Description" class="form-control">{{old('event_description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event Start Date</label>
                                <input  id="event_start_date" name="event_start_date" value="{{old('event_start_date')}}" placeholder="Event Start Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event End Date</label>
                                <input  id="event_end_date" name="event_end_date" value="{{old('event_end_date')}}" placeholder="Event End Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event Location</label>
                                <input type="text" name="event_location" value="{{old('event_location')}}" placeholder="Event Location" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Event Image</label>
                                <input type="file" name="image[]"  placeholder="Event Image" class="form-control" multiple>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input id="customCheck1" type="checkbox" name="is_publish" class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Publish Event?</label>
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
            CKEDITOR.replace( 'event_description');
            $('#event_start_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
            $('#event_end_date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });

        })(jQuery)

    </script>
    @endpush
