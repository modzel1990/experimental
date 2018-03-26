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
    return view('pages.content');
});

Route::get('blog', function () {
    return view('pages.blog');
});

Route::get('properties', function () {
    return view('pages.properties0');
});

Route::get('aboutus', function () {
    return view('pages.aboutus');
});

Route::get('contact', function () {
    return view('pages.contactus');
});

Route::get('kursor', function () {
    return view('pages.testcursorfollow');
});

Route::get('insert', function () {
    return view('pages.insert');
});

Route::get('campaign', function() {
    return view('pages.templateemailcapaign');
});

Route::get('email1', function() {
    return view('pages.emailcampaign1');
});

Route::get('email2', function() {
    return view('pages.emailcampaign2');
});

Route::get('email3', function() {
    return view('pages.emailcampaign3');
});

Route::get('form', function() {
    return view('pages.form');
});

Route::get('button', function() {
    return view('pages.buttonmenu');
});

Route::post('insert/post', 'Footforward\DBController@inserting');
Route::post('insert/inserting', 'Footforward\DisplayDB@displaying');


Route::post('insert', 'FootForward\DBController@inserting');
Route::get('insert', 'FootForward\DisplayDB@displaying');


Route::get('/Resources/LESS', 'Blackpeak\ResourceController@Less');
Route::get('kursor', 'FootForward\DBController@hakunamatata');
