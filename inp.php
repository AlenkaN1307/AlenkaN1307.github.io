<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>���� ��������� ������� ����������</title>
</head>
<body>
<?php
   $back = "<p><a href=\"javascript: history.back()\">��������� �����</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['taksi_name']) and !empty($_POST['ocenka']) 
   and !empty($_POST['komm'])){
      $name = trim(strip_tags($_POST['name']));
      $taksi_name = trim(strip_tags($_POST['taksi_name']));
      $ocenka = trim(strip_tags($_POST['ocenka']));
      $komm = trim(strip_tags($_POST['komm']));
 
      mail('aleon0103@yandex.ru', '����� � �����', 
      '��� �������: '.$name.'<br />��� �����: '.$taksi_name.'<br />������: '.$ocenka.'<br />
      �����������: '.$komm,"Content-type:text/html;charset=windows-1251");
 
      echo "���� ��������� ������� ����������!<Br> �� �������� ����� � 
      ��������� �����<Br> $back";
     $time_back = 3;
      exit;
   } 
   else {
      echo "��� �������� ��������� ��������� ��� ����! $back";
      exit;
   }
?>
</body>
</html>