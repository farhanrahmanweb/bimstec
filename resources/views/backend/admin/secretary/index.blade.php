@extends('layouts.backend.app')

@section('title', 'Secretary')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">Secretary</h6>
                        <a href="{{route('admin.secretary.create')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add Statement/Page</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($secretarys as $key=>$secretary)
                                <tr>
                                    <th scope="row">{{$key +1}}</th>
                                    <td>{{$secretary->title}}</td>
                                    <td>{{\Carbon\Carbon::parse($secretary->date, 'UTC')->isoFormat('Do MMMM YYYY')}}</td>
                                    <td>{{$secretary->type}}</td>
                                    <td>
                                        @if($secretary->is_publish==1)
                                            <span class="badge badge-success">Publish</span>
                                        @else
                                            <span class="badge badge-secondary">Unpublish</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.secretary.edit', $secretary->id)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteItem({{$secretary->id}})"><i class="fas fa-trash"></i></a>
                                        <form id="delete-form-{{$secretary->id}}" action="{{route('admin.secretary.destroy', $secretary->id)}}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right mt-5 mr-3">
                            {{ $secretarys->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function deleteItem(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this Item",
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

