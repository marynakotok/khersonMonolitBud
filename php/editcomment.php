<?php
  //session_start();
  date_default_timezone_set('Europe/Kiev');
  include 'commentForm.php';
  include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit comment</title>
	<meta charset="utf-8">
<meta name="description" content="Херсон Монолит Буд - строительная компания. Строительство дома, ремонтные работы, и иные допольнительные услуги. Украина, Херсон, Харьков, Чернигов, Луцк, Луганск, Кировоград, Николаев, Одесса, Киев, Берисполь, Львов, Черновцы, Хмельницкий, Ивано-Франковск, Черкассы, Запорожье, Мелитополь, Житомир, Ровное, Тернополь, Винница, Сумы, Донецк, Днипропетровск, Белая Церковь, Кривой Рог и регионы.">
<meta name="keywords" content="Херсон Монолит Буд - строительная компания. Строительство дома, ремонтные работы, и иные допольнительные услуги. Украина, Херсон, Харьков, Чернигов, Луцк, Луганск, Кировоград, Николаев, Одесса, Киев, Берисполь, Львов, Черновцы, Хмельницкий, Ивано-Франковск, Черкассы, Запорожье, Мелитополь, Житомир, Ровное, Тернополь, Винница, Сумы, Донецк, Днипропетровск, Белая Церковь, Кривой Рог и регионы.">
<meta name="author" content="Maryna Kotok">
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/nivo-slider.css">
<link rel="stylesheet" href="../css/prettyPhoto.css">
<link rel="stylesheet" href="../css/style_editcomment.css">
<link rel="stylesheet" href="../css/jScrollPane.css" media="all">
<script src="../js/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
<script src="../js/jquery-1.4.4.min.js"></script>
<script src="../js/jquery.mousewheel.js"></script>
<script src="../js/jScrollPane.js"></script>
<script src="../js/jquery.nivo.slider.pack.js"></script>
<link rel="shortcut icon" href="../images/icons/tools.png" type="image/png" />
<script>
$(window).load(function () {
    $('#slider').nivoSlider();
});
$(function () {
    $('#pane1, #pane2, #pane3').jScrollPane();
});
</script>
<script src="../js/cufon-yui.js"></script>
<script src="../js/jquery.nivo.slider.pack.js"></script>
<script src="../js/jquery.tinycarousel.min.js"></script>
<script src="../js/jquery.prettyPhoto.js"></script>
</head> 
 <div id="maincontainer">
  <div id="slideshow"> <img src="../images/bgSlider/img01.jpg" alt="" class="active"> <img src="../images/bgSlider/img02.jpg" alt=""> <img src="../images/bgSlider/img03.jpg" alt=""> </div>
</div>
<div id="main">
  <header> <a href="../main.php" id="logo">
    <h1><span class="color_orange">Херсон</span><br><span class="color_white">МонолитБуд</span></h1>
    </a>
    <h2 class="slogan color_white">Доступно! Надежно! Стабильно!</h2>
  </header>
<body>

	<?php

		 	$cid = $_POST['cid'];
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $message = $_POST['message'];

             echo "<footer><form method='post' class='edit_comment' action='".editComments($connect)."'>
             		  <input type='hidden' name='cid' value='".$cid."'>
	                  <input type='hidden' name='uid' value='".$uid."'>
	                  <input type='hidden' name='date' value='".$date."'>
	                  <textarea name='message' id='textarea'>".$message."</textarea><br><br>
	                  <button type='submit' class='button' name='commentSubmit'>Редактировать</button>
                  </footer>";
                  
	?>
 <footer>
  <p class="privacy ">ХерсонМонолитБуд &copy; 2017 &nbsp;&nbsp; * | <a href="#"> Лицензия</a></p>
</footer>
<script src="../js/general.js"></script>
</body>
</html> 