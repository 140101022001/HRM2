@extends('layout')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3>Add Car</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('user.logout') }}" class="btn btn-primary float-end">Logout</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div style="text-align: center;">
            <form action="{{ route('car.add') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Car Name</strong>
                            <input type="text" name="Name" class="form-control" placeholder="Name">
                            @error('Name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Car Code</strong>
                            <input type="text" name="carCode" class="form-control" placeholder="Code">
                            @error('carCode')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Price</strong>
                            <input type="text" name="Price" class="form-control" placeholder="Price">
                            @error('Price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Quantity</strong>
                            <input type="text" name="Quantity" class="form-control" placeholder="Quantity">
                            @error('Quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Send</button>
            </form>
        </div>
    </div>
</div>
<div style="text-align: center;">
    @foreach ($car as $c)
        <p>________________________________________</p>
        <p>ID: {{ $c->id }}</p>
        <p>Name: {{ $c->Name }}</p>
        <p>Car Code: {{ $c->carCode }}</p>
        <p>Price: {{ $c->Price }}</p>
        <p>Quantity: {{ $c->Quantity }}</p>
        <p>
        <form action="{{ route('car.delete', $c->id) }}" method="Post">
            <a href="{{ route('car.edit', $c) }}" class="btn btn-primary">Update</a>
            @csrf
            @method('DELETE')
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </p>
    @endforeach
</div>
<div style="text-align: center;">
{{ $car->links() }}
</div>
