@extends('layouts.backend.app')

@section('title', 'Directors')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">Director List</h6>
                        <a href="{{route('admin.director.create')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add New Director</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Division</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($directors as $key=>$director)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$director->name}}</td>
                                    <td>{{$director->designation}}</td>
                                    <td>{{$director->division->title}}</td>
                                    <td>
                                        <a href="{{route('admin.director.edit', $director->id)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteDirector({{$director->id}})"><i class="fas fa-trash"></i></a>
                                        <form id="delete-form-{{$director->id}}" action="{{route('admin.director.destroy', $director->id)}}" method="POST" style="display: none">
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
        function deleteDirector(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this director",
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
