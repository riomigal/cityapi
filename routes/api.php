<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use CloudCreativity\LaravelJsonApi\Facades\JsonApi;
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




/* Route::get('/countries', [CountryController::class, 'index']);

Route::get('/countries/{slug}', [CountryController::class, 'show']);

Route::get('/admins', [AdminController::class, 'index']);

Route::get('/cities', [CityController::class, 'index']);

Route::get('/city/{id}', [CityController::class, 'show']);


Route::get('/country/{country}/cities', [CityController::class, 'getByCountry']); */

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */

Route::group(['middleware' => ['api_key', 'request_method']], function () {
    JsonApi::register('default')->routes(function ($api) {
        $api->resource('countries')->relationships(function ($relations) {

            $relations->hasMany('admins');
            $relations->hasMany('cities');
        });
        $api->resource('admins')->relationships(function ($relations) {
            $relations->hasOne('country');
            $relations->hasMany('cities');
        });
        $api->resource('cities')->relationships(function ($relations) {
            $relations->hasOne('admin');
            $relations->hasOne('country');
        });
    });
});


Route::fallback(function () {
    return response()->json(array('message' => 'Wrong address!'), 404);
});