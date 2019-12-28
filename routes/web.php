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
// Route::get('pegawai', 'PegawaiController@index');

// Route::get('halo', function () {
// 	return "hallo uput ";
// });
// Route::get('blog', function(){
// 	return view('blog');
// });
//  Route::get('/pegawai/{nama}', 'PegawaiController@index');

// Route::get('/formulir','PegawaiController@formulir')->name('formulir');
// Route::post('/formulir/proses','PegawaiController@proses')->name('proses');
// Route::get('/blog','BlogController@home');
// Route::get('/blog/tentang','BlogController@tentang');
// Route::get('/blog/kontak','BlogController@kontak');



Route::prefix('/user')->name('user.')->group(function(){
	Route::get('/','UserController@index')->name('index');
	Route::get('/create', 'UserController@create')->name('create');
	Route::post('/create','Usercontroller@store')->name('store');

	Route::get('/user/{id}','UserController@edit')->name('edit');
	Route::put('/update','UserController@update')->name('update');
	Route::delete('/delete','UserController@delete')->name('delete');
	
	

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
