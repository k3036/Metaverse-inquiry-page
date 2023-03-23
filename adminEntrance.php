<?php

        session_start();

        $err = $_SESSION ;

        $_SESSION = array();
        session_destroy();
        // エラー文をページのリロードで削除する記述 session_destroy()
        // var_dump($_SESSION);

  ?>
<!-- http://localhost/adminEntrance.php  管理者の入口.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="virtualRealityInquiry.css" rel="stylesheet">
  <title>ADMIN LOGIN</title>
</head>

<body>
  <?php
    include "virtualRealityInquiryHeader.php";
    ?>
  <div class=" AdminLoginPageCentered ">

    <h2>管理者専用</h2>
    <?php if(isset($err['msg'])) : ?>
    <p class="red"><?php echo $err['msg'] ; ?></p>
    <?php endif; ?>
    <form action="adminLoginCheck.php" method="POST">
      <p>

        <label for="email">メールアドレス</label>
        <input type="email" name="email"></input>
        <?php if(isset($err['email'])) : ?>
      <p class="red"><?php echo $err['email'] ; ?></p>
      <?php endif; ?>

      </p>
      <p>
        <label for="password">パスワード</label>
        <input type="password" name="password"></input>
        <?php if(isset($err['password'])) : ?>
      <p class="red"><?php echo $err['password'] ; ?></p>
      <?php endif ?>
      </p>
      <p>
        <input type="submit" value="ADMIN LOGIN"></input>
      </p>
    </form>
  </div>

  <?php

      include "virtualRealityInquiryFooter.php";

      ?>

</body>

</html>