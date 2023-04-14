@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>HRM List</h3>
                </div>
                {{-- <div class="col-md-4">
                    <a href="{{route('HRM.restore')}}" class="btn btn-primary">Restore</a>
                </div> --}}
                <div class="col-md-6">
                    <a href="{{route('HRM.create')}}" class="btn btn-primary float-end">Add New</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>氏名</th>
                        <th>氏名（カタカナ）</th>
                        <th>性別（男/女）</th>
                        <th>生年月日</th>
                        <th>出身国</th>
                        <th>電話番号</th>
                        <th>メールアドレス</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hrm as $hrm)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$hrm->name}}</td>
                        <td>{{$hrm->name_kana}}</td>
                        <td>
                            @php
                                if($hrm->sex === 0) {
                                    echo '男';
                                }elseif ($hrm->sex === 1) {
                                    echo '女';
                                }else {
                                    echo '不明';
                                }
                            @endphp
                        </td>
                        <td>{{$hrm->birthday}}</td>
                        <td>{{$hrm->country}}</td>
                        <td>{{$hrm->phone}}</td>
                        <td>{{$hrm->email}}</td>
                        <td>
                            <form action="{{route('HRM.destroy', $hrm->id)}}" method="POST">
                                <a href="{{route('HRM.show', $hrm->id)}}" class="btn btn-info">View</a>
                                <a href="{{route('HRM.edit', $hrm->id)}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('削除してもよろしいですか？')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
