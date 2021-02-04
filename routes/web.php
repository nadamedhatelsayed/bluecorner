<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

 Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::prefix('admin')
    ->group(function () {


        Route::get('register', function () {
            return view('registration.create');
        });

        Route::post('register','RegisterController@store')->name('register.store');
//about
        Route::resource('/about', 'AboutUsController');
        Route::get('/about/edit/{id}', 'AboutUsController@edit');
        Route::post('/about/update/{id}', 'AboutUsController@update');
//services
        Route::resource('/services', 'ServicesController');
//features
        Route::resource('/features', 'FeaturesController');
        Route::get('/features/edit/{id}', 'FeaturesController@edit');
//slider
        Route::resource('/slider', 'SliderController');
        Route::resource('/category', 'CategoryController');
//projects
        Route::resource('/products', 'ProductController');
        Route::get('/products/edit/{id}', 'ProductController@edit');
        Route::post('/products/update/{id}', 'ProductController@update');
        Route::get('/products/details/{id}', 'ProductController@details');
//images
        Route::resource('/img', 'ImagesController');
        Route::get('/img/view/{id}', 'ImagesController@show');
//team
        Route::resource('/team', 'TeamController');
        Route::get('/team/edit/{id}', 'TeamController@edit');
//blog
        Route::resource('/blogs', 'BlogController');
        Route::get('/blogs/edit/{id}', 'BlogController@edit');
        Route::get('/blogs/destroy/{id}', 'BlogController@destroy');
        //request
        Route::resource('/requests', 'RequestController');


    });

/////////////////////////////////////////////////////////////////////////////////////////////////////
//master page
Route::get('/index', 'MasterController@index');
Route::get('/about', 'MasterController@about');
Route::get('/products ', 'MasterController@gallery');
Route::get('/blog', 'MasterController@blog');
Route::get('/contact', 'MasterController@contactUs');
