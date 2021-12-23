<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

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

Route::get('/form-pendaftaran/{locale?}', [PendaftaranController::class, 'formPendaftaran']);
Route::post('/proses-form/{locale?}', [PendaftaranController::class, 'prosesForm']);

