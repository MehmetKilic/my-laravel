<?php 		

	namespace index;	
	use View,User,Redirect,Auth,Input,Request,Hash,BaseController,DB,Validator,Session;		

	class LoginController extends BaseController	
	{		
		public function index()		
		{	    		
			return View::make('index.layouts.login');    	
		}		

		public function login()		
		{			
			// Beni hatırlasın aktif mi kontrol ediyoruz			
			$remember = false;
			// Verilerimizi alıyoruz
			$userdata = array('member_email' => Input::get('username'),	'password' => Input::get('password'));			
			// Gelecek veriler için kurallar oluşturuyoruz		
			$rules = array('member_email'  => 'Required','password'	=> 'Required');			
			// Form alanlarını kontrol ediyoruz			
			$validator = Validator::make($userdata, $rules);
			// Eğer form dolu ise giriş yapmasına izin veriyoruz
			if ($validator->passes())
			{				
				// Kimlik bilgilerini kontrol ediyoruz				
				if (Auth::members()->attempt($userdata, $remember))				
				{					
					// Eğer bilgiler doğru ise					
					//Session::put('admin', Auth::admin());					
					return Redirect::intended('panel');				
				}				
				else
				{					
					// Eğer bilgiler yanlış ise					
					return Redirect::to('/panel')->with('error', '<strong>HATA ! </strong> Giriş bilgilerinizi kontrol ediniz.');
				}			
			}			
			else			
			{	
				// Eğer bilgi girmemiş ise				
				return Redirect::to('/panel')->with('error', '<strong>HATA ! </strong> lütfen formu doldurunuz.');			
			}					
		}		
		public function logout()		
		{				
			// Çıkış işlemini yapıyoruz			
			Auth::members()->logout();			
			Session::forget('members');			
			return Redirect::to('/panel')->with('success', '<strong>Başarılı ! </strong> bir şekilde çıkış yaptınız.');		
		}	

		public function getIndex()
		{
			return View::make('index.layouts.home'); 
		}
	}