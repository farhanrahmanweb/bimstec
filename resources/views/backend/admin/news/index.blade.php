@extends('layouts.backend.app')

@section('title', 'News')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">News List</h6>
                        <a href="{{route('admin.news.create')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add News</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Image</th>
                                    <th>News Title</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($newses as $key=>$news)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>
                                        <img src="{{asset('storage/news/'. $news->image)}}" width="150" alt="">
                                    </td>
                                    <td>{{$news->title}}</td>
                                    <td>{{\Carbon\Carbon::parse($news->news_date, 'UTC')->isoFormat('Do MMMM YYYY')}}</td>
                                    <td>{{$news->type}}</td>
                                    <td>
                                        @if($news->is_publish==1)
                                                <span class="badge badge-success">Publish</span>
                                        @else
                                            <span class="badge badge-secondary">Unpublish</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.news.edit', $news->id)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteNews({{$news->id}})"><i class="fas fa-trash"></i></a>
                                        <form id="delete-form-{{$news->id}}" action="{{route('admin.news.destroy', $news->id)}}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="float-right mt-5 mr-3">
                            {{ $newses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function deleteNews(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this News",
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
