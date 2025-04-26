<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
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


Route::get('/penduduk/all',[PendudukController::class,'view'])
->name("penduduk.home")->middleware('check.level:2');
Route::get('/keluarga/all',[PendudukController::class,'viewdakel'])
->name("keluarga.home")->middleware('check.level:2');
Route::get('/rtrw/all',[PendudukController::class,'viewrtrw'])
->name("rtrw.home")->middleware('check.level:2');
Auth::routes();

//admin controller proses
Route::get('/processed/penduduk/get',[PendudukController::class,'viewprocessed'])
->name("processed.dapun")->middleware('check.level:2');
Route::post('/processed/penduduk/create',[PendudukController::class,'buatdatapenduduk'])
->name("processed.dapuni")->middleware('check.level:2');
Route::get('/penduduk/cari', [PendudukController::class, 'view'])->name('.cari');

Route::get('/home', 'HomeController@index')->name('home.beranda');
