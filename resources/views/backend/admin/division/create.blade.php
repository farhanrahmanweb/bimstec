@extends('layouts.backend.app')
@section('title', 'Create Division')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create New Division</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.division.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Division Title</label>
                                <input type="text" name="division_title"  placeholder="Division title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Division Description</label>
                                <textarea name="division_description" cols="30" rows="10" placeholder="Division Description" class="form-control" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Division Sectors and Activities</label>
                                <textarea name="division_sectors_activities" id="editor" cols="30" rows="20" placeholder="Division Sectors and Activities" class="form-control" ></textarea>
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary">Save</button>
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
            CKEDITOR.replace( 'division_sectors_activities');
        })(jQuery)

    </script>
@endpush
