<?php 		

	namespace admin\system;	
	use View,User,Redirect,Auth,Input,Request,Hash,BaseController,DB,Validator,Session;		

	class LoginController extends BaseController	
	{		
		public function index()		
		{	    		
			return View::make('admin.layouts.login');    	
		}		

		public function login()		
		{			
			// Beni hatırlasın aktif mi kontrol ediyoruz			
			$remember = false;
			// Verilerimizi alıyoruz
			$userdata = array('admin_email' => Input::get('username'),	'password' => Input::get('password'));			
			// Gelecek veriler için kurallar oluşturuyoruz		
			$rules = array('admin_email'  => 'Required','password'	=> 'Required');			
			// Form alanlarını kontrol ediyoruz			
			$validator = Validator::make($userdata, $rules);
			// Eğer form dolu ise giriş yapmasına izin veriyoruz
			if ($validator->passes())
			{				
				// Kimlik bilgilerini kontrol ediyoruz				
				if (Auth::admin()->attempt($userdata, $remember))				
				{					
					// Eğer bilgiler doğru ise					
					//Session::put('admin', Auth::admin());					
					return Redirect::intended('ypanel');
				}				
				else
				{					
					// Eğer bilgiler yanlış ise					
					return Redirect::to('/ypanel')->with('error', '<strong>HATA ! </strong> Giriş bilgilerinizi kontrol ediniz.');
				}			
			}			
			else			
			{	
				// Eğer bilgi girmemiş ise				
				return Redirect::to('/ypanel')->with('error', '<strong>HATA ! </strong> lütfen formu doldurunuz.');			
			}					
		}		
		public function logout()		
		{				
			// Çıkış işlemini yapıyoruz			
			Auth::admin()->logout();			
			Session::forget('admin');			
			return Redirect::to('/ypanel')->with('success', '<strong>Başarılı ! </strong> bir şekilde çıkış yaptınız.');		
		}	
	}