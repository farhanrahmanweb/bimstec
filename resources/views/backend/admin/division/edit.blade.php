@extends('layouts.backend.app')
@section('title', 'Update Division')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Division</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.division.update', $division->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Division Title</label>
                                <input type="text" name="division_title" value="{{$division->title}}" placeholder="Division title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Division Description</label>
                                <textarea name="division_description"  cols="30" rows="5" placeholder="Division Description" class="form-control">{{$division->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Division Sectors and Activities</label>
                                <textarea name="division_sectors_activities"  cols="30" rows="5" placeholder="Division Sectors and Activities" class="form-control">{{$division->sectors_activities}}</textarea>
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary">Update</button>
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
            CKEDITOR.replace( 'division_description');
            CKEDITOR.replace( 'division_sectors_activities');
        })(jQuery)

    </script>
@endpush

