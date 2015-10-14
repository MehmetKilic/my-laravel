<?php

	/* 
		Author -> Mehmet Kılıç | mail@mehmetkilic.com.tr
		Create -> 24.02.2015   | 16:39
		@todo  -> Helper fonksiyonlarının yer aldığı kütüphane classı.
	*/

	class Library
	{
		/* 
			@todo 
			Botlar Find fonksiyonu ile ilgili bot kaynağında belirtilen dataları arayıp
			geri döndürürler.
			
			@params
			$start = Aranacak alanın başlangıcı, 
			$end   = Aranacak alanın bitişi, 
			$text  = Aranacak olan text değer
		*/
		public static function Find($start, $end, $text)
		{
		    @preg_match_all('/' . preg_quote($start, '/') .
		    '(.*?)'. preg_quote($end, '/').'/i', $text, $data);

		    return @$data[1];
		}

		/*
			@todo
			Gidilecek bot kaynağına bir cihazdan bağlanırcasına oturum başlatır

			@params
			@url = Gidilecek site adresi
		*/
		public static function ConnectCurl($url)
		{
			$useragent = 'Mozilla/5.0 (compatible; Googlebot/2.1; +[url]http://www.google.com/bot.html)';
			$referer = 'http://www.google.com/'; 
			$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
			$header[] = "Cache-Control: private, max-age=0";
			$header[] = "Connection: keep-alive";
			$header[] = "Keep-Alive: 115";
			$header[] = "Accept-Charset: ISO-8859-9,utf-8;q=0.7,*;q=0.7";
			$header[] = "Accept-Language: tr-TR,tr;q=0.8,en-us;q=0.5,en;q=0.3";
			$header[] = "Pragma: "; 
			$ch = curl_init();
			curl_setopt ($ch, CURLOPT_URL, $url); 
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
			curl_setopt ($ch, CURLOPT_HTTPHEADER , $header); 
			curl_setopt ($ch, CURLOPT_REFERER, $referer); 
			curl_setopt ($ch, CURLOPT_USERAGENT, $useragent); 
			$return = curl_exec($ch); 
			$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	        if($status != 200)
	        {
	        	throw new Exception("Siteye erisilemedi!");
	        }
			curl_close($ch); 

	        return str_replace(array("n","t","r"),null,$return);
		}

		/*
			@todo
			Verilen string değerleri seo link haline getirir

			@params
			@link = Sef link haline getirilecek string değer
		*/
		public static function SeoLink($link) 
	    {
	        $tr = array('ş','Ş','ı','İ','ğ','Ğ','ü','Ü','ö','Ö','ç','Ç','"');
	        $en = array('s','s','i','i','g','g','u','u','o','o','c','c','tire');
	        $link = str_replace($tr,$en,$link);
	        $link = strtolower($link);
	        $link = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '-', $link);
	        $link = preg_replace('/[^%a-z0-9 _-]/', '-', $link);
	        $link = preg_replace('/\s+/', '-', $link);
	        $link = preg_replace('|-+|', '-', $link);
	        $link = str_replace("--","-",$link);
	        $link = trim($link, '-');

	        return $link;

	    }
	}