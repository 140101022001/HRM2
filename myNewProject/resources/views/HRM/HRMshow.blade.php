@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3></h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('HRM.index') }}" class="btn btn-primary float-end">Home</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <strong style="font-size: 20px">Name:</strong>
                    <pre style="display: inline; font-size: 20px;" class="text-capitalize">  {{ $hrm->name }}</pre>
                </div><br>
                <div>
                    <strong style="font-size: 20px">氏名（カタカナ）: </strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->name_kana }}</pre>
                </div>
            </div>
        </div>
    </div>
@endsection
