@extends("layouts.app")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                <h4>User Login</h4><br>
                <form action="{{ route('user.check') }}" method="post" autocomplete="off">
                @if (Session::get('fails'))
                <div class="alert alert-danger">
                    {{ Session::get('fails') }}
                </div>
                @endif
                @if (Session::get('info'))
                <div class="alert alert-info">
                    {{ Session::get('info') }}
                </div>
                @endif
                @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="{{ Session::get('verifiedEmail') ? Session::get('verifiedEmail') : old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <br>
                    <a href="{{ route('user.register') }}"> Create An Account </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection