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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('manage')->middleware('auth')->group(function () {
    Route::get('/', 'Manage\ManageController@index');
    Route::get('/dashboard', 'Manage\ManageController@dashboard')->name('manage.dashboard');

    // User Access Control List (ACL)
    Route::resource('roles', 'Manage\RolesController');
    Route::resource('users', 'Manage\UsersController');
    Route::resource('permissions', 'Manage\PermissionsController');

    // Manage Products
    Route::resource('products', 'Manage\ProductsController');

    // Manage Categories
    Route::resource('categories', 'Manage\CategoriesController');
});
