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
    return view('pages.index');
});


Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'],function (){
    Route::resource('/','IndexController');
    Route::resource('gioi-thieu','AboutController');
    Route::resource('dich-vu','ServiceController');
    Route::get('dich-vu/{slug}/{id}','ServiceController@show')->name('dichvu.show');
    Route::resource('thu-vien','GalleryController');
    Route::get('thu-vien/{slug}/{id}','GalleryController@show')->name('gallery.show');
    Route::resource('kien-thuc','NewsController');
    Route::get('lien-he','ContactController@index')->name('contact.index');
    Route::post('lien-he','ContactController@postcontact')->name('contact.postcontact');
});

Route::group(['as' => 'backend.', 'namespace' => 'Backend', 'prefix' => 'admin','middleware' => 'auth'],function (){
    Route::get('/', function (){

        return view('pages.admin.index');
    });
    Route::resource('about','AboutController');
    Route::post('about/{id}','AboutController@update')->name('about.update');

    Route::resource('news','ServiceController');
    Route::get('promotion','ServiceController@promotion')->name('promotion.index');
    Route::get('star','ServiceController@star')->name('star.index');
    Route::post('news/{id}','ServiceController@update')->name('news.update');
    Route::get('news/delete/{id}','ServiceController@delete')->name('news.delete');

    Route::resource('gallery','GalleryController');
    Route::post('gallery/{id}','GalleryController@update')->name('gallery.update');
    Route::get('gallery/delete/{id}','GalleryController@delete')->name('gallery.delete');

    Route::resource('banner','BannerController');
    Route::post('banner/{id}','BannerController@update')->name('banner.update');
    Route::get('banner/delete/{id}','BannerController@delete')->name('banner.delete');

    Route::resource('category','CategoriesController');
    Route::post('category/{id}','CategoriesController@update')->name('category.update');
    Route::get('category/delete/{id}','CategoriesController@delete')->name('category.delete');

    Route::resource('post','PostController');
    Route::post('post/{id}','PostController@update')->name('post.update');
    Route::get('post/delete/{id}','PostController@delete')->name('post.delete');

    Route::resource('config','ConfigController');
    Route::post('config/{id}','ConfigController@update')->name('config.update');

    Route::resource('contact','ContactController');
    Route::get('contact/delete/{id}','ContactController@delete')->name('contact.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
