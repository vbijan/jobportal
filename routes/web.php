<?php


/*Route::get('/', function () {
	$jobs = App\Job::all();
    return view('welcome',[
    	'jobs'=>$jobs,
    ]);
});*/

Route::get('/','JobController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('category', 'CategoryController');

Route::get('/category', 'CategoryController@create');
Route::post('/category', 'CategoryController@store')->name('add_category');
Route::get('/show_category','CategoryController@show');
Route::get('/category/{slug}','CategoryController@jobs');
Route::get('/category/{id}/edit','CategoryController@edit');
Route::patch('/category/update/{id}','CategoryController@update')->name('category.update');
Route::get('/category/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');


Route::get('/company', 'CompanyController@create');
Route::post('/company', 'CompanyController@store')->name('add_company');
Route::get('/show_company','CompanyController@show');
Route::get('/company/{company}', 'CompanyController@view');

Route::get('/job', 'JobController@create');
Route::post('/job', 'JobController@store')->name('add_job');
Route::get('/show_jobs','JobController@show');
Route::get('/job/{job}','JobController@view');


Route::get('/job_seeker_register','RegisterController@jobseeker_register');
Route::post('/job_seeker_register','RegisterController@store');

Route::get('/employer_register','RegisterController@employer_register');
Route::post('/employer_register','RegisterController@insert');

Route::get('/dashboard','DashboardController@index')->name('home');


Route::get('/show_member_details/{id}','MemberController@show');
Route::get('/show_jobseeker_details/{id}','MemberController@view');

Route::get('/companies','MemberController@companies');
Route::get('/jobseekers','MemberController@jobseekers');


