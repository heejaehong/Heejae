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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'MainController@index');

Route::group(['middleware' => 'admin'], function() {
    Route::get('admin', 'AdminController@index');
    Route::get('admin/profile', 'ProfileController@index')->name('profile.show');
    Route::get('admin/profile/{id}/update', 'ProfileController@update')->name('profile.update');
    Route::get('admin/skill', 'SkillController@index')->name('skill.index');
    Route::get('admin/skill/{id}/show', 'SkillController@show')->name('skill.show');
    Route::get('admin/skill/{id}/update', 'SkillController@update')->name('skill.update');
    Route::get('admin/skill/create', 'SkillController@create')->name('skill.create');
    Route::post('admin/skill/store', 'SkillController@store')->name('skill.store');
    Route::get('admin/skill/{id}/delete', 'SkillController@delete')->name('skill.delete');
    Route::get('admin/description', 'DescriptionController@index')->name('description.index');
    Route::get('admin/description/{id}/update', 'DescriptionController@update')->name('description.update');
    Route::get('admin/nav', 'NavController@index')->name('nav.index');
    Route::get('admin/nav/{id}/show', 'NavController@show')->name('nav.show');
    Route::get('admin/nav/{id}/update', 'NavController@update')->name('nav.update');
    Route::get('admin/nav/create', 'NavController@create')->name('nav.create');
    Route::post('admin/nav/store', 'NavController@store')->name('nav.store');
    Route::get('admin/nav/{id}/delete', 'NavController@delete')->name('nav.delete');
    Route::get('admin/work', 'WorkController@index')->name('work.index');
    Route::get('admin/work/create', 'WorkController@create')->name('work.create');
    Route::post('admin/work/store', 'WorkController@store')->name('work.store');
    Route::get('admin/work/{id}/show', 'WorkController@show')->name('work.show');
    Route::put('admin/work/{id}/update', 'WorkController@update')->name('work.update');
    Route::get('admin/work/{id}/delete', 'WorkController@delete')->name('work.delete');










});

Auth::routes();

Route::get('/home', 'HomeController@index');
