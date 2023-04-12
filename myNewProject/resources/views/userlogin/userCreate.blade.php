@extends('layout')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Sign In A New Account</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('user.login') }}" class="btn btn-primary float-end"><i
                            class="fa-solid fa-right-to-bracket"></i> Login</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('user.add') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name="name" class="form-control" autocomplete="off"
                                    placeholder="Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Date Of Birth</strong>
                                <input type="date" name="dateofbirth" class="form-control" autocomplete="off"
                                    placeholder="Date Of Birth">
                                @error('dateofbirth')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="email" class="form-control" autocomplete="off"
                                    placeholder="Email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <strong>Password</strong>
                                <input type="text" name="password" class="form-control" autocomplete="off"
                                    placeholder="Password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <div>
                            <button type="submit" class="btn btn-success mt-2"><i class="fa-solid fa-plus"></i>
                                Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
