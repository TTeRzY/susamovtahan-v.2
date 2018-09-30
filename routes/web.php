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

    Route::get('/admin/tehnologia', 'AddTechnologiesController@index');
    Route::post('/admin/tehnologia/store', 'AddTechnologiesController@store')->name('tehnologia.store');
    Route::get('/admin/tehnologia/edit/{id}', 'AddTechnologiesController@edit')->name('tehnologia.edit');
    Route::post('/admin/tehnologia/update/{id}', 'AddTechnologiesController@update')->name('tehnologia.update');
    Route::get('/admin/tehnologia/delete/{id}', 'AddTechnologiesController@delete')->name('tehnologia.delete');


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
    Route::get('/editCarousel/{id}', 'ToDoController@editCarousel')->name('editCarousel');
    Route::post('/update/{id}', 'ToDoController@update')->name('update');
    Route::get('/delete/{id}', 'ToDoController@delete')->name('delete');

});


Auth::routes();

