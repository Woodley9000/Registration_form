<?php
$phone =  filter_var(trim($_POST['phone']),
FILTER_SANITIZE_STRING);

$pass =  filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('sitelibrary','root','','library_bd');


$result = $mysql->query("SELECT * FROM `users` WHERE `phone` = '$phone' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
if($user == 0){
    echo "Такой пользователь не найден!";
    exit();
}




setcookie('user', $user['name'], time() + 3600, "/");


$mysql->close();

if($pass == 'admin'){
    header('Location: menu\start_menu_adm.html');
}else{
    header('Location: menu\start_menu_users.html');
}
?>