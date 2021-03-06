<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('/tasks', 'ShowProductController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/carousels', 'ShowCarouselsController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/sections', 'SectionsController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/technology', 'ShowTechnologiesController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/gallery', 'ShowGalleryController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/videos', 'ShowVideosController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/about', 'ShowAboutController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/contacts', 'ShowContactsController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/products/tahan', 'ShowTahanController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/products/sesame_oil', 'ShowSesameOilController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/products/limets', 'ShowLimetsController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/products/honey', 'ShowHoneyController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/order', 'ShowOrderController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resource('/clientsOrders', 'ClientsController', [
    'except' => ['edit', 'show', 'store']
]);