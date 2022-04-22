@extends("layouts.app")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Profile</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <figure class="avatar avatar-lg m-b-20">
                            <!-- <img src="{{ asset('images/business-women.png') }}" class="rounded-circle" style="width:100px;" alt="..."> -->
                            <img src="{{ asset('uploads/profile/'.Auth::guard('admin')->user()->image) }}" class="rounded-circle" style="width:100px;" alt="...">
                        </figure>
                        <h5 class="mb-1">{{ Auth::guard('admin')->user()->name }}</h5>
                        <p class="text-muted small">{{ Auth::guard('admin')->user()->position }}</p>
                        <p>{{ Auth::guard('admin')->user()->description }}</p>
                        <a href="{{ route('admin.edit-profile') }}" class="btn btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Edit Profile
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title d-flex justify-content-between align-items-center">
                            Information
                            <!-- <a href="#" class="btn btn-outline-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Edit Profile
                        </a> -->
                        </h6>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Name:</div>
                            <div class="col-6">{{ Auth::guard('admin')->user()->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Age:</div>
                            <div class="col-6">{{ Auth::guard('admin')->user()->age }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Position:</div>
                            <div class="col-6">{{ Auth::guard('admin')->user()->position }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Address:</div>
                            <div class="col-6">{{ Auth::guard('admin')->user()->address }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Phone:</div>
                            <div class="col-6">{{ Auth::guard('admin')->user()->phone }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-muted">Email:</div>
                            <div class="col-6">{{ Auth::guard('admin')->user()->email }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection


