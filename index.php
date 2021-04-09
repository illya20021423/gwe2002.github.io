<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Тайминг боссов DW</title>
  </head>
  <body>
    <div class="container mt-4">
      <?php
        if($_COOKIE['user'] == ''): //??
      ?>
      <div class="row">
        <div class="col">
          <p>Регистрация</p>
          <form action="validation-form/check.php" method="post">
            <input type="text" class="form-control" name="nick" id="nick"
            placeholder="Введите ник"><br>
            <input type="text" class="form-control" name="login" id="login"
            placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass"
            placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Зарегистрировать</button>
          </form>
        </div>
        <div class="col">
          <p>Авторизация</p>
          <form action="validation-form/auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login"
            placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass"
            placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизоваться</button>
          </form>
        </div>
      <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="
          exit.php">здесь</a>.</p>
      <?php endif; ?>

      </div>
    </div>
  </body>
</html>
