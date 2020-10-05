<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/coba', function () {
    return response()->json([
        'coba' => 'coba'
    ]);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
use App\Http\Controllers\API\GuruController;
use App\Http\Controllers\API\SiswaController;
use App\Http\Controllers\API\KelasController;
use App\Http\Controllers\API\JurusanController;

Route::middleware('auth:sanctum')->group(function ()
{
    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('jurusan', JurusanController::class);
});
