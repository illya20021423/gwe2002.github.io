<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);

  $pass = md5($pass."jfwif918123qwerty");

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'
  AND `pass` = '$pass'");
  $user = $result->fetch_assoc(); // конвертирует все данные в МАССИв(с ним легче работать)
  if(count($user) == 0){
    echo "Такого пользователя не существует";
    exit();
  }

  setcookie('user', $user['nick'], time() + 3600, "/");

  $mysql->close();

  header('Location: /');

?>
