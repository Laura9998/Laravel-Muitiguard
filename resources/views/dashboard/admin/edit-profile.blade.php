@extends('layouts.app')
@section('content')
 <div class="container">
    <form action="{{ route('admin.pfupdate') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ Auth::guard('admin')->user()->name }}">
            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" name="age" class="form-control" value="{{ Auth::guard('admin')->user()->age }}">
        </div>
        <div class="form-group">
            <label>Position</label>
            <input type="text" name="position" class="form-control" value="{{ Auth::guard('admin')->user()->position }}">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{ Auth::guard('admin')->user()->address }}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ Auth::guard('admin')->user()->phone}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ Auth::guard('admin')->user()->email }}">
            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" value=""></textarea>
        </div>
        <div class="form-group">
        <input type="file" name="image" class="form-control" value=""><br>
        <span class="text-danger">@error('image'){{ $message }} @enderror</span>
        </div>
    <input type="submit" value="Update Profile" class="btn btn-primary">
 </form>
 </div>
@endsection
