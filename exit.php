<?php
  setcookie('user', $user['nick'], time() - 3600, "/");
  header('Location: /');
?>
