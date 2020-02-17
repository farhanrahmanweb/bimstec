@extends('layouts.backend.app')
@section('title', 'Change Password')
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Change Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="changePassword" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Old Password</label>
                                <input type="password" name="user_old_password" placeholder="Old Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">New Password</label>
                                <input type="password" name="user_new_password" placeholder="New Password" class="form-control">
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



