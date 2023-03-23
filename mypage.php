<?php

session_start();
//  localhost/mypage.php
include('loginLogic.php');
include('CountermeasuresAgainstExternalAttacks.php');
//ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if(!$result){
  $SESSION['login_err'] = 'ユーザーを登録してログインしてください！';
  header('Location:signupFromMember.php');
  return ;
}

$login_user = $_SESSION['login_user'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>マイページ</title>

</head>

<?php
    include "virtualRealityInquiryHeader.php";
    ?>

<body class="bg-info">
  <div class=" AdminLoginPageCentered ">
    <p class="headline">
    <h2>登録情報</h2>
    </p>
    <p class="container">ログインユーザー: <?php echo h($login_user['name']) ?></p>
    <p class="container">メールアドレス:<?php echo h($login_user['email']) ?></p>
    <form action="exitingAProgram.php" method="post">
      <input type="submit" name='logout' value="ログアウト">

      </input>
    </form>
  </div>
</body>

<?php
    include "virtualRealityInquiryFooter.php";
    ?>

</html>