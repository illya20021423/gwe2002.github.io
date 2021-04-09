<?php
  //$login = $_POST['login']; вывод данных на экран
  //echo $login; вывод данных на экран
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $nick = filter_var(trim($_POST['nick']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
    echo "Недопустимая длинна логина";
    exit(); //выход из кода(следующий код выполнятся не будется)
  }
  elseif (mb_strlen($nick) < 1 || mb_strlen($nick) > 30) {
    echo "Недопустимая длинна ника";
    exit();
  }
  elseif (mb_strlen($pass) < 2 || mb_strlen($pass) > 10) {
    echo "Длинна пароля должна быть от 2 до 10 символов";
    exit();
  }

  $pass = md5($pass."jfwif918123qwerty");

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
  $mysql->query("INSERT INTO `users` (`login`, `pass`, `nick`)
  VALUES('$login', '$pass', '$nick')"); // язык прогр. = sql
  $mysql->close();

  header('Location: /');

?>
