<?php

use App\Http\Controllers\siswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------   --------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [siswaController::class,'index']);
Route::get('/siswa/detail/{id}', [siswaController::class, 'detail']);
Route::get('/siswa/create', [siswaController::class,'create']);
Route::post('/siswa/store', [siswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [siswaController::class, 'edit']);
Route::put('/siswa/update/{id}', [siswaController::class, 'update']);
Route::delete('/siswa/delete/{id}', [siswaController::class, 'destroy']);
Route::get('/siswa/softdelete', [siswaController::class, 'softdelete']);
Route::delete('/siswa/restore/{id}', [siswaController::class, 'restore']);
Route::delete('/siswa/permanent/{id}', [siswaController::class, 'permanent']);
