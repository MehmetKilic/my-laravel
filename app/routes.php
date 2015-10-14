<?php

/* 
|--------------------------------------------------------------------------
| Mehmet Kılıç -> www.mehmetkilic.com.tr | mail@mehmetkilic.com.tr
|--------------------------------------------------------------------------


/* 
|--------------------------------------------------------------------------
| FRONT-END ROTALARI
|--------------------------------------------------------------------------
*/

	// Member Panel Routes

	define("MEMBOARD", "panel");
	Route::group(array('prefix' => MEMBOARD, 'before' => 'members'), function() 
	{
		Route::get('/', array('as' => 'index.home','uses' => 'index\LoginController@getIndex'));
	});

	Route::post(MEMBOARD.'/login', 
	        array("as" => "index.login", "uses" => "index\LoginController@login")
	);

	Route::get(MEMBOARD.'/logout', 
	        array("as" => "index.logout", "uses" => "index\LoginController@logout")
	);

	// Anasayfa rotaları
	Route::any('/', 'index\IndexController@index'); 

	Route::any('/lookup', 'index\IndexController@Lookup');

	// Dışarıdan data çalıştırmak için rota
	Route::any('/data/start/{id}', 'index\DataController@Start');
/* 
|--------------------------------------------------------------------------
| BACK-END ROTALARI
|--------------------------------------------------------------------------
*/
	// Admin rotaları
	define("DASHBOARD", "ypanel");
	Route::group(array('prefix' => DASHBOARD, 'before' => 'auth'), function() 
	{
	    Route::get('/', array('as' => 'admin.home','uses' => 'admin\system\HomeController@Index'));
	    Route::controller('/home', 'admin\system\HomeController');

		// Panel dashboard rotası
		Route::any('/ypanel', 'admin\system\HomeContoller@Index');
		Route::any('/home', 'admin\system\HomeContoller@Index');

		// Kullanıcı yönetim rotaları
		Route::any('/members', 'admin\system\MemberController@Index');
		Route::any('/members/edit/{id}', 'admin\system\MemberController@Edit');
		Route::any('/members/delete/{id}', 'admin\system\MemberController@Delete');
		Route::any('/members/approve/{id}', 'admin\system\MemberController@Approve');

		// Site yönetim rotaları
		Route::any('/site', 'admin\system\SiteController@Index');
		Route::any('/site/edit/{id}', 'admin\system\SiteController@Edit');
		Route::any('/site/delete/{id}', 'admin\system\SiteController@Delete');
		Route::any('/site/approve/{id}', 'admin\system\SiteController@Approve');


		// Dil yönetim rotaları
		Route::any('/language', 'admin\system\LanguageController@Index');
		Route::any('/language/insert/{id}', 'admin\system\LanguageController@Insert');
		Route::any('/language/edit/{id}', 'admin\system\LanguageController@Edit');
		Route::any('/language/delete/{id}', 'admin\system\LanguageController@Delete');


		// Web Service yönetim rotaları
		Route::any('/webservice', 'admin\ServicesController@Index');
		Route::any('/webservice/insert', 'admin\ServicesController@Insert');
		Route::any('/webservice/edit/{id}', 'admin\ServicesController@Edit');
		Route::any('/webservice/delete/{id}', 'admin\ServicesController@Delete');

		// Soap Servis yönetim rotaları
		Route::any('/soap/management/{id}', 'admin\ServicesController@GetSoap');

		// Blog Kategori yönetim rotaları
		Route::any('/blog/categories/', 'admin\CategoryController@Index');
		Route::any('/blog/categories/insert', 'admin\CategoryController@Insert');
		Route::any('/blog/categories/edit/{id}', 'admin\CategoryController@Edit');
		Route::any('/blog/categories/delete/{id}', 'admin\CategoryController@Delete');

		// Blog Postları yönetim rotaları
		Route::any('/blog/posts/', 'admin\PostsController@Index');
		Route::any('/blog/posts/insert', 'admin\PostsController@Insert');
		Route::any('/blog/posts/edit/{id}', 'admin\PostsController@Edit');
		Route::any('/blog/posts/delete/{id}', 'admin\PostsController@Delete');

		// Profil yönetimi rotaları
		Route::any('/profile', 'admin\ProfileController@MyProfile');
		Route::any('/profile/updatepassword', 'admin\ProfileController@UpdatePassword');

		// Data yönetimi rotaları
		Route::any('/data/start/{id}', 'admin\DataController@Start');



		// 404 rotaları
		Event::listen('404', function()
		{
			return Response::error('404');
		});

	});

	// Oturum kontrolü için gerekli rotalar
	Route::post(DASHBOARD.'/login', 
	        array("as" => "admin.login", "uses" => "admin\system\LoginController@login")
	);
	Route::get(DASHBOARD.'/logout', 
	        array("as" => "admin.logout", "uses" => "admin\system\LoginController@logout")
	);