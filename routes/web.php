<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('welcome');
})->name('/');
Route::get('user', function () {
    return view('welcome');
})->name('index');

Route::get('registerAdmin', function () {
    return view('/auth/registerAdmin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/getInvitation', [App\Http\Controllers\InvitationController::class, 'index']);
Route::get('/createCode', [App\Http\Controllers\InvitationController::class, 'create']);
Route::post('/save-code', [App\Http\Controllers\InvitationController::class, 'store']);
Route::get('/edit-inv/{id}', [App\Http\Controllers\InvitationController::class, 'edit']);
Route::resource('/edit-code', App\Http\Controllers\InvitationController::class);
Route::post('/gatAjax', [App\Http\Controllers\InvitationController::class, 'getData']);
Route::get('/gatDestroy/{id}', [App\Http\Controllers\InvitationController::class, 'destroy']);
Route::get('/commission', [App\Http\Controllers\GetPageController::class, 'commission']);
Route::get('/walk-thousand', [App\Http\Controllers\GetPageController::class, 'walkThousand']);
Route::get('/all-tems', [App\Http\Controllers\GetPageController::class, 'allTems']);
Route::get('/my-qrcode', [App\Http\Controllers\GetPageController::class, 'myQrCode']);
Route::get('/member', [App\Http\Controllers\GetPageController::class, 'member']);
Route::get('/group-report', [App\Http\Controllers\GetPageController::class, 'groupReport']);
Route::get('/top-up-money', [App\Http\Controllers\GetPageController::class, 'topUpMoney']);
Route::get('/withdraw-money', [App\Http\Controllers\GetPageController::class, 'withdrawMoney']);


