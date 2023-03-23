<?php

session_start();
// var_dump($_SESSION) ;
session_destroy();
$err = $_SESSION ;

?>
<!-- http://localhost/administratorRegistrationScreen.php  ➀管理者登録画面.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者登録フォーム</title>
</head>

<body>
  <h2>管理者登録フォーム</h2>
  <form action="administratorRegistrationCompletionScreen.php" method="post">
    <p>
      <label for="username">管理者名</label>
      <input type="text" name="username"></input>
      <?php if(isset($err['username'])): ?>
    <p><?php echo $err['username'] ; ?></p>
    <?php endif; ?>
    </p>

    <p>
      <label for="email">メールアドレス</label>
      <input type="email" name="email"></input>
      <?php if(isset($err['email'])): ?>
    <p><?php echo $err['email'] ; ?></p>
    <?php endif; ?>
    </p>
    <p>
      <label for="password">パスワード</label>
      <input type="password" name="password"></input>
      <?php if(isset($err['password'])): ?>
    <p><?php echo $err['password'] ; ?></p>
    <?php endif; ?>
    </p>
    <p>
      <label for="password_conf">パスワード確認</label>
      <input type="password" name="password_conf"></input>
      <?php if(isset($err['password_conf'])): ?>
    <p><?php echo $err['password_conf'] ; ?></p>
    <?php endif; ?>
    </p>
    <p>
      <input type="submit" value="管理者登録"></input>
    </p>
  </form>

  </form>
</body>

</html>