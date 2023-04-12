@extends('layout')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Login</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('user.register') }}" class="btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Register</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('information'))
                    <div class="alert alert-danger">
                        {{ Session::get('information') }}
                    </div>
                @endif
                <form action="{{ route('user.logincheck') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Password</strong>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <div>
                            <button type="submit" class="btn btn-success mt-2"><i
                                class="fa-solid fa-right-to-bracket"></i> Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <a href="{{route('car.index')}}" class="btn btn-primary">Car List</a>
    </div>
@endsection
