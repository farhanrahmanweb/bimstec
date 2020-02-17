@extends('layouts.backend.editor.app')
@section('title', 'Update Profile')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Update Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('editor.profile.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" name="user_name" value="{{$user->name}}" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" name="user_email" value="{{$user->email}}" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Profile Image</label>
                                <input type="file" name="image" placeholder="Profile Image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="user_password" placeholder="Password" class="form-control">
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



