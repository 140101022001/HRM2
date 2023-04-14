<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('chosen/chosen.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="content">
        <h1>新規登録/編集画面</h1>
    </div>
    <form action="{{ route('HRM.update', $hrm->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <strong>氏名</strong>
            <input type="text" name="name" value="{{ $hrm->name }}" autocomplete="off" placeholder="">
        </div><br>
        <div>
            <strong>氏名 (カタカナ)</strong>
            <input type="text" name="name_kana" value="{{ $hrm->name_kana }}" autocomplete="off" placeholder="">
        </div><br>
        <div>
            <strong>性別</strong><br>
            <input type="radio" name="sex" id="option1" value="0"
                @if ($hrm->sex === 0) checked @endif>
            <label for="option1">
                男
            </label>
            <input type="radio" name="sex" id="option2" value="1"
                @if ($hrm->sex === 1) checked @endif>
            <label for="option2">
                女
            </label>
            <input type="radio" name="sex" id="option3" value="2"
                @if ($hrm->sex === 2) checked @endif>
            <label for="option3">
                不明
            </label>
        </div><br>
        <div>
            <strong>生年月日</strong>
            <input type="date" name="birthday" value="{{ $hrm->birthday }}" max="{{ date('Y-m-d') }}">
        </div><br>
        <div>
            <strong>年齢</strong>
            <input type="number" name="age" value="{{ $hrm->age }}" autocomplete="off" min="1"
                max="100">
        </div><br>
        <div>
            <strong>出身国</strong>
            <select name="country">
                <option value="日本" @if ($hrm->country == '日本') selected @endif>日本</option>
                <option value="アメリカ" @if ($hrm->country == 'アメリカ') selected @endif>アメリカ</option>
                <option value="ロシア" @if ($hrm->country == 'ロシア') selected @endif>ロシア</option>
                <option value="ウズベキスタン" @if ($hrm->country == 'ウズベキスタン') selected @endif>ウズベキスタン</option>
                <option value="バングラデシュ" @if ($hrm->country == 'バングラデシュ') selected @endif>バングラデシュ</option>
                <option value="ベトナム" @if ($hrm->country == 'ベトナム') selected @endif>ベトナム</option>
                <option value="イギリス" @if ($hrm->country == 'イギリス') selected @endif>イギリス</option>
                <option value="フランス" @if ($hrm->country == 'フランス') selected @endif>フランス</option>
                <option value="ドイツ" @if ($hrm->country == 'ドイツ') selected @endif>ドイツ</option>
            </select>
        </div><br>
        <h3>1次面接</h3><br>
        <div>
            <strong>実施日</strong>
            <input type="date" name="first_interv_date" value="{{ $hrm->first_interv_date }}"
                max="{{ date('Y-m-d') }}">
        </div><br>
        <div>
            <strong>対応者名</strong>
            <select name="first_interv_staff">
                <option value="成田" @if ($hrm->first_interv_staff == '成田') selected @endif>成田</option>
                <option value="西田" @if ($hrm->first_interv_staff == '西田') selected @endif>西田</option>
                <option value="新島" @if ($hrm->first_interv_staff == '新島') selected @endif>新島</option>
            </select>
        </div><br>
        <div>
            <strong>合否</strong><br>
            <input type="radio" name="first_interv_result" id="option1" value="0"
                @if ($hrm->first_interv_result === 0) checked @endif>
            <label for="option1">
                合格
            </label>
            <input type="radio" name="first_interv_result" id="option2" value="1"
                @if ($hrm->first_interv_result === 1) checked @endif>
            <label class="form-check-label" for="option2">
                不合格
            </label>
            <input type="radio" name="first_interv_result" id="option3" value="2"
                @if ($hrm->first_interv_result === 2) checked @endif>
            <label for="option3">
                未定
            </label>
        </div><br>
        <h3>2次面接</h3><br>
        <div>
            <strong>実施日</strong>
            <input type="date" name="sec_interv_date" value="{{ $hrm->sec_interv_date }}"
                max="{{ date('Y-m-d') }}">
        </div><br>
        <div>
            <strong>対応者名</strong>
            <select name="sec_interv_staff">
                <option value="成田" @if ($hrm->sec_interv_staff == '成田') selected @endif>成田</option>
                <option value="西田" @if ($hrm->sec_interv_staff == '西田') selected @endif>西田</option>
                <option value="新島" @if ($hrm->sec_interv_staff == '新島') selected @endif>新島</option>
            </select>
        </div><br>
        <div>
            <strong>合否</strong><br>
            <input type="radio" name="sec_interv_result"id="option1" value="0"
                @if ($hrm->sec_interv_result === 0) checked @endif>
            <label for="option1">
                合格
            </label>
            <input type="radio" name="sec_interv_result" id="option2" value="1"
                @if ($hrm->sec_interv_result === 1) checked @endif>
            <label for="option2">
                不合格
            </label>
            <input type="radio" name="sec_interv_result" id="option3" value="2"
                @if ($hrm->sec_interv_result === 2) checked @endif>
            <label for="option3">
                未定
            </label>
        </div><br>
        <h3>インターン</h3><br>
        <div>
            <strong>入職日</strong>
            <input type="date" name="hire_date" value="{{ $hrm->hire_date }}" max="{{ date('Y-m-d') }}">
        </div><br>
        <div>
            <strong>対応部署名</strong>
            <select name="intern_department">
                <option>インターン対応部署</option>
                <option value="SE" @if ($hrm->intern_department == 'SE') selected @endif>SE</option>
                <option value="経営" @if ($hrm->intern_department == '経営') selected @endif>経営</option>
            </select>
        </div><br>
        <div>
            <strong>合否</strong><br>
            <input type="radio" name="intern_result" id="option1" value="0"
                @if ($hrm->intern_result === 0) checked @endif>
            <label for="option1">
                合格
            </label>
            <input type="radio" name="intern_result" id="option2" value="1"
                @if ($hrm->intern_result === 1) checked @endif>
            <label for="option2">
                不合格
            </label>
            <input type="radio" name="intern_result" id="option3" value="2"
                @if ($hrm->intern_result === 2) checked @endif>
            <label for="option3">
                未定
            </label>
        </div><br>
        <div>
            <strong>電話番号</strong>
            <input type="text" name="phone" value="{{ $hrm->phone }}" autocomplete="off" placeholder="">
        </div><br>
        <div class="fom-group">
            <strong>メールアドレス</strong>
            <input type="text" name="email" value="{{ $hrm->email }}" autocomplete="off" placeholder="">
        </div><br>
        <div>
            <strong>日本語(JLPT)スキル</strong>
            <select name="skill_jlpt">
                <option></option>
                <option value="1" @if ($hrm->skill_jlpt === 1) selected @endif>N1</option>
                <option value="2" @if ($hrm->skill_jlpt === 2) selected @endif>N2</option>
                <option value="3" @if ($hrm->skill_jlpt === 3) selected @endif>N3</option>
                <option value="4" @if ($hrm->skill_jlpt === 4) selected @endif>N4</option>
                <option value="5" @if ($hrm->skill_jlpt === 5) selected @endif>N5</option>
            </select>
        </div><br>
        <div>
            <strong>ヒアリングスキル</strong>
            <select name="skill_hearing">
                <option></option>
                <option value="1" @if ($hrm->skill_hearing === 1) selected @endif>N1</option>
                <option value="2" @if ($hrm->skill_hearing === 2) selected @endif>N2</option>
                <option value="3" @if ($hrm->skill_hearing === 3) selected @endif>N3</option>
                <option value="4" @if ($hrm->skill_hearing === 4) selected @endif>N4</option>
                <option value="5" @if ($hrm->skill_hearing === 5) selected @endif>N5</option>
            </select>
        </div><br>
        <div>
            <strong>スピーキングスキル</strong>
            <select name="skill_speaking">
                <option></option>
                <option value="1" @if ($hrm->skill_speaking === 1) selected @endif>N1</option>
                <option value="2" @if ($hrm->skill_speaking === 2) selected @endif>N2</option>
                <option value="3" @if ($hrm->skill_speaking === 3) selected @endif>N3</option>
                <option value="4" @if ($hrm->skill_speaking === 4) selected @endif>N4</option>
                <option value="5" @if ($hrm->skill_speaking === 5) selected @endif>N5</option>
            </select>
        </div><br>
        <div>
            <strong>リーディングスキル</strong>
            <select name="skill_reading">
                <option selected></option>
                <option value="1" @if ($hrm->skill_reading === 1) selected @endif>N1</option>
                <option value="2" @if ($hrm->skill_reading === 2) selected @endif>N2</option>
                <option value="3" @if ($hrm->skill_reading === 3) selected @endif>N3</option>
                <option value="4" @if ($hrm->skill_reading === 4) selected @endif>N4</option>
                <option value="5" @if ($hrm->skill_reading === 5) selected @endif>N5</option>
            </select>
        </div><br>
        <div>
            <strong>SEスキル</strong>
            <select class="skill_se" name="skill_se[]" multiple>
                @foreach ($skills as $skill)
                <option value="{{$skill->name}}" {{ in_array($skill->name , $hrm->skill_se) ? 'selected' : '' }}>{{$skill->name}}</option>
                @endforeach
            </select><br><br>
        </div><br>
        <strong>学歴</strong><br>
        <div>
            <input type="checkbox" name="graduate_4" value="1"
                {{ old('graduate_4', $hrm->graduate_4) == 1 ? 'checked' : '' }}>
            <label>4大</label>
        </div>
        <div>
            <input type="checkbox" name="graduate_2" value="1"
                {{ old('graduate_2', $hrm->graduate_2) == 1 ? 'checked' : '' }}>
            <label>専門</label>
        </div><br>
        <div>
            <strong>最終学歴</strong>
            <input type="text" name="graduate_school" value="{{ $hrm->graduate_school }}" autocomplete="off"
                placeholder="">
        </div><br>
        <div>
            <strong>応募職種</strong>
            <select name="apply_department">
                <option value="SE" @if ($hrm->apply_department == 'SE') selected @endif>SE</option>
                <option value="営業" @if ($hrm->apply_department == '営業') selected @endif>営業</option>
            </select>
        </div><br>
        <div>
            <strong>希望勤務地</strong>
            <select name="working_place">
                <option value="東京" @if ($hrm->working_place == '東京') selected @endif>東京</option>
                <option value="大阪" @if ($hrm->working_place == '大阪') selected @endif>大阪</option>
                <option value="名古屋" @if ($hrm->working_place == '名古屋') selected @endif>名古屋</option>
                <option value="埼玉" @if ($hrm->working_place == '埼玉') selected @endif>埼玉</option>
                <option value="神戸" @if ($hrm->working_place == '神戸') selected @endif>神戸</option>
                <option value="札幌" @if ($hrm->working_place == '札幌') selected @endif>札幌</option>
            </select>
        </div><br>
        <div>
            <strong>現在の状況</strong>
            <input type="text" name="current_status" value="{{ $hrm->current_status }}" autocomplete="off">
        </div><br>
        <div>
            <strong>自由項目</strong><br>
            <textarea class="input-field" name="note" autocomplete="off" style="border-radius: 10px;">{{ $hrm->note }}</textarea>
        </div><br>
        <div>
        </div><br>
        <a href="{{ route('HRM.index') }}" class="button">キャンセル</a>
        <button type="submit" onclick="return confirm('更新してもよろしいですか？')">更新</button>
    </form>
    <script src="{{ asset('chosen/jquery.min.js') }}"></script>
    <script src="{{ asset('chosen/chosen.jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.skill_se').chosen();
        });
    </script>
</body>

</html>
