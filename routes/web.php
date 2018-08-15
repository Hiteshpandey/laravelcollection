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
})->middleware('Test');

Route::get('/form', function () {
    return view('newview');
});

Route::post('/formsubmit', 'UserController@submit')->name('formsubmit');
Route::post('/formsubmit1', 'UserController@submits')->name('formsubmit1');
/*
Route::get('/new/{name}', function ($name) {
    return view('newview',['text'=>$name]);
});

Route::get('/block', function () {
    return view('block.block');
});

//Route::get('/', 'UserController@show');


Route::view('/','newview');

Route::get('newpage/{id}',function($id){
    return $id;
});
Route::view('/newpage'','newview');
Route::redirect('/old','/newpage',301);*/