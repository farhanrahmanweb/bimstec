@extends('layouts.backend.app')
@section('title', 'Create User Profile')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Create User Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.profile.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">User Role</label>
                                <select name="user_role" class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Editor</option>
                                    <option value="3">Member</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" name="user_name" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" name="user_email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Profile Image</label>
                                <input type="file" name="user_image" placeholder="Profile Image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" name="user_password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



