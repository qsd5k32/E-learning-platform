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
Route::get('/test', function () { return view('message.success',['message' => 'hada test bark ya sa7bi']); });


// Auth pages
Auth::routes(['verify' => true]);
Route::get('logout', 'Auth\LoginController@logout');

// course information
Route::get('/course/info/{id}','coursesController@moreInfo')->name('courseInfo');
// courses list
Route::get('/courses', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//routes need auth and verified permissions
Route::group(['middleware' => ['verified','auth']], function () {
    // save Account details
    Route::get('/account/details','accountController@index');
    Route::post('/account/details','accountController@setData');
    Route::get('/account/setting','settingController@index');
    Route::post('/account/setting','settingController@setData');
    // enroll to course
    Route::get('/enroll/{course_id}','enrollController@enroll')->name('enroll');
    // send prove
    Route::post('/payment/prove/{course_id}','paymentController@sendProve')->name('paymentProve');
    // playlist
    Route::get('/course/playlist/{id}','coursesController@viewPlaylist')->name('playlist');
    Route::get('/myCourses','enrollController@myCourses')->name('myCourses');
    // view video
    Route::get('/course/playlist/video/{id}/{token}','coursesController@viewCourse')->name('view');
    // video
    Route::get('/video/{id}/{token}', 'videoController@url')->name('video');
    // article
    Route::get('/course/playlist/article/{id}/{token}', 'articleController@index')->name('article');
    // file
    Route::get('/course/playlist/file/{id}/{token}', 'fileController@download')->name('file');
});

// teacher permission
Route::group(['middleware' => ['verified','teacher','auth']], function () {
    // course Create
    Route::get('/course/create','createCourseController@index')->name('createCourse');
    Route::post('/course/create', 'createCourseController@createNew');
    // course edit or add

    // courses created with author
    Route::get('/teacher/courses/','contentController@index')->name('coursesTeacher');
    // add content
    Route::get('/course/content/add/{id}','contentController@addContent')->name('addContent');
    Route::post('/course/content/add/{id}','contentController@setContent')->name('setContent');
    //edit content
    Route::get('/course/content/edit/{id}','contentController@editContent')->name('editContent');
    // delete content
    Route::get('/course/content/delete/{id}','contentController@deleteContent')->name('deleteContent');
    // edit course
    Route::get('/course/edit/{id}','createCourseController@updateCourse')->name('editCourse');
    Route::post('/course/edit/{id}','createCourseController@update');
});

// admin permission
Route::group(['middleware' => ['verified','admin','auth']], function () {
    Route::get('/admin/index','adminController@index')->name('adminPage');
    Route::get('/admin/payment/{id}/{c_id}','adminController@payment')->name('payment');
});