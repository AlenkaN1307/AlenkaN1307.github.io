<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Ваше сообщение успешно отправлено</title>
</head>
<body>
<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['taksi_name']) and !empty($_POST['ocenka']) 
   and !empty($_POST['komm'])){
      $name = trim(strip_tags($_POST['name']));
      $taksi_name = trim(strip_tags($_POST['taksi_name']));
      $ocenka = trim(strip_tags($_POST['ocenka']));
      $komm = trim(strip_tags($_POST['komm']));
 
      mail('aleon0103@yandex.ru', 'Отзыв о такси', 
      'Вам написал: '.$name.'<br />Вид такси: '.$taksi_name.'<br />Оценка: '.$ocenka.'<br />
      Комментарий: '.$komm,"Content-type:text/html;charset=windows-1251");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
     $time_back = 3;
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>
</html>