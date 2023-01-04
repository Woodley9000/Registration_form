<?php
   $phone =  filter_var(trim($_POST['phone']),
   FILTER_SANITIZE_STRING);
   $fio =  filter_var(trim($_POST['fio']),
   FILTER_SANITIZE_STRING);
   $pass =  filter_var(trim($_POST['pass']),
   FILTER_SANITIZE_STRING);
   $adress =  filter_var(trim($_POST['adress']),
   FILTER_SANITIZE_STRING);
   $mail =  filter_var(trim($_POST['mail']),
   FILTER_SANITIZE_STRING);

   #Регистрация

   if(mb_strlen($phone) < 5 || mb_strlen($phone) > 13){
      echo "Недопустимая длина номера телефона!";
      exit();
   } else if(mb_strlen($fio) < 3 || mb_strlen($fio) > 40){
      echo "Недопустимая длина имени!";
      exit();
   } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 10){
      echo "Недопустимая длина пароля!";
      exit();
   } else if(mb_strlen($adress) < 5 || mb_strlen($adress) > 50){
      echo "Недопустимая длина вводимого адреса!";
      exit();
   } else if(mb_strlen($mail) < 1 || mb_strlen($mail) > 15){
      echo "Недопустимая длина эл.почты!";
      exit();
   }

   $mysql = new mysqli('sitelibrary','root','','library_bd');
   $mysql->query("INSERT INTO `users` (`phone`, `fio`, `pass`, `adress`, `mail`) VALUES ('$phone', '$fio', '$pass', '$adress', '$mail')");

   $mysql->close();

   header('Location: /');
?>