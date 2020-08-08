<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use Illuminate\Http\Request;


Route::get('/','ProductController@index')->name('home');

Route::post('/add','ProductController@add');
Route::get('/add','ProductController@form')->name('add');

Route::get('/list','ProductController@list')->name('list');

Route::get('/edit/{id}','ProductController@editView')->name('edit');
Route::post('/edit/{id}','ProductController@edit');

Route::get('/delete/{id}','ProductController@delete')->name('delete');

Route::post('/find','ProductController@findView')->name('find');
//Route::post('/find/{name}','ProductController@find');

