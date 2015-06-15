<?php

		function strip_all($str_to_strip)
		 {
			$striped=strip_tags($striped);
		 	$striped=urldecode($str_to_strip);
		 	$striped=mysql_escape_string($striped);
		 	return $striped;
		 }
		//print_r($_POST);
		// $fname = $_POST['style'];
		// $femail = $_POST['email'];
		// $fphone = $_POST['phone'];



		if($_POST['title'] != ''){
			$headers = 'MIME-Version: 1.0' . "\r\n" ;
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n" ;
			$headers .= 'From: Alphahazz <info@borjomi.com>' . "\r\n";
			$message = $_SERVER['REMOTE_ADDR'].'<br>';
			$message = $message.'<br>Чи можете ви виступати в період з 25 до 29 червня?:<br>'.$_POST['aa'].'<br>';

			$message = $message.'<br>Як називається ваш музичний гурт?:<br>'.$_POST['title'].'<br>';

			$message = $message.'<br>Музику якого стилю\напряму ви виконуєте?:<br>'.$_POST['style'].'<br>';

			$message = $message.'<br>Які інструменти ви використовуєте?:<br>'.$_POST['instrum'].'<br>';

			$message = $message.'<br>Скільки музикантів у вашому гурті?:<br>'.$_POST['number'].'<br>';


			$message = $message.'<br>Коли був створений ваш колектив? Назвіть дату.:<br>'.$_POST['birth'].'<br>';

			$message = $message.'<br>Дайте посилання на відео :<br>'.$_POST['youtube'].'<br>';
			$message = $message.'<br>Скільки кавер-версій у вашому репертуарі? :<br>'.$_POST['covers'].'<br>';

			$message = $message.'<br>Скільки авторських композицій у вашому репертуарі?:<br>'.$_POST['compos'].'<br>'; 


			$message = $message.'<br>Чи є у вас концертні костюми?:<br>'.$_POST['bb'].'<br>';


			$message = $message.'<br>Чи брали ви участь у фестивалях і конкурсах?:<br>'.$_POST['fest'].'<br>';

			$message = $message.'<br>Вкажіть іншу інформацію про ваш гурт:<br>'.$_POST['other'].'<br>';

			$message = $message.'<br>Вкажіть НОМЕР ТЕЛЕФОНА:<br>'.$_POST['phone'].'<br>';

			$message = $message.'<br>ВКАЖІТЬ e-mail:<br>'.$_POST['email'].'<br>';






			mail('alisa.grynchuk@gmail.com,d.samsonov@ids-borjomi.com', '[borjomi jazz] Zayavka', $message, $headers);
			// mail('akella.a@gmail.com, alisa.grynchuk@gmail.com,d.samsonov@ids-borjomi.com', '[borjomi jazz] Zayavka', $message, $headers);
		}
		// echo $message;
		// print_r($_POST);
		?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Borjomi</title>
	<meta name="viewport" content="initial-scale=1"/>
	<link rel="stylesheet" media="screen" href="css/screen.css" >
	<link rel="stylesheet" media="screen" href="css/social.css" >
	<link rel="stylesheet" media="screen" href="css/slick.css" >
    <meta property="og:title" content="Сцена, що не стоїть на місці." />
    <meta property="og:description" content="Дивись живі концерти на даху автобуса Borjomi, що подорожує вулочками Львова." />
    <meta property="og:image" content="http://www.borjomi.com/promo/img/share.jpg"/>
    <meta itemprop="name" content="Сцена, що не стоїть на місці.">
    <meta itemprop="description" content="Дивись живі концерти на даху автобуса Borjomi, що подорожує вулочками Львова.">
    <meta itemprop="image" content="http://www.borjomi.com/promo/img/share.jpg">
</head>
<body class="insidepage">


<!-- BEGIN  out-->
<div class="out">

 <div class="h">
 	<a onclick="history.go(-1);"  class="h__back">повернутися</a>
 	<div class="h__text">
 		Форма реєстрації для участі<br>
у Фестивалі виконавців джазу
 	</div>
 </div>
	<div class="form">
		<p class="danke">Дякуємо за реєстрацію.<br>
Чекайте на результати відбору!</p>
	</div>
	
</div>
<!-- END out-->

<script src="js/lib/head.js" data-headjs-load="js/init.js"></script>
</body>
</html>