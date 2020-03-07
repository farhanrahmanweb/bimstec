@extends('layouts.backend.app')

@section('title', 'Documents')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">Document List</h6>
                        <a href="{{route('admin.document.create')}}" class="btn btn-primary float-right"> <i
                                class="fas fa-plus"></i> Add Document</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($documents as $key=>$document)
                                @if(!is_null($document->category))
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>{{$document->title}}</td>
                                        <td>{{\Carbon\Carbon::parse($document->document_date, 'UTC')->isoFormat('Do MMMM YYYY')}}</td>
                                        <td>{{$document->category['name']}}</td>
                                        @if(!is_null($document->subcategory))
                                            <td>{{$document->subcategory['name']}}</td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                        <td>
                                            @if($document->is_publish==1)
                                                <span class="badge badge-success">Publish</span>
                                            @else
                                                <span class="badge badge-secondary">Unpublish</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.document.edit', $document->id)}}"
                                               class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                               onclick="deleteDocument({{$document->id}})"><i class="fas fa-trash"></i></a>
                                            <form id="delete-form-{{$document->id}}"
                                                  action="{{route('admin.document.destroy', $document->id)}}"
                                                  method="POST"
                                                  style="display: none">
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
                            {{ $documents->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        function deleteDocument(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this Document",
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

