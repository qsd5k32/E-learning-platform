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
// welcome page
Route::get('/', function () { return view('welcome'); })->middleware('guest');

// Auth pages
Auth::routes(['verify' => true]);
Route::get('logout', 'Auth\LoginController@logout');

// course information
Route::get('/course/info/{id}','coursesController@moreInfo')->name('courseInfo');
// courses list
Route::get('/home', 'HomeController@index')->name('home');

//routes need auth and verified permissions
Route::group(['middleware' => ['verified','auth']], function () {
    // save Account details
    Route::get('/account/details','accountController@index');
    Route::post('/account/details','accountController@setData');
    // enroll to course
    Route::get('/enroll/{course_id}','enrollController@enroll')->name('enroll');
    // playlist
    Route::get('/course/playlist/{id}','coursesController@viewPlaylist')->name('playlist');
    Route::get('/myCourses','enrollController@myCourses')->name('myCourses');
    Route::get('/course/playlist/view/{id}','coursesController@viewPlaylist')->name('view');
});

// teacher permission
Route::group(['middleware' => ['verified','teacher','auth']], function () {
    // course Create
    Route::get('/course/create','createCourseController@index')->name('createCourse');
    Route::post('/course/create', 'createCourseController@createNew');
    // course edit or add
    Route::get('/teacher/courses/','addCourseController@index')->name('coursesTeacher');
    Route::get('/course/add/{id}','addCourseController@addContent')->name('addContent');
    Route::post('/course/add/{id}','addCourseController@addContent')->name('addContent');
    Route::get('/course/edit/{id}','createCourseController@updateCourse')->name('editCourse');
    Route::post('/course/edit/{id}','createCourseController@update')->name('editCourse');
});

// admin permission
Route::group(['middleware' => ['verified','admin','auth']], function () {
    Route::get('/admin/index','adminController@index')->name('adminPage');
});