@extends('layouts.backend.app')

@section('title', 'Subcategory List')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">Subcategory List</h6>
                        <a href="{{route('admin.subcategory.create')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add Subcategory</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>SubCategory</th>
                                    <th>Parent Category</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategorys as $key=>$subcategory)
                                @if(is_null($subcategory->category)}
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$subcategory->name}}</td>
                                    <td>{{$subcategory->category['name']}}</td>
                                    <td>
                                        <a href="{{route('admin.subcategory.edit', $subcategory->id)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteSubcategory({{$subcategory->id}})"><i class="fas fa-trash"></i></a>
                                        <form id="delete-form-{{$subcategory->id}}" action="{{route('admin.subcategory.destroy', $subcategory->id)}}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        <div class="float-right mt-5 mr-3">
                            {{ $subcategorys->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function deleteSubcategory(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this Subcategory",
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
