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
    Route::get('/editSections/{id}', 'ToDoController@editSections')->name('editSections');
    Route::post('/update/{id}', 'ToDoController@update')->name('update');
    Route::post('/updateCarousel/{id}', 'ToDoController@updateCarousel')->name('updateCarousel');
    Route::post('/updateSections/{id}', 'ToDoController@updateSections')->name('updateSections');
    Route::get('/delete/{id}', 'ToDoController@delete')->name('delete');
    Route::get('/deleteSections/{id}', 'ToDoController@deleteSections')->name('deleteSections');
    Route::get('/deleteCarousel/{id}', 'ToDoController@deleteCarousel')->name('deleteCarousel');

    //About Controller
    Route::get('/admin/about', 'AddAboutController@index');
    Route::post('/admin/about/store', 'AddAboutController@store')->name('about.store');
    Route::get('/admin/about/edit/{id}', 'AddAboutController@edit')->name('about.edit');
    Route::post('/admin/about/update/{id}', 'AddAboutController@update')->name('about.update');
    Route::get('/admin/about/delete/{id}', 'AddAboutController@delete')->name('about.delete');

    //Contacts Controller
    Route::get('/admin/contacts', 'AddContactsController@index');
    Route::post('/admin/contacts/store', 'AddContactsController@store')->name('contacts.store');
    Route::get('/admin/contacts/edit/{id}', 'AddContactsController@edit')->name('contacts.edit');
    Route::post('/admin/contacts/update/{id}', 'AddContactsController@update')->name('contacts.update');
    Route::get('/admin/contacts/delete/{id}', 'AddContactsController@delete')->name('contacts.delete');


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

    //Tahan Controller
    Route::get('/admin/products/tahan', 'TahanController@index');
    Route::post('/admin/products/tahan/store', 'TahanController@store')->name('tahan.store');
    Route::get('/admin/products/tahan/edit/{id}', 'TahanController@edit')->name('tahan.edit');
    Route::post('/admin/products/tahan/update/{id}', 'TahanController@update')->name('tahan.update');
    Route::get('/admin/products/tahan/delete/{id}', 'TahanController@delete')->name('tahan.delete');

    //SesameOil Controller
    Route::get('/admin/products/sesame_oil', 'SesameOilController@index');
    Route::post('/admin/products/sesame_oil/store', 'SesameOilController@store')->name('sesame_oil.store');
    Route::get('/admin/products/sesame_oil/edit/{id}', 'SesameOilController@edit')->name('sesame_oil.edit');
    Route::post('/admin/products/sesame_oil/update/{id}', 'SesameOilController@update')->name('sesame_oil.update');
    Route::get('/admin/products/sesame_oil/delete/{id}', 'SesameOilController@delete')->name('sesame_oil.delete');

    //Limets Controller
    Route::get('/admin/products/limets', 'LimetsController@index');
    Route::post('/admin/products/limets/store', 'LimetsController@store')->name('limets.store');
    Route::get('/admin/products/limets/edit/{id}', 'LimetsController@edit')->name('limets.edit');
    Route::post('/admin/products/limets/update/{id}', 'LimetsController@update')->name('limets.update');
    Route::get('/admin/products/limets/delete/{id}', 'LimetsController@delete')->name('limets.delete');

    //Honey Controller
    Route::get('/admin/products/honey', 'HoneyController@index');
    Route::post('/admin/products/honey/store', 'HoneyController@store')->name('honey.store');
    Route::get('/admin/products/honey/edit/{id}', 'HoneyController@edit')->name('honey.edit');
    Route::post('/admin/products/honey/update/{id}', 'HoneyController@update')->name('honey.update');
    Route::get('/admin/products/honey/delete/{id}', 'HoneyController@delete')->name('honey.delete');


});


Auth::routes();

