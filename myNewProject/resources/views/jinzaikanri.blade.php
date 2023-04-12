@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>新規登録/編集画面</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="fom-group">
                                <strong>氏名</strong>
                                <input type="text" name="name" class="form-control" autocomplete="off" placeholder="">
                            </div><br>
                            <div class="fom-group">
                                <strong>氏名 (カタカナ)</strong>
                                <input type="text" name="nameKatakana" class="form-control" autocomplete="off"
                                    placeholder="">
                            </div><br>
                            <div class="fom-check">
                                <strong>性別</strong><br>
                                <input type="radio" name="gender" class="form-check-input" id="option1" value="男">
                                <label class="form-check-label" for="option1">
                                    男
                                </label>
                                <input type="radio" name="gender" class="form-check-input" id="option2" value="女">
                                <label class="form-check-label" for="option2">
                                    女
                                </label>
                                <input type="radio" name="gender" class="form-check-input" id="option3" value="不明">
                                <label class="form-check-label" for="option3">
                                    不明
                                </label>
                            </div><br>
                            <div class="fom-group">
                                <strong>生年月日</strong>
                                <input type="date" name="dateofbirth" class="form-control" max="{{ date('Y-m-d') }}">
                            </div><br>
                            <div class="fom-group">
                                <strong>年齢</strong>
                                <input type="number" name="age" class="form-control" autocomplete="off" min="1"
                                    max="100">
                            </div><br>
                            <div class="form-group">
                                <strong>出身国</strong>
                                <select name="national" class="form-control">
                                    <option selected>日本</option>
                                    <option value="アメリカ">アメリカ</option>
                                    <option value="ロシア">ロシア</option>
                                    <option value="ウズベキスタン">ウズベキスタン</option>
                                    <option value="バングラデシュ">バングラデシュ</option>
                                    <option value="ベトナム">ベトナム</option>
                                    <option value="イギリス">イギリス</option>
                                    <option value="フランス">フランス</option>
                                    <option value="ドイツ">ドイツ</option>
                                </select>
                            </div><br>
                            <h3>1次面接</h3><br>
                            <div class="fom-group">
                                <strong>実施日</strong>
                                <input type="date" name="interviewday1" class="form-control" max="{{ date('Y-m-d') }}">
                            </div><br>
                            <div class="form-group">
                                <strong>対応者名</strong>
                                <select name="interviewer1" class="form-control">
                                    <option selected>成田</option>
                                    <option value="西田">西田</option>
                                    <option value="新島">新島</option>
                                </select>
                            </div><br>
                            <div class="fom-check">
                                <strong>合否</strong><br>
                                <input type="radio" name="result1" class="form-check-input" id="option1" value="合格">
                                <label class="form-check-label" for="option1">
                                    合格
                                </label>
                                <input type="radio" name="result1" class="form-check-input" id="option2" value="不合格">
                                <label class="form-check-label" for="option2">
                                    不合格
                                </label>
                                <input type="radio" name="result1" class="form-check-input" id="option3" value="未定">
                                <label class="form-check-label" for="option3">
                                    未定
                                </label>
                            </div><br>
                            <h3>2次面接</h3><br>
                            <div class="fom-group">
                                <strong>実施日</strong>
                                <input type="date" name="interviewday1" class="form-control"
                                    max="{{ date('Y-m-d') }}">
                            </div><br>
                            <div class="form-group">
                                <strong>対応者名</strong>
                                <select name="interviewer1" class="form-control">
                                    <option selected>成田</option>
                                    <option value="西田">西田</option>
                                    <option value="新島">新島</option>
                                </select>
                            </div><br>
                            <div class="fom-check">
                                <strong>合否</strong><br>
                                <input type="radio" name="result2" class="form-check-input" id="option1"
                                    value="合格">
                                <label class="form-check-label" for="option1">
                                    合格
                                </label>
                                <input type="radio" name="result2" class="form-check-input" id="option2"
                                    value="不合格">
                                <label class="form-check-label" for="option2">
                                    不合格
                                </label>
                                <input type="radio" name="result2" class="form-check-input" id="option3"
                                    value="未定">
                                <label class="form-check-label" for="option3">
                                    未定
                                </label>
                            </div><br>
                            <h3>インターン</h3><br>
                            <div class="fom-group">
                                <strong>入職日</strong>
                                <input type="date" name="internshipday" class="form-control"
                                    max="{{ date('Y-m-d') }}">
                            </div><br>
                            <div class="form-group">
                                <strong>対応部署名</strong>
                                <select name="" class="form-control">
                                    <option selected>インターン対応部署</option>
                                    <option value="SE">SE</option>
                                    <option value="経営">経営</option>
                                </select>
                            </div><br>
                            <div class="fom-check">
                                <strong>合否</strong><br>
                                <input type="radio" name="internresult" class="form-check-input" id="option1"
                                    value="合格">
                                <label class="form-check-label" for="option1">
                                    合格
                                </label>
                                <input type="radio" name="internresult" class="form-check-input" id="option2"
                                    value="不合格">
                                <label class="form-check-label" for="option2">
                                    不合格
                                </label>
                                <input type="radio" name="internresult" class="form-check-input" id="option3"
                                    value="未定">
                                <label class="form-check-label" for="option3">
                                    未定
                                </label>
                            </div><br>
                            <div class="fom-group">
                                <strong>電話番号</strong>
                                <input type="text" name="phonenumber" class="form-control" autocomplete="off"
                                    placeholder="">
                            </div><br>
                            <div class="fom-group">
                                <strong>メールアドレス</strong>
                                <input type="text" name="phonenumber" class="form-control" autocomplete="off"
                                    placeholder="">
                            </div><br>
                            <div class="form-group">
                                <strong>日本語(JLPT)スキル</strong>
                                <select name="" class="form-control">
                                    <option selected></option>
                                    <option value="N1">N1</option>
                                    <option value="N2">N2</option>
                                    <option value="N3">N3</option>
                                    <option value="N4">N4</option>
                                    <option value="N5">N5</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <strong>ヒアリングスキル</strong>
                                <select name="" class="form-control">
                                    <option selected></option>
                                    <option value="N1">N1</option>
                                    <option value="N2">N2</option>
                                    <option value="N3">N3</option>
                                    <option value="N4">N4</option>
                                    <option value="N5">N5</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <strong>スピーキングスキル</strong>
                                <select name="" class="form-control">
                                    <option selected></option>
                                    <option value="N1">N1</option>
                                    <option value="N2">N2</option>
                                    <option value="N3">N3</option>
                                    <option value="N4">N4</option>
                                    <option value="N5">N5</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <strong>リーディングスキル</strong>
                                <select name="" class="form-control">
                                    <option selected></option>
                                    <option value="N1">N1</option>
                                    <option value="N2">N2</option>
                                    <option value="N3">N3</option>
                                    <option value="N4">N4</option>
                                    <option value="N5">N5</option>
                                </select>
                            </div><br>
                            <div class="fom-group">
                                <strong>SEスキル</strong>
                                <input type="text" name="skill" class="form-control" autocomplete="off"
                                    placeholder=""><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Java">
                                    <label class="form-check-label">Java</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Go">
                                    <label class="form-check-label">Go</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Kotlin">
                                    <label class="form-check-label">Kotlin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Swift">
                                    <label class="form-check-label">Swift</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="TypeScript">
                                    <label class="form-check-label">TypeScript</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Ruby">
                                    <label class="form-check-label">Ruby</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="HTML, CSS">
                                    <label class="form-check-label">HTML, CSS</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="SQL">
                                    <label class="form-check-label">SQL</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="C, C++">
                                    <label class="form-check-label">C, C++</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="C#">
                                    <label class="form-check-label">C#</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="R">
                                    <label class="form-check-label">R</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Python">
                                    <label class="form-check-label">Python</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="JavaScript">
                                    <label class="form-check-label">JavaScript</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="PHP">
                                    <label class="form-check-label">PHP</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="VBA">
                                    <label class="form-check-label">VBA</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value=".NET">
                                    <label class="form-check-label">NET</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Objective-C">
                                    <label class="form-check-label">Objective-C</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Scala">
                                    <label class="form-check-label">Scala</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill" value="Shell Script">
                                    <label class="form-check-label">Shell Script</label>
                                </div><br>
                                <button type="button" class="btn btn-info">追加</button>
                            </div><br>
                            <strong>学歴</strong><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="academicHistory" value="4大">
                                <label class="form-check-label">4大</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="academicHistory" value="専門">
                                <label class="form-check-label">専門</label>
                            </div><br>
                            <div class="fom-group">
                                <strong>最終学歴</strong>
                                <input type="text" name="" class="form-control" autocomplete="off"
                                    placeholder="">
                            </div><br>
                            <div class="form-group">
                                <strong>応募職種</strong>
                                <select name="" class="form-control">
                                    <option selected>SE</option>
                                    <option value="N1">営業</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <strong>希望勤務地</strong>
                                <select name="" class="form-control">
                                    <option selected>東京</option>
                                    <option value="N1">大阪</option>
                                    <option value="N2">名古屋</option>
                                    <option value="N3">埼玉</option>
                                    <option value="N4">神戸</option>
                                    <option value="N5">札幌</option>
                                </select>
                            </div><br>
                            <div class="fom-group">
                                <strong>自由項目</strong>
                                <textarea rows="10" cols="50" name="" class="form-control" autocomplete="off"></textarea>
                            </div><br>
                            <a href="" class="btn btn-secondary">キャンセル</a>
                            <button type="submit" class="btn btn-info">更新</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
