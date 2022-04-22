@extends("layouts.app")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Home</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top:45px;">
            <h4>Admin Dashboard</h4><hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">{{ Auth::guard('admin')->user()->name }}</td>
                        <td>{{ Auth::guard('admin')->user()->email }}</td>
                        <td>{{ Auth::guard('admin')->user()->phone }}</td>
                        <td>
                            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form action="{{ route('admin.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                        </td>
                        <td>
                        <a href="{{ route('admin.profile') }}">View Profile</a>
                        <form action="{{ route('admin.profile') }}" id="view_profile">@csrf</form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection