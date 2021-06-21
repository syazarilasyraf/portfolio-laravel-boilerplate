<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

use App\Http\Controllers\QnaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// For authentication
// -- register / login
Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/projects', 'ProjectController@index');

Route::get('/writing', 'BlogController@index');

Route::get('/bookmarks', 'BookmarkController@index');

Route::get('/tools', 'ToolController@index');

Route::get('/tools/windows', 'WindowController@index');

Route::get('/tools/android', 'AndroidController@index');

Route::get('/tools/web', 'WebController@index');

Route::resource('ama', 'QnaController');

/////////////////
// ADMIN
//
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

  Route::get('/',function(){
    return redirect('/admin/dashboard');
  });

  Route::get('/dashboard', 'AdminController@index');

  Route::resource('home', 'AdminHomeController', ['as'=>'admin']);

  Route::resource('about', 'AdminAboutController', ['as'=>'admin']);

  Route::resource('project', 'AdminProjectController', ['as'=>'admin']);

  Route::resource('blog', 'AdminBlogController', ['as'=>'admin']);

  Route::resource('social', 'AdminSocialController', ['as'=>'admin']);

  Route::resource('ama', 'AdminQnaController', ['as'=>'admin']);

  Route::resource('bookmark', 'AdminBookmarkController', ['as'=>'admin']);

  Route::resource('tools', 'AdminToolsController', ['as'=>'admin']);

  Route::resource('windows', 'AdminWindowController', ['as'=>'admin']);

  Route::resource('android', 'AdminAndroidController', ['as'=>'admin']);

  Route::resource('web', 'AdminWebController', ['as'=>'admin']);

//   Route::post('ama', 'AdminQnaController', ['as'=>'admin']);

//   Route::get('/masterdetail', 'AdminController@masterdetail');

//   Route::view('/react', 'admin.react');

//   Route::resource('tasks','AdminTasksController',['as'=>'admin']);

});
