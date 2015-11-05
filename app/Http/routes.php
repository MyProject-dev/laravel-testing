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
/**
 * SRC: http://laravel.com/docs/5.1/controllers#restful-resource-controllers
 */


/**
 * RESTful Resource Controllers
 * create controller using command line: php artisan make:controller PhotoController
 * route: Route::resource('photo', 'PhotoController');
 * Actions Handled By Resource Controller
 *
 * Partial Resource Routes
 * Route::resource('photo', 'PhotoController',
 * ['only' => ['index', 'show']]);
 * Route::resource('photo', 'PhotoController',
 * ['except' => ['create', 'store', 'update', 'destroy']]);
 *
 *
 *
 */

//index
//Route::get('/', function () {
//    return view('welcome');
//});

//photo
Route::resource('photo', 'PhotoController',
    ['only' => ['index', 'show']]);

//photo comments
//Nested Resources
Route::resource('photo.comments', 'PhotoCommentController',
    ['except' => ['create', 'store', 'update', 'destroy', 'edit']]);

//photo comments like
Route::resource('photo.comment.likes', 'PhotoCommentLikeController',
    ['only' => ['index', 'show', 'create']]);


//Supplementing Resource Controllers
//Route::get('photos/popular', 'PhotoController@method');
//Route::resource('photos', 'PhotoController');