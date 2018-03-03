<?php
  //session_start();
  date_default_timezone_set('Europe/Kiev');
  include 'php/commentForm.php';
  require_once 'php/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<title>Херсон Монолит Буд - строительная компания Украины</title>
<meta charset="utf-8">
<meta name="description" content="Херсон Монолит Буд - строительная компания. Строительство дома, ремонтные работы, и иные допольнительные услуги. Украина, Херсон, Харьков, Чернигов, Луцк, Луганск, Кировоград, Николаев, Одесса, Киев, Берисполь, Львов, Черновцы, Хмельницкий, Ивано-Франковск, Черкассы, Запорожье, Мелитополь, Житомир, Ровное, Тернополь, Винница, Сумы, Донецк, Днипропетровск, Белая Церковь, Кривой Рог и регионы.">
<meta name="keywords" content="Херсон Монолит Буд - строительная компания. Строительство дома, ремонтные работы, и иные допольнительные услуги. Украина, Херсон, Харьков, Чернигов, Луцк, Луганск, Кировоград, Николаев, Одесса, Киев, Берисполь, Львов, Черновцы, Хмельницкий, Ивано-Франковск, Черкассы, Запорожье, Мелитополь, Житомир, Ровное, Тернополь, Винница, Сумы, Донецк, Днипропетровск, Белая Церковь, Кривой Рог и регионы.">
<meta name="author" content="Maryna Kotok">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/nivo-slider.css">
<link rel="stylesheet" href="css/prettyPhoto.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/jScrollPane.css" media="all">
<script src="js/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"> </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/jquery-1.4.4.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/jScrollPane.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<link rel="shortcut icon" href="images/icons/tools.png" type="image/png" />
<script>
$(window).load(function () {
    $('#slider').nivoSlider();
});
$(function () {
    $('#pane1, #pane2, #pane3').jScrollPane();
});
</script>
<script src="js/cufon-yui.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/jquery.tinycarousel.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_UA" type="text/javascript"> </script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap;
    var myPlacemark;

function init()
{     
myMap = new ymaps.Map("map", {
center: [46.642139, 32.604372],
zoom: 7
});
                   
myPlacemark = new ymaps.Placemark([46.642139, 32.604372], {
hintContent: 'ХерсонМонолитБуд',
balloonContent: 'Строительная компания'
});
myMap.geoObjects.add(myPlacemark);
}
</script>
</head>
<body>
<div id="maincontainer">
  <div id="slideshow"> <img src="images/bgSlider/img01.jpg" alt="" class="active"> <img src="images/bgSlider/img02.jpg" alt=""> <img src="images/bgSlider/img03.jpg" alt=""> </div>
</div>
<div id="main">
  <header> <a href="main.php" id="logo">
    <h1><span class="color_orange">Херсон</span><br><span class="color_white">МонолитБуд</span></h1>
    </a>
    <h2 class="slogan color_white">Доступно! Надежно! Стабильно!</h2>
  </header>
  <dl id="content">
    <dt class="dt1"><a href="#"></a></dt>
    <dd id="page1">
      <div class="inner">
        <div id="slider"> <img src="images/slider/img01.jpeg" alt="" title="<h1>Мы строим вашу мечту!</h1>"> <img src="images/slider/img02.jpeg" alt="" title="<h1>Креативные решения!</h1>"> <img src="images/slider/img03.jpeg" alt="" title="<h1>Без границ!</h1>"> <img src="images/slider/img04.jpeg" alt="" title="<h1>Время не любит, когда его тратят впустую!</h1><p>Генри Форд</p>"> </div>
      </div>
    </dd>
    <dt class="dt2"><a href="#"></a></dt>
    <dd id="page2">
      <div class="inner">
        <article>
          <h1> <span class="color_orange">О нас </span></h1>
          <div id="pane1" class="scroll-pane about"> <img src="images/about/img03.jpg" class="alignright20 pic" alt="">
            <p style="text-align: center;">
              <span style="font-size:20px;"><span class="bold">Херсон Монолит Буд</span> </span> 
              <span style="font-size:18px;">— крупная строительная компания, осуществляющая деятельность не только в Херсоне, но и <b>на территории всей Украины</b>. <br>
               Генеральное проектирование, строительство, ремонт, дизайн — оптимальное соотношение сроков и стоимости.
              </span>
            </p>
            <p></p>
            <br>
            <p><span class="button" style="margin-left: 130px;"><a href="#services">Виды работ</a></span></p>
            <br>
            <h3>Почему выбирают нас!</h3>
            <ul>
              <li><span class="dropcapspot2">1</span>Компания предлагает <span class="bold">широкий спектр услуг</span>, связанных со строительной деятельностью.</li>
              <li><span class="dropcapspot2">2</span><span class="bold">17 лет</span> успешной работы в области проектирования и строительства.</li>
              <li><span class="dropcapspot2">3</span>Мы ценим ваше <span class="bold">время</span>.</li>
              <li><span class="dropcapspot2">4</span><span class="bold">Индивидуальный подход</span> к каждому.</li>
              <li><span class="dropcapspot2">5</span>Наши специалисты – <span class="bold">профессионалы</span> в своей области.</li>
              <li><span class="dropcapspot2">6</span><span class="bold">Материалы</span> только <span class="bold">качественные</span> и проверенные.</li>
              <li><span class="dropcapspot2">7</span><span class="bold">Добросовестные</span> работы, как для своих близких.</li>
              <li><span class="dropcapspot2">8</span>Нас ценят за <span class="bold">ответственность и исполнительность</span>.</li>
              <li><span class="dropcapspot2">9</span>Сотни клиентов уже воплотили с нами свою <span class="bold">мечту</span> и подарили <span class="bold">радость своим родным</span>.</li>
              <li><span class="dropcapspot2">10</span><span class="bold">Дорожим репутацией</span> и гордимся своими работами.</li>
              <li><span class="dropcapspot2">11</span>Нам <span class="bold">доверяют</span>. Нас рекомендуют.</li>
            </ul>
            <h3>Наша команда</h3>
            <div class="col_left"> <img src="images/about/team01.jpg" class="alignleft20 pic" alt="">
              <h4><span class="color_black">Коток Юрий Борисовыч</span> - <span class="bold">Генеральный директор</span></h4>
              <p style="font-size:15px;">Является настоящим профессионалом, умело руководит вверенным ему коллективом, пользуется заслуженным уважением среди сотрудников.</p>
            </div>
            <div class="col_right"> <img src="images/about/team02.jpg" class="alignleft20 pic" alt="">
              <h4><span class="color_black">Сергей</span> - <span class="bold">Главный инженер</span></h4>
              <p style="font-size:15px;">Занимается проектированием зданий любой сложности. Трудолюбив, обладает высокой работоспособностью, всячески поддерживает работу компании в сложные моменты, в том числе и во внеурочное время.</p>
            </div>
            <div class="clear"></div>
            <div class="col_left"> <img src="images/about/team03.jpg" class="alignleft20 pic" alt="">
              <h4><span class="color_black">Елена</span> - <span class="bold">Главный бухгалтер</span></h4>
              <p style="font-size:15px;">Работает с большим объемом бухгалтерской документации, аккуратна и исполнительна в работе. Любит природу, в свободное от работы время увлекается чтением книг.</p>
            </div>
            <div class="col_right"> <img src="images/about/team04.jpg" class="alignleft20 pic" alt="">
              <h4><span class="color_black">Борис</span> - <span class="bold">Прораб строительных работ</span></h4>
              <p style="font-size:15px;">За время работы проявил себя как квалифицированный специалист. Является настоящим профессионалом, умело руководит вверенным ему направлением. Выполняет свою работу на высоком уровне.</p>
            </div>
            <h3>Свободные вакансии</h3>            
              <p style="font-size:14px;">В даный момент вакансий нет</p>
            <h3 id="services">Виды строительных работ</h3>
             <div class="services" >
              <div class="col_left"> <img src="images/icons/01.png" class="alignleft_pic" alt="">
                <h4 class="color_black">Строительство дома под ключ </h4>
                <div class="clear"></div>
                <img src="images/icons/02.png" class="alignleft_pic" alt="">
                <h4 class="color_black">Комплексный ремонт</h4>       
                <div class="clear"></div>
                <img src="images/icons/03.png" class="alignleft_pic" alt="">
                <h4 class="color_black">Внутренняя отделка</h4>                
              </div>
              <div class="col_right"> <img src="images/icons/04.png" class="alignleft_pic" alt="">
                <h4 class="color_black">Наружные работы</h4>               
                <div class="clear"></div>
                <img src="images/icons/05.png" class="alignleft_pic" alt="">
                <h4 class="color_black">Кровля и водостоки</h4>                
                <div class="clear"></div>
                <img src="images/icons/06.png" class="alignleft_pic" alt="">
                <h4 class="color_black">Другие работы</h4>
                <!-- <p>Если хотите можно написать что то</p> -->
              </div>
            </div>

            <div class="clear" style="height:30px;"></div>
          </div>
        </article>
      </div>
    </dd>
    <dt class="dt3"><a href="#"></a></dt>
    <dd id="page3">
      <div class="inner">
        <article>
          <h1 > <span class="color_orange">Проекты</span></h1>
          <h4 class="highlight"><span class="bold">Последние работы </span></h4>
          <div id="gallery">
            <div class="viewport">
              <ul class="overview" id="firstGallery">
                <li> <a href="images/work/big01.jpg"> <img src="images/work/thm01.jpg" alt="" title="<h4>Название работы 1</h4>"></a> </li>
                <li> <a href="images/work/big02.jpg"> <img src="images/work/thm02.jpg" alt="" title="<h4>Название работы 1</h4>"></a> </li>
                <li> <a  href="images/work/big03.jpg"> <img src="images/work/thm03.jpg" alt="" title="<h4>Название работы 1</h4>"></a> </li>
                <li> <a  href="images/work/big04.jpg"> <img src="images/work/thm04.jpg" alt="" title="<h4>Название работы 1</h4>"></a> </li>
                <li> <a  href="images/work/big05.jpg"> <img src="images/work/thm05.jpg" alt="" title="<h4>Название работы 1</h4>"></a> </li>
                <li> <a  href="images/work/big05.jpg"> <img src="images/work/thm05.jpg" alt="" title="<h4>Название работы 1</h4>"></a> </li>
              </ul>
            </div>
            <div class="gallery_nav"><a class="buttons prev" href="#">left</a><a class="buttons next" href="#">right</a></div>
          </div>
        </article>
      </div>
    </dd>
    <dt class="dt4"><a href="#"></a></dt>
    <dd id="page4">
      <div class="inner">
        <article>
          <h1 > <span class="color_orange">Отзывы</span></h1>
          <div id="pane2" class="scroll-pane">
            <h4>Хочешь оставить отзыв?</h4>

            <?php  
            echo "<form method='post' action='php/setComment.php' id='form-set'>
                  <input type='hidden' name='uid' id='uid' value='Анонимный'>
                  <input type='hidden' name='date' id='date' value='".date('Y-m-d H:i:s')."'>
                  <textarea name='message' id='commentMessage' placeholder='Написать отзыв...'></textarea><br><br>
                  <button class='button' id='commentButton' type='submit' name='commentSubmit'>Оставить отзыв</button>
                  <p id='form-message'> </p>
                  </form>";
                   //getComments($connect);
            echo "<div class='box' id='box'></div>";
            echo "<button class='btn_more' id='btn_more'>Больше отзывов</button>";

            ?>
           <div class="clear" style="height:5000px;"></div>

          </div>
        </article>
      </div>
    </dd>
    <dt class="dt5"><a href="#"></a></dt>
    <dd id="page5">
      <div class="inner">
        <article>
          <h1><span class="color_orange">Контакты </span></h1>
          <h4>Строительная фирма <span class="bold">Херсон Монолит Буд</span></h4>
          <form id="contact_form" name="contact_form" method="post" action="#">
            <div class="clearfix"></div>
            
            <div class="clearfix">
              <input type="text" id="contact_name" placeholder="Имя и Фамилия" onFocus="MM_setTextOfTextfield('name','','')" required="">
              <span id="name_msg" class="msg "></span> <span class="clear"></span> 
            </div>
            <div class="clearfix">
              <input type="text" id="contact_subject" placeholder="Тема" onFocus="MM_setTextOfTextfield('subject','','')" required="">
              <span id="subject_msg" class="msg "></span> <span class="clear"></span> 
            </div>
            <div class="clearfix">
              <textarea cols="5" rows="10" placeholder="Написать сообщение..." id="contact_message" onFocus="MM_setTextOfTextfield('message','','')" required=""></textarea>
              <span id="message_msg" class="msg "></span> <span class="clear"></span> 
            </div>
            <div class="buttons">
              <input  class="button"  type="reset"  value="Очистить">
              <input name="submit" class="button"  type="submit"  id="submit_btn" value="Отправить">
            </div>
          </form> 
          <div class="contact">
            <ul>
              <li><span class="color_orange" >Адресс : </span> Ушакова, 35</li>
              <li><span class="color_orange" >Електронная почта : </span> khMonolitBud@gmail.com</li>
              <li><span class="color_orange" >Телефон : </span> +380504656190</li>
              <!--<li><a href="#"><img src="images/icons/fb.png" alt=""></a></li>
              <li><a href="#"><img src="images/icons/tw.png" alt=""></a></li>
              <li><a href="#"><img src="images/icons/in.png" alt=""></a></li>-->
            </ul>
            <br>
            </div>
            <div id="map"></div>
        </article>
      </div>
    </dd>
  </dl>
</div>
<footer>
  <p class="privacy ">ХерсонМонолитБуд &copy; 2017 &nbsp;&nbsp; * | <a href="#"> Лицензия</a></p>
</footer>
<script src="js/general.js"></script>

</body>
</html>
