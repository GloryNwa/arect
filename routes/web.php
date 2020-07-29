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
Auth::routes();
Route::get('/', function () {
    return view('index');
});



Route::get('/index', 'HomeController@index')->name('index');
Route::get('/about/arects', 'HomeController@about')->name('about');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/our/services', 'HomeController@services')->name('services');
Route::get('/our/clients', 'HomeController@clients')->name('clients');
Route::get('/contact/arects', 'HomeController@contactus')->name('contactus');
Route::post('/contact', 'HomeController@contact')->name('contact');




Route::group(['middleware'=>['auth']], function (){
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/logout', 'AdminController@logout')->name("logout");
Route::get('/upload/banner/image', 'AdminController@uploadBannerImage')->name('uploadBannerImage');
Route::post('banner', 'AdminController@banner')->name('banner');
Route::get('/upload/services', 'AdminController@uploadServices')->name('uploadServices');
Route::post('/service', 'AdminController@service')->name('service');
Route::get('/upload/client', 'AdminController@uploadClient')->name('uploadClient');
Route::post('/client', 'AdminController@client')->name('client');
Route::get('/upload/about', 'AdminController@uploadAbout')->name('uploadAbout');
Route::post('/aboutpage', 'AdminController@aboutpage')->name('aboutpage');
Route::get('/upload/portfolio', 'AdminController@uploadPortfolio')->name('uploadPortfolio');
Route::post('/portfolio', 'AdminController@portfolio')->name('portfolio');
Route::get('/add/todo', 'AdminController@addTodo')->name('addTodo');
Route::get('/manage/todo', 'AdminController@manageTodo')->name('manageTodo');



Route::get('/all/events', 'EventController@events')->name('events');
Route::get('/add/todo', 'EventController@addTodo')->name('addTodo');
Route::get('/manage/todo', 'EventController@manageTodo')->name('manageTodo');
Route::get('/request/leave', 'EventController@leave')->name('leave');


Route::get('/profile', 'ProfileController@profile')->name('profile');


Route::get('/sub/Dept', 'DepartmentController@subDept')->name('subDept');
Route::get('/hr', 'DepartmentController@hr')->name('hr');
Route::get('/line/manager', 'DepartmentController@lineManager')->name('lineManager');

Route::get('/all/icm/staff/members','HrController@icmStaffs')->name('icmStaffs');
Route::get('/all/report', 'HrController@allReport')->name('allReport');
Route::get('/unit/report', 'HrController@unitReport')->name('unitReport');
Route::get('/leave/requests', 'HrController@leaveRequest')->name('leaveRequest');
Route::get('/manage/event', 'HrController@manageEvent')->name('manageEvent');
Route::get('/leave/request', 'HrController@leaveRequest')->name('leaveRequest');

Route::get('/manage/report', 'ReportController@manageReport')->name('manageReport');
Route::get('/upload/report', 'ReportController@uploadReport')->name('uploadReport');
Route::post('/report', 'ReportController@report')->name('report');
Route::get('/task/board', 'ReportController@taskboard')->name('taskboard');

});