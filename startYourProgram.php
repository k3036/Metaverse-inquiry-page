<?php

session_start();
/** localhost/startYourProgram.php */
require_once 'loginLogic.php';


//エラーメッセージ
$err = [];

//バリデーション
if(!$email = filter_input(INPUT_POST,'email')){

  $err['email'] = 'メールアドレスを記入して下さい。';

}
  $password = filter_input(INPUT_POST, 'password');

  if(!$password = filter_input(INPUT_POST,'password')){

    $err['password'] = 'パスワードを記入して下さい。';

}

if(count($err)>0){

  //エラーがあった場合は戻す。
  $_SESSION = $err;
  header('Location: login_form.php');
  return;

}

//ログイン成功時の処理
$result = UserLogic::login($email, $password);

//ログイン失敗時の処理
if(!$result){

  header('Location:login_form.php');
  return;

}

// echo 'ログイン成功です。';

?>
<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>ログイン完了</title>
  <style>
  </style>

</head>
<?php include "virtualRealityInquiryHeader.php"; ?>

<div class="AdminLoginPageCentered">

  <body class="bodyColor">
    <h2>ログイン完了</h2>
    <h2><a href="mypage.php">マイページへ</a></h2>
  </body>

</div>

<?php include "virtualRealityInquiryFooter.php";?>

</html>