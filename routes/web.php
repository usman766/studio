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
    return view('homepage');
});

  Route::auth();
  Route::get('/home','HomeController@index')->name('home');


//Admin
Route::get('/add-list','AdminController@addlist')->name('addlists');
Route::post('/insertlist','AdminController@insertlist')->name('insertlists');
Route::get('/view-list','AdminController@viewlist')->name('viewlists');
Route::post('/checkdetail','AdminController@checkdetail')->name('checkdetails');
//user
Route::get('/user-home','UseController@home')->name('home');
Route::get('/add-card','UseController@addcard')->name('addcards');
Route::post('/insertcard','UseController@insertcard')->name('insertcards');
Route::get('/view-card','UseController@viewcard')->name('viewcards');
Route::get('/deletecard/{id}','UseController@deletecard')->name('deletecard');
Route::post('/addmodal','UseController@addmodal')->name('addmodals');

