<?php
session_start();
 //  localhost/mypage.php
include('loginLogic.php');

if(!$logout = filter_input(INPUT_POST,'logout')){

  exit('不正なリクエストです。');

}
//sessionは24分で消えるのがデフォルト
//ログインしているか判定し、セッションが切れていたらログインしてくださいと、メッセージを出す。
$result = UserLogic::checkLogin();

if(!$result){
  exit('セッションが切れましたのでログインし直して下さい');
}

//ログアウトする
UserLogic::logout();
// $login_user = $_SESSION['login_user'];


?>

<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>ログアウト</title>

  <!-- BootstrapのCSS読み込み -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="bootstrap.min.js"></script>

</head>

<?php
    include "virtualRealityInquiryHeader.php";
    ?>

<body class="bg-info">
  <div class=" AdminLoginPageCentered ">
    <h2>ログアウト完了</h2>
    <p>ログアウトしました。</p>
    <a href='login_form.php'>ログイン画面へ</a>
  </div>
</body>

<?php
    include "virtualRealityInquiryFooter.php";
    ?>

</html>