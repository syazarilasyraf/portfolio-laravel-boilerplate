<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// For authentication
// -- register / login
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', 'SocialController@index');

Route::get('/projects', 'ProjectController@index');

Route::get('/blog', 'BlogController@index');

Route::get('/contact', function () {
    return view('contact');
});

Route::view('/show_react','show_react');

Route::view('php', 'php');

Route::view('ama', 'ama');

/////////////////
// ADMIN
//
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

  Route::get('/',function(){
    return redirect('/admin/dashboard');
  });

  Route::get('/dashboard', 'AdminController@index');

  Route::get('/home', 'HomeController@index')->name('dashboard');

  Route::get('/about', 'AboutController@index')->name('about');

//   Route::get('/project', 'ProjectController@index')->name('project');

  Route::resource('project', 'AdminProjectController', ['as'=>'admin']);

  Route::resource('blog', 'AdminBlogController', ['as'=>'admin']);

  Route::resource('social', 'AdminSocialController', ['as'=>'admin']);

  Route::get('/masterdetail', 'AdminController@masterdetail');

  Route::view('/react', 'admin.react');

//   Route::resource('tasks','AdminTasksController',['as'=>'admin']);

});
