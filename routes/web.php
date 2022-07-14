<?php

use App\Http\Controllers\GolonganController;
use App\Http\Controllers\MemberController;
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

route::middleware(['auth'])->group(function () {

    route::get('/golongan', [GolonganController::class, 'index']);
    route::get('/golongan/create', [GolonganController::class, 'create']);
    route::post('/golongan/store', [GolonganController::class, 'store']);
    route::get('/golongan/{id}/edit', [GolonganController::class, 'edit']);
    route::put('/golongan/{id}', [GolonganController::class, 'update']);
    route::delete('/golongan/{id}', [GolonganController::class, 'destroy']);

    route::get('/member', [MemberController::class, 'index']);
    route::get('/member/create', [MemberController::class, 'create']);
    route::post('/member/store', [MemberController::class, 'store']);
    route::get('/member/{id}/edit', [MemberController::class, 'edit']);
    route::put('/member/{id}', [MemberController::class, 'update']);
    route::delete('/member/{id}', [MemberController::class, 'destroy']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
