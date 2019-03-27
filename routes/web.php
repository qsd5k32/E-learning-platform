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
Route::get('/', 'HomeController@welcome')->middleware('guest');
Route::get('/test', 'HomeController@test');


// contact routes
Route::get('/contact', 'ContactController@index')->name('contact')->middleware('guest');
Route::post('/contact', 'ContactController@create')->name('sendContact')->middleware('guest');

// blog routes
Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/post/{id}', 'PostController@postView')->name('postView');

// Auth pages
Auth::routes(['verify' => true]);
Route::get('logout', 'Auth\LoginController@logout');

// course information
Route::get('/course/info/{id}', 'CoursesController@moreInfo')->name('courseInfo');
// courses list
Route::get('/courses', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
// public chat
Route::get('/chatPublic', 'PublicChatController@index')->name('chatPublic');
Route::post('/chatPublic/add', 'PublicChatController@create')->name('addChat');



// ###############"[ routes groups }##################""""
//routes need auth and verified permissions
Route::group(['middleware' => ['verified', 'auth']], function () {
    // save Account details
    Route::get('/account/details', 'AccountController@index')->name('account');
    Route::post('/account/details', 'AccountController@setData');
    Route::get('/account/setting', 'settingController@index');
    Route::post('/account/setting', 'settingController@update');
    // enroll to course
    Route::get('/enroll/{course_id}', 'EnrollController@enroll')->name('enroll');
    // send prove
    Route::post('/payment/prove/{course_id}', 'paymentController@sendProve')->name('paymentProve');
    // playlist
    Route::get('/course/playlist/{id}', 'CoursesController@viewPlaylist')->name('playlist')->middleware('details');
    Route::get('/myCourses', 'EnrollController@myCourses')->name('myCourses');
    // view video
    Route::get('/course/playlist/video/{id}/{course_id}/{token}', 'CoursesController@viewCourse')->name('view');
    // video source
    Route::get('/video/{id}/{token}', 'videoController@url')->name('video');
    // article content view
    Route::get('/course/playlist/article/{id}/{course_id}/{token}', 'ArticleController@index')->name('article');
    // file content view
    Route::get('/course/playlist/file/{id}/{course_id}/{token}', 'FileController@download')->name('file');
});

// teacher permission
Route::group(['middleware' => ['verified', 'teacher', 'auth']], function () {
    // course Create
    Route::get('/course/create', 'CourseController@index')->name('createCourse');
    Route::post('/course/create', 'CourseController@createNew');
    // course edit or add

    // courses created with author
    Route::get('/teacher/courses/', 'ContentController@index')->name('coursesTeacher');
    // add content
    Route::get('/course/content/add/{id}', 'ContentController@add')->name('addContent');
    Route::post('/course/content/add/{id}', 'ContentController@set')->name('setContent');
    //edit content
    Route::get('/course/content/edit/{id}', 'ContentController@edit')->name('editContent');
    // update Content
    Route::get('/course/content/edit/update/{id}', 'ContentController@update')->name('updateContent');
    Route::post('/course/content/edit/update/{id}', 'ContentController@setUpdate')->name('updateContent');
    // delete content
    Route::get('/course/content/delete/{id}', 'ContentController@delete')->name('deleteContent');
    // edit course
    Route::get('/course/edit/{id}', 'CourseController@updateCourse')->name('editCourse');
    Route::post('/course/edit/{id}', 'CourseController@update');
    // add section
    Route::post('/section/add/', 'SectionController@create')->name('createSection');
    Route::get('/section/delete/{id}', 'SectionController@destroy')->name('deleteSection');

});

// admin permission
Route::group(['middleware' => ['verified', 'admin', 'auth']], function () {

    Route::get('/admin/index', 'adminController@index')->name('adminPage');
    Route::get('/admin/payment/{id}', 'adminController@payment')->name('payment');
    // blog
    Route::get('/admin/blog','PostController@createView')->name('adminBlog');
    Route::post('/admin/blog/create', 'PostController@create')->name('createPost');
    Route::get('/admin/blog/edit', 'PostController@edit')->name('editPost');
    // destroy post
    Route::get('/admin/blog/delete/{id}', 'PostController@destroy')->name('deletePost');
    // update posts
    Route::get('/admin/blog/update/{id}', 'PostController@update')->name('updatePost');
    Route::post('/admin/blog/update/{id}', 'PostController@setUpdate')->name('setUpdatePost');
    // Contacts
    Route::get('/admin/contact/list/', 'ContactController@viewLists')->name('listContact');
    Route::post('/admin/send/reply/{id}', 'ContactController@reply')->name('sendReply');


});