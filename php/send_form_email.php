<?php
error_reporting(-1);
ini_set('display_errors', 'On');
error_reporting('E_ALL');

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$text = htmlspecialchars($text);

$name = urldecode($name);
$email = urldecode($email);
$text = urldecode($text);

$message = $name;
$message .= $email;
$message .= $text;
$to = "khmonolitnbud@gmail.com";
$subject = "Заявка с сайта";

echo $name."<br/>";
echo $email."<br/>";
echo $text."<br/>";

if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność name'a
		//Sprawdzenie długości name
		if ((strlen($name)<3) || (strlen($name)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_name']="Имя должно быть от 3 до 20 знаков";
		}
		
		if (ctype_alnum($name)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_name']="Имя может только состоявлять буквы и цифры!";
		}

		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Неправильный електронный адресс!";
		}		

if ($wszystko_OK==true)
{
	if (mail($to, $subject, $message))
    {
	   echo "Успешно!";
	   header('Location: index.php');
	   exit();
	   
	} else
		{
			// создать этот файл и вписать текст
			echo "Извиняемся на сервере проблема!";
			header('Location: index.php');
	   		exit();
		}
} else
	{
		//echo "complete!";
		// создать этот файл и вписать текст
		header('Location: error.php');
	   	exit();
	}
}

?>