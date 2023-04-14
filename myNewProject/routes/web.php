<?php

use App\Http\Controllers\carController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\HRMController;
use App\Http\Controllers\SkillController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//car
Route::middleware('admin.login.check')->prefix('/products')->group(function () {
    Route::get('/car', [carController::class, 'index'])->name('car.index');

    Route::post('/car', [carController::class, 'add'])->name('car.add');

    Route::delete('/delete/{car}', [carController::class, 'destroy'])->name('car.delete');

    Route::get('/edit/{car}', [carController::class, 'edit'])->name('car.edit');

    Route::put('/car/{car}', [carController::class, 'update'])->name('car.update');
});
//car end
//user login
Route::prefix('/user')->group(function () {
    Route::get('/login', [userController::class, 'login'])->name('user.login');

    Route::post('/logincheck', [userController::class, 'logincheck'])->name('user.logincheck');

    Route::get('/logout', [userController::class, 'logout'])->name('user.logout');

    Route::get('/register', [userController::class, 'register'])->name('user.register');

    Route::post('/register', [userController::class, 'add'])->name('user.add');
});


//user login end

Route::get('/jinzaikanri', function() {
    return view('jinzaikanri');
});

// Route::get('/HRM', function() {
//     return view('HRM');
// });
Route::get('/tetst', function() {
    return view('tetst');
});

// Route::post('/HRM', [HRMController::class, 'create'])->name('hrm.create');

Route::resource('/HRM', HRMController::class);
Route::resource('/Skill', SkillController::class);
Route::get('/', function () {
    return redirect(route('HRM.index'));
})->name('welcome');
Route::get('/restore',[HRMController::class,'restore'])->name('HRM.restore');
