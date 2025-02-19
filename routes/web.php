<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        
        /**
         * Home Routes
         */
        Route::get('/', 'HomeController@index')->name('home.index');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
            Route::get('/change-password', 'UsersController@changepassword')->name('users.password');
            Route::patch('/update-password', 'UsersController@updatepassword')->name('users.updatepassword');
        });

        /**
         * Post Routes
         */
        Route::group(['prefix' => 'posts'], function() {
            Route::get('/', 'PostsController@index')->name('posts.index');
            Route::get('/create', 'PostsController@create')->name('posts.create');
            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });
        
        /**
         * Institute Routes
         */
        Route::group(['prefix' => 'institute'], function() {
            Route::get('/', 'InstituteController@index')->name('institute.index');
            Route::get('/create', 'InstituteController@create')->name('institute.create');
            Route::post('/create', 'InstituteController@store')->name('institute.store');
            Route::get('/{institute}/show', 'InstituteController@show')->name('institute.show');
            Route::get('/{institute}/edit', 'InstituteController@edit')->name('institute.edit');
            Route::patch('/{institute}/update', 'InstituteController@update')->name('institute.update');
            Route::delete('/{institute}/delete', 'InstituteController@destroy')->name('institute.destroy');
        });
   
        
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
    
         /**
         * Ajax Routes
         */
        Route::get('/institute/approve/{id}', 'InstituteController@approve')->name('institute.approve');
        
});
