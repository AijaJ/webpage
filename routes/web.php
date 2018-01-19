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

Route::get('/about', function () {
    return view('about');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/reviews', 'ReviewsController@getReviews')->name('submit');
Route::post('/reviews', 'ReviewsController@submit');


Route::get('/messages', 'MessagesController@getMessages')->name('submit');
Route::post('/messages', 'MessagesController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/about/submit','MessagesController@submit');
 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
Route::resource('/roles', 'Admin\RolesController');
Route::resource('/permissions', 'Admin\PermissionsController');
Route::resource('/users', 'Admin\UsersController');
Route::get('/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

});