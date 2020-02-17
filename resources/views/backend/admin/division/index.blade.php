@extends('layouts.backend.app')

@section('title', 'Divisions')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">Division List</h6>
                        <a href="{{route('admin.division.create')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add New Division</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($divisions as $key=>$division)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$division->title}}</td>
                                    <td>{{$division->description}}</td>
                                    <td>
                                        <a href="{{route('admin.division.edit', $division->id)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteDivision({{$division->id}})"><i class="fas fa-trash"></i></a>
                                        <form id="delete-form-{{$division->id}}" action="{{route('admin.division.destroy', $division->id)}}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function deleteDivision(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this division",
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
