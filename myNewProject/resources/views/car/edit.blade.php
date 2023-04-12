@extends('layout')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <div class="col-md-6">
                    <h2>Update Student</h2>
                </div>
                <div class="col-md-6">
                    <a href="{{route('car.index')}}" class="btn btn-primary float-end">Car List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('car.update', $car)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="Name" class="form-control" value="{{$car->Name}}" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="carCode" class="form-control" value="{{$car->carCode}}" placeholder="Car Code">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="Price" class="form-control" value="{{$car->Price}}" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <input type="text" name="Quantity" class="form-control" value="{{$car->Quantity}}" placeholder="Quantity">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
