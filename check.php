<?php 
	//print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];
	$error ='';
	if(trim($email) == '')// trim удаляет пробелы до и после
		$error = 'Введите ваш емаил';
	if(trim($message) == '')// trim удаляет пробелы до и после
		$error = 'Введите сообщение';
	if($error !=''){
		echo $error;
		exit;
	}	

	$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
	$headers = "From: $email\r\nRely-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
	mail('arildm@mail.ru', $subject, $message, $headers);

	header('Location: /contacts.php');
	?>
