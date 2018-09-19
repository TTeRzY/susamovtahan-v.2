<?php

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


Route::middleware(['auth'])->group(function () {

    Route::get('/admin/tehnologia', function () {
        return view('admin.tehnologia');
    });
    Route::get('/admin/gallery', function () {
        return view('admin.gallery');
    });
    Route::get('/admin/videos', function () {
        return view('admin.videos');
    });
    Route::get('/admin/about', function () {
        return view('admin.about');
    });
    Route::get('/admin/contacts', function () {
        return view('admin.contacts');
    });

    Route::get('/admin', 'ToDoController@index');
    Route::post('/store', 'ToDoController@store')->name('store');
    Route::get('/edit/{id}', 'ToDoController@edit')->name('edit');
    Route::post('/update/{id}', 'ToDoController@update')->name('update');
    Route::get('/delete/{id}', 'ToDoController@delete')->name('delete');
});


Auth::routes();

