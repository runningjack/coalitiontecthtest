<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

<<<<<<< HEAD
Route::get('/', "ProductsController@index");
Route::post("/","ProductsController@store");
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> af8a4f84a87e6fa3ff3a42ef3b8e5c1cbc79de28
