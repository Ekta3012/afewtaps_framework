<?php

/* ================== Homepage ================== */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::auth();

/* ================== Access Uploaded Files ================== */

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';
	
	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}

Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
	
	/* ================== Dashboard ================== */
	
	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
	
	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');
	
	
	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');
	
	
	
	


	/* ================== Blogs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/blogs', 'LA\BlogsController');
	Route::get(config('laraadmin.adminRoute') . '/blog_dt_ajax', 'LA\BlogsController@dtajax');

	/* ================== Blogs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/blogs', 'LA\BlogsController');
	Route::get(config('laraadmin.adminRoute') . '/blog_dt_ajax', 'LA\BlogsController@dtajax');

	/* ================== Faqs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/faqs', 'LA\FaqsController');
	Route::get(config('laraadmin.adminRoute') . '/faq_dt_ajax', 'LA\FaqsController@dtajax');

	/* ================== Faqs ================== */
	Route::resource(config('laraadmin.adminRoute') . '/faqs', 'LA\FaqsController');
	Route::get(config('laraadmin.adminRoute') . '/faq_dt_ajax', 'LA\FaqsController@dtajax');
});
