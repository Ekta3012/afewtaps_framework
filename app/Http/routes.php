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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/smartphone', function () {
    return view('smartphone');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/management', function () {
    return view('management');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/faq', 'LA\FaqsController@view');
/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
