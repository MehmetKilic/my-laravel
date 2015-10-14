<?php 

	/* 
		Author -> Mehmet Kılıç | mail@mehmetkilic.com.tr
		Create -> 25.08.2015   | 09:39
		@todo  -> Anasayfada olması gereken tüm işlemleri işler ve view'a aktarır.
	*/

	namespace index;
	use BaseController, View, Hash, DB;
	
	class IndexController extends BaseController
	{
		public function index()
		{
			return 'Hosgeldin yuregime, hadi hadi hadi :)';
			/*
			$data = DB::connection('mongodb')->collection('data')->get();
			foreach ($data as $key => $value) 
			{
				echo $value['data_kod'][0].' => '.$value['data_tur'].' => '.$value['data_aciklama'][0].' => '.$value['data_alis'][0].     '<br>';

			}
			
			if($_POST)
			{
				return 'Pisst bekle...';
			}
			else
			{
				return View::make('index.layouts.index');
			}
			*/
		}

		public function Lookup()
		{
			if($_POST)
			{
				$query = DB::table('data')->insert(array(
					'id'	=> '',
					'text'	=> json_encode($_POST)
				));

				if($query)
				{
					return 'işlem gerçekleti!';
				}
				else
				{
					return 'hatalı işlem!';
				}
			}
			else
			{
				return 'post gelmedi';
			}
		}
	}