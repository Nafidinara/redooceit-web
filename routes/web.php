<?php

use App\Http\Controllers\UI\TpsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('dashboard');
});

Route::group(['middleware' => 'auth', 'prefix' => '/'], function() {
    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['prefix' => 'component', 'as' => 'component.'], function() {
        Route::get('accordion', function() {return view('mazer.components.accordion');})->name('accordion');
        Route::get('table', function() {return view('mazer.components.table');})->name('table');
        Route::get('form', function() {return view('mazer.components.form');})->name('form');
        Route::get('card', function() {return view('mazer.components.card');})->name('card');
        Route::get('carousel', function() {return view('mazer.components.carousel');})->name('carousel');
        Route::get('progress', function() {return view('mazer.components.progress');})->name('progress');
        Route::get('datatable', function() {return view('mazer.table.datatable');})->name('datatable');
    });
    Route::group(['prefix' => 'pengguna', 'as' => 'pengguna.'], function() {
        Route::get('user', function() {return view('mazer.table.user');})->name('user');
    });

    Route::group(['prefix' => 'tps', 'as' => 'tps.'], function() {
        Route::get('/',[TpsController::class,'index'])->name("index");
        Route::get('/create',[TpsController::class,'create'])->name("create");
        Route::post('/store',[TpsController::class,'store'])->name("store");
        Route::get('/edit/{tps_id}',[TpsController::class,'edit'])->name("edit");
        Route::put('/update/{tps_id}',[TpsController::class,'update'])->name("update");
        Route::delete('/destroy/{tps_id}',[TpsController::class,'destroy'])->name("destroy");
    });
});

require_once __DIR__ . "/auth.php";
