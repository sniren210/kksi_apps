<?php

use App\Http\Controllers\TryController;
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
    return view('home');
});

Route::get('/try', [TryController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{   
    Route::group(['middleware' => ['is_admin']], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('/siswa', function () {
            return view('pages.crud.index');
        });
    });

    Route::group(['middleware' => ['is_guru']], function () {
        Route::get('/dashboard/guru', function() {
            return view('pages.dashboard-guru');
        })->name('guru');
    });

});
