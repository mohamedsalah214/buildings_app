<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // buildings route
    Route::prefix('buildings')->name('buildings.')->controller(BuildingController::class)->group(function () {
        Route::get('/'                  , 'index')->name('index');
        Route::get('/create'            , 'create')->name('create');
        Route::post('/store'            , 'store')->name('store');
        Route::get('/{building}'        , 'show')->name('show');
        Route::get('/{building}/edit'   , 'edit')->name('edit');
        Route::post('/{building}'        , 'update')->name('update');
        Route::delete('/{building}'     , 'destroy')->name('destroy');
    });

    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
