<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>İletişim Formu Gönderisi</h2>

		<div>
			Merhaba sitenizin iletişim formu kısmından yeni bir ileti aldık bilgiler aşağıdadır.
			<br>Adı 		: {{ $name }}</br>
			<br>Soyadı 		: {{ $surname }}</br>
			<br>Gsm			: {{ $mobileno }}</br>
			<br>Konu		: {{ $topic }}</br>
			<br>Mesaj	 	: {{ $mesaj }}</br>
		</div>
	</body>
</html>
