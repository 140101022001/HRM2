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
                        <a href="{{ route('HRM.index') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <strong style="font-size: 20px">氏名:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->name }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">氏名（カタカナ）:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->name_kana }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">性別:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php
                        if($hrm->sex === 0) {
                                    echo '男';
                                }elseif ($hrm->sex === 1) {
                                    echo '女';
                                }else {
                                    echo '不明';
                                }
                    @endphp</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">生年月日:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->birthday }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">年齢:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->age }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">出身国:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->country }}</pre>
                </div>
                <strong style="font-size: 25px">1次面接</strong>
                <div>
                    <strong style="font-size: 20px">実施日:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->first_interv_date }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">対応者名:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->first_interv_staff }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">合否:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php
                        if($hrm->first_interv_result === 0) {
                                    echo '合格';
                                }elseif ($hrm->first_interv_result === 1) {
                                    echo '不合格';
                                }else {
                                    echo '未定';
                                }
                    @endphp</pre>
                </div>
                <strong style="font-size: 25px">2次面接</strong>
                <div>
                    <strong style="font-size: 20px">実施日:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->sec_interv_date }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">対応者名:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->sec_interv_staff }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">合否:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php
                        if($hrm->sec_interv_result === 0) {
                                    echo '合格';
                                }elseif ($hrm->sec_interv_result === 1) {
                                    echo '不合格';
                                }else {
                                    echo '未定';
                                }
                    @endphp</pre>
                </div>
                <strong style="font-size: 25px">インターン</strong>
                <div>
                    <strong style="font-size: 20px">入職日:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->hire_date }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">対応部署名:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{ $hrm->intern_department }}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">合否:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php
                        if($hrm->intern_result === 0) {
                                    echo '合格';
                                }elseif ($hrm->intern_result === 1) {
                                    echo '不合格';
                                }else {
                                    echo '未定';
                                }
                    @endphp</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">電話番号:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{$hrm->phone}}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">メールアドレス:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{$hrm->email}}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">日本語(JLPT)スキル:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php if($hrm->skill_jlpt == 1) {
                        echo 'N1';
                    }elseif($hrm->skill_jlpt == 2) {
                        echo 'N2';
                    }elseif($hrm->skill_jlpt == 3) {
                        echo 'N3';
                    }elseif($hrm->skill_jlpt == 4) {
                        echo 'N4';
                    }else {
                        echo 'N5';
                    }@endphp</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">ヒアリングスキル:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php if($hrm->skill_hearing == 1) {
                        echo 'N1';
                    }elseif($hrm->skill_hearing == 2) {
                        echo 'N2';
                    }elseif($hrm->skill_hearing == 3) {
                        echo 'N3';
                    }elseif($hrm->skill_hearing == 4) {
                        echo 'N4';
                    }else {
                        echo 'N5';
                    }@endphp</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">スピーキングスキル:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php if($hrm->skill_speaking == 1) {
                        echo 'N1';
                    }elseif($hrm->skill_speaking == 2) {
                        echo 'N2';
                    }elseif($hrm->skill_speaking == 3) {
                        echo 'N3';
                    }elseif($hrm->skill_speaking == 4) {
                        echo 'N4';
                    }else {
                        echo 'N5';
                    }@endphp</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">リーディングスキル:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php if($hrm->skill_reading == 1) {
                        echo 'N1';
                    }elseif($hrm->skill_reading == 2) {
                        echo 'N2';
                    }elseif($hrm->skill_reading == 3) {
                        echo 'N3';
                    }elseif($hrm->skill_reading == 4) {
                        echo 'N4';
                    }else {
                        echo 'N5';
                    }@endphp</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">SEスキル:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{$hrm->skill_se}}</pre>
                </div>
                <strong style="font-size: 25px">学歴</strong><br>
                <div>
                    <strong style="font-size: 20px">4大:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php
                        if($hrm->graduate_4 == 1) {
                            echo'〇';
                        }else {
                            echo '✕';
                        }
                    @endphp</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">専門:</strong>
                    <pre style="display: inline; font-size: 20px;">  @php
                        if($hrm->graduate_2 == 1) {
                            echo'〇';
                        }else {
                            echo '✕';
                        }
                    @endphp</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">最終学歴:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{$hrm->graduate_school}}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">応募職種:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{$hrm->apply_department}}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">希望勤務地:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{$hrm->working_place}}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">現在の状況:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{$hrm->current_status}}</pre>
                </div>
                <div>
                    <strong style="font-size: 20px">自由項目:</strong>
                    <pre style="display: inline; font-size: 20px;">  {{$hrm->note}}</pre>
                </div>
            </div>
        </div>
    </div>
@endsection
