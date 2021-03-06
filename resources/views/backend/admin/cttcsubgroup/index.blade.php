@extends('layouts.backend.app')

@section('title', 'Counter-Terrorism and Transnational Crime')

@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header clearfix">
                        <h6 class="text-uppercase mb-0 float-left">Counter-Terrorism and Transnational Crime Subgroups</h6>
                        <a href="{{route('admin.cttcSubgroup.create')}}" class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add New Subgroup</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover card-text">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Title</th>
                                    <th>Parent Group</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cttc_subgroups as $key=>$cttc)
                                @if(!is_null($cttc->cttc_page))
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$cttc->title}}</td>
                                    <td>{{$cttc->cttc_page['title']}}</td>
                                    <td>
                                        <a href="{{route('admin.cttcSubgroup.edit', $cttc->id)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteCttc({{$cttc->id}})"><i class="fas fa-trash"></i></a>
                                        <form id="delete-form-{{$cttc->id}}" action="{{route('admin.cttcSubgroup.destroy', $cttc->id)}}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endif
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
        function deleteCttc(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "To Delete this tab",
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
