@extends('layouts.backend.app')

@section('title', 'Videos')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">Video List</h6>
                        <a href="{{route('admin.video.create')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add New Video</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Video</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $key=>$video)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <th>
                                        <img src="//img.youtube.com/vi/{{$video->video_url}}/default.jpg" alt="">
                                    </th>
                                    <td>{{$video->title}}</td>
                                    <td>
                                        @if($video->is_publish==1)
                                            <span class="badge badge-success">Publish</span>
                                        @else
                                            <span class="badge badge-secondary">Unpublish</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.video.edit', $video->id)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteVideo({{$video->id}})"><i class="fas fa-trash"></i></a>
                                        <form id="delete-form-{{$video->id}}" action="{{route('admin.video.destroy', $video->id)}}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="float-right mt-5 mr-3">
                            {{ $videos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function deleteVideo(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this Video",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                }
            })
        }
    </script>
    @endpush
