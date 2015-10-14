<?php

	/** 
		* @author -> Mehmet Kılıç | mail@mehmetkilic.com.tr
		* @create -> 25.08.2015   | 15:44
		* @todo   -> Admin paneli anasayfası
	*/

	namespace admin\system;
	use BaseController, View, Redirect, Input, Members, Site;

	class HomeController extends BaseController
	{
		public function Index()
		{
			$allMembers 	= Members::orderBy('member_id', 'desc')->take(10)->get();
			$allWebSites 	= Site::orderBy('site_id', 'desc')->take(10)->get(); 

			return View::make('admin.layouts.home', compact('allMembers', 'allWebSites'));
		}
	}