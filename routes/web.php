<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//other pages 

Route::get( '/index', function(){return view('pages.index');});
Route::get( '/about', function(){return view('pages.about');});
Route::get( '/admission', function(){return view('pages.admission');});
Route::get( '/all-courses', function(){return view('pages.all-courses');});
Route::get( '/awards', function(){return view('pages.awards');});
Route::get( '/blog-details', function(){return view('pages.blog-details');});
Route::get( '/blog', function(){return view('pages.blog');});
Route::get( '/contact-us', function(){return view('pages.contact-us');});
Route::get( '/course-details', function(){return view('pages.course-details');});
Route::get( '/dashboard', function(){return view('pages.dashboard');});
Route::get( '/db-courses', function(){return view('pages.db-courses');});
Route::get( '/db-exams', function(){return view('pages.db-exams');});
Route::get( '/db-profile', function(){return view('pages.db-profile');});
Route::get( '/db-time-line', function(){return view('pages.db-time-line');});
Route::get( '/departments', function(){return view('pages.departments');});
Route::get( '/event-details', function(){return view('pages.event-details');});
Route::get( '/event-register', function(){return view('pages.event-register');});
Route::get( '/event', function(){return view('pages.event');});
Route::get( '/facilities-detail', function(){return view('pages.facilities-detail');});
Route::get( '/facilities', function(){return view('pages.facilities');});
Route::get( '/gallery-photo', function(){return view('pages.gallery-photo');});
Route::get( '/index-1', function(){return view('pages.index-1');});
Route::get( '/index-2', function(){return view('pages.index-2');});
Route::get( '/research', function(){return view('pages.research');});
Route::get( '/sdb-course-edit', function(){return view('pages.sdb-course-edit');});
Route::get( '/sdb-course-view', function(){return view('pages.sdb-course-view');});
Route::get( '/seminar', function(){return view('pages.seminar');});



























//Admin

Route::get( '/admin', function(){return view('pages.admin');});

Route::get( '/admin-about-menu', function(){ return view('pages.admin-about-menu');});

Route::get( '/admin-user-all', function(){ return view('pages.admin-user-all');});
Route::get( '/admin-about-menu', function(){ return view('admin-about-menu');});

Route::get( '/admin-add-courses', function(){ return view('pages.admin-add-courses');});

Route::get( '/admin-admission-enquiry', function(){ return view('pages.admin-admission-enquiry');});

Route::get( '/admin-all-courses', function(){ return view('admin-all-courses');});

Route::get( '/admin-all-enquiry', function(){ return view('pages.admin-all-enquiry');});

Route::get( '/admin-all-menu', function(){ return view('pages.admin-all-menu');});
Route::get( '/admin-common-enquiry', function(){ return view('pages.admin-common-enquiry');});

Route::get( '/admin-course-details', function(){ return view('pages.admin-course-details.blade');});

Route::get( '/admin-course-enquiry', function(){ return view('pages.admin-course-enquiry');});

Route::get( '/admin-event-add', function(){ return view('pages.admin-event-add');});

Route::get( '/admin-event-all', function(){ return view('pages.admin-event-all');});

Route::get( '/admin-event-edit', function(){ return view('pages.admin-event-edit');});

Route::get( '/admin-event-enquiry', function(){ return view('pages.admin-event-enquiry');});

Route::get( '/admin-exam-add', function(){ return view('pages.admin-exam-add');});

Route::get( '/admin-exam-all', function(){ return view('pages.admin-exam-all');});

Route::get( '/admin-exam-edit', function(){ return view('pages.admin-exam-edit');});

Route::get( '/admin-exam-group-add', function(){ return view('pages.admin-exam-group-add');});
Route::get( '/admin-exam-group-all', function(){ return view('pages.admin-exam-group-all');});
Route::get( '/admin-exam', function(){ return view('pages.admin-exam');});
Route::get( '/admin-export-data', function(){ return view('pages.admin-export-data');});

Route::get( '/admin-forgot', function(){ return view('pages.admin-forgot');});
Route::get( '/admin-import-data', function(){ return view('pages.admin-import-data');});
Route::get( '/admin-job-add', function(){ return view('pages.admin-job-add');});
Route::get( '/admin-job-all', function(){ return view('pages.admin-job-all');});
Route::get( '/admin-job-edit', function(){ return view('pages.admin-job-edit');});
Route::get( '/admin-login', function(){ return view('pages.admin-login');});
Route::get( '/admin-main-menu', function(){ return view('pages.admin-main-menu');});
Route::get( '/admin-main-menu', function(){ return view('pages.admin-main-menu');});
Route::get( '/admin-page-add', function(){ return view('pages.admin-page-add');});
Route::get( '/admin-page-all', function(){ return view('pages.admin-page-all');});
Route::get( '/admin-page-edit', function(){ return view('pages.admin-page-edit');});

Route::get( '/admin-panel-setting', function(){ return view('pages.admin-panel-setting');});

Route::get( '/admin-quick-link', function(){ return view('pages.admin-quick-link');});

Route::get( '/admin-seminar-add', function(){ return view('pages.admin-seminar-add');});
Route::get( '/admin-seminar-all', function(){ return view('pages.admin-seminar-all');});
Route::get( '/admin-seminar-edit', function(){ return view('pages.admin-seminar-edit');});
Route::get( '/admin-seminar-enquiry', function(){ return view('pages.admin-seminar-enquiry');});
Route::get( '/admin-setting', function(){ return view('pages.admin-setting');});

Route::get( '/admin-setting', function(){ return view('pages.admin-setting');});
Route::get( '/admin-slider-edit', function(){ return view('pages.admin-slider-edit');});

Route::get( '/admin-slider', function(){ return view('pages.admin-slider');});

Route::get( '/admin-slider', function(){ return view('pages.admin-slider');});

Route::get( '/admin-student-details', function(){ return view('pages.admin-student-details');});

Route::get( '/admin-trash-courses', function(){ return view('pages.admin-trash-courses');});

Route::get( '/admin-user-add', function(){ return view('pages.admin-user-add');});
Route::get( '/admin-user-all', function(){ return view('pages.admin-user-all');});
Route::get( '/admin-view-enquiry', function(){ return view('pages.admin-view-enquiry');});
















































Route::any( '(.*)', function( $page ){
    dd($page);
});



// Route::get('/{any?}', function () {
//     return view('pages.index');
// })->where('any', '^(?!api\/)[\/\w\.-]*');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
