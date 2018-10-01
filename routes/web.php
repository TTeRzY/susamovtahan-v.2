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

    //HomePage Controller
    Route::get('/admin', 'ToDoController@index');
    Route::post('/store', 'ToDoController@store')->name('store');
    Route::get('/edit/{id}', 'ToDoController@edit')->name('edit');
    Route::get('/editCarousel/{id}', 'ToDoController@editCarousel')->name('editCarousel');
    Route::post('/update/{id}', 'ToDoController@update')->name('update');
    Route::get('/delete/{id}', 'ToDoController@delete')->name('delete');

    //Technologies Controller
    Route::get('/admin/technology', 'AddTechnologiesController@index');
    Route::post('/admin/technology/store', 'AddTechnologiesController@store')->name('technology.store');
    Route::get('/admin/technology/edit/{id}', 'AddTechnologiesController@edit')->name('technology.edit');
    Route::post('/admin/technology/update/{id}', 'AddTechnologiesController@update')->name('technology.update');
    Route::get('/admin/technology/delete/{id}', 'AddTechnologiesController@delete')->name('technology.delete');

    //Gallery Controller
    Route::get('/admin/gallery/', 'AddGalleryController@index');
    Route::post('/admin/gallery/store', 'AddGalleryController@store')->name('gallery.store');
    Route::get('/admin/gallery/edit/{id}', 'AddGalleryController@edit')->name('gallery.edit');
    Route::post('/admin/gallery/update/{id}', 'AddGalleryController@update')->name('gallery.update');
    Route::get('/admin/gallery/delete/{id}', 'AddGalleryController@delete')->name('gallery.delete');

    //Videos Controller
    Route::get('/admin/videos/', 'AddVideosController@index');
    Route::post('/admin/videos/store', 'AddVideosController@store')->name('videos.store');
    Route::get('/admin/videos/edit/{id}', 'AddVideosController@edit')->name('videos.edit');
    Route::post('/admin/videos/update/{id}', 'AddVideosController@update')->name('videos.update');
    Route::get('/admin/videos/delete/{id}', 'AddVideosController@delete')->name('videos.delete');

    Route::get('/admin/about', function () {
        return view('admin.about');
    });
    Route::get('/admin/contacts', function () {
        return view('admin.contacts');
    });

});


Auth::routes();

