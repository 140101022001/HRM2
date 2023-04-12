<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlogin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function __construct()
    {

    }
    public function login() {
        return view('userlogin.login');
    }
    public function logincheck(Request $request) {
        // $email = $request->input('email');
        // $password = $request->input('password');
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return route('car.index');
        } else {
            return redirect(route('user.login'));
        }
        // $user = DB::table('userlogin')->where(['email'=> $email, 'password' => $password])->get();
        // if(count($user) === 0) {
        //     return redirect(route('user.login'))->with('information','Email hoặc mật khẩu không hợp lệ vui lòng nhập lại!');
        // }else {
        //     return redirect(route('car.index'));
        // }
    }
    public function logout() {
        return redirect(route('user.login'));
    }
    public function register() {
        return view('userlogin.userCreate');
    }
    public function add(Request $request) {
        $request->validate([
            'name' => 'required|min:2',
            'dateofbirth' => 'required',
            'email' => 'required|unique:userlogin,email|email',
            'password' => 'required|min:5'
        ],[
            'name.required' => 'Tên không được trống!',
            'name.min' => 'Tên quá ngắn!',
            'dateofbirth.required' => 'Ngày sinh không được trống!',
            'email.required' => 'Email không được trống!',
            'email.unique' => 'Email đã tồn tại!',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'password.required' => 'Mật khẩu không được trống!',
            'password.min' => 'Mật khẩu Quá ngắn!'
        ]);
        $user = new userlogin();
        $user->name = $request->input('name');
        $user->dateofbirth = $request->input('dateofbirth');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return view('userlogin.registerSuccess');
        }
    }
