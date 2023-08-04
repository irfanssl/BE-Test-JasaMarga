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

// not require to login
Route::group(['middleware' => 'api'], function ($router) {
    Route::prefix('auth')->group(function(){
        Route::controller(App\Http\Controllers\AuthController::class)->group(function () {
            Route::post('login', 'login');
            Route::post('register', 'register');
        });
    });
});




// require to login
Route::group(['middleware' => 'auth:api'], function ($router) {
    Route::prefix('auth')->group(function(){
        Route::controller(App\Http\Controllers\AuthController::class)->group(function () {
            Route::post('logout', 'logout');
            Route::post('refresh', 'refresh');
            Route::post('me', 'me');
        });

        Route::prefix('import')->group(function(){
            Route::controller(App\Http\Controllers\ImportController::class)->group(function () {
                Route::post('user', 'import');
            });
        });

        Route::prefix('ruas')->group(function(){
            Route::controller(App\Http\Controllers\RuasController::class)->group(function () {
                Route::get('/', 'index');
                Route::get('/{id}', 'show');
                Route::post('/', 'store');
                Route::put('/{id}', 'update');
                Route::delete('/{id}', 'destroy');
            });
        });
    });
});