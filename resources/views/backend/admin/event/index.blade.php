@extends('layouts.backend.app')

@section('title', 'Events')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">Event List</h6>
                        <a href="{{route('admin.event.create')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add Event</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Image</th>
                                <th>Event Title</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $key=>$event)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>
                                        @if(count($event->photos)>0)
                                        <img src="{{asset('storage/event/thumbnail/'. $event->photos[0]->image)}}" width="150" alt="">
                                        @endif
                                    </td>
                                    <td>{{$event->event_title}}</td>
                                    <td>{{\Carbon\Carbon::parse($event->event_start_date, 'UTC')->isoFormat('Do MMMM YYYY')}}</td>
                                    <td>
                                        @if($event->is_publish==1)
                                            <span class="badge badge-success">Publish</span>
                                        @else
                                            <span class="badge badge-secondary">Unpublish</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.event.edit', $event->id)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteEvent({{$event->id}})"><i class="fas fa-trash"></i></a>
                                        <form id="delete-form-{{$event->id}}" action="{{route('admin.event.destroy', $event->id)}}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="float-right mt-5 mr-3">
                            {{ $events->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function deleteEvent(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this Event",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>
@endpush
