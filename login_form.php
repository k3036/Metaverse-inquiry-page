<?php

  session_start();
  /** http://localhost/login_form.php  */
  include('loginLogic.php');
$err = $_SESSION;
//ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();
if($result){
  header('Location:mypage.php');
  return;
}
// var_dump($err);
// $_SESSION = array();
session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>ログイン画面</title>
  <link href="additionalCssForBootstrap.css" rel="stylesheet">
  <link href="virtualRealityInquiry.css" rel="stylesheet">
</head>

<?php
    include "virtualRealityInquiryHeader.php";
    ?>

<body class="bg-info">
  <div class="text-center">
    <h2>ログインフォーム</h2>
    <?php if(isset($err['msg'])): ?>
    <p class="red"><?php echo $err['msg'] ; ?></p>
    <?php endif; ?>

    <!-- Example single danger button -->
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Choose From The Menu
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="signupFromMember.php">新規登録</a></li>
        <li><a class="dropdown-item" href="login_form.php">ログインはこちら</a></li>
        <li><a class="dropdown-item" href="virtualRealityInquiry.php">PAGE TOP</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
      </ul>
    </div>

    <!-- End Example Code -->

    <form action="startYourProgram.php" method="POST">

      <p class="mailMargin">
        <label for="email">メールアドレス:</label>
        <input type="email" name="email"></input>
        <?php if(isset($err['email'])): ?>
      <p class="red"><?php echo $err['email'] ; ?></p>
      <?php endif; ?>
      </p>

      <p class="">
        <label for="password">パスワード:</label>
        <input type="password" name="password"></input>
        <?php if(isset($err['password'])): ?>
      <p class="red"><?php echo $err['password'] ; ?></p>
      <?php endif; ?>
      </p>

      <p class="" class="container">
        <input type="submit" value="ログイン">
      </p>
    </form>

  </div>
  <?php
    include "virtualRealityInquiryFooter.php";
    ?>
</body>

</html>