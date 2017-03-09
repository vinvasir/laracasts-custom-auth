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
		$tasks = App\Task::all();

    return view('welcome', [
    		'name' => "Laracasts",
    		'age' => 155,
    		'tasks' => $tasks
  	]);
})->name('home');


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/new', 'TasksController@new');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/about', function() {
		return view('about');
});

Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/new', 'PostsController@new');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');