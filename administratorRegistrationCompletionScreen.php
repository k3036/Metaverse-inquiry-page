<?php

session_start();
include("accessAdminKey.php");
//localhost/administratorRegistrationCompletionScreen.php
//エラーメッセージ
$err = [] ;
//バリデーション
if(!$username = filter_input(INPUT_POST,'username')){

  $err['username'] = "管理者の名前を入力してください。" ;

}

if(!$email = filter_input(INPUT_POST,'email')){

  $err['email'] = "メールアドレスを入力てください。" ;

}

$password = filter_input(INPUT_POST, 'password');
if(!preg_match("/\A[a-z\d]{8,15}+\z/i",$password)){

  $err['password'] = "パスワードは英数字8文字以上10文字以下にしてください";

}

$password_conf = filter_input(INPUT_POST, 'password_conf');

if(!$password === $password_conf){

  $err['password_conf'] = "パスワードとパスワード確認が相違しています";

}


if( count($err) === 0 ){

  //管理者を登録する処理
  $RegistrationConfirmation =AdministratorLogic::AdministratorRegistration($_POST);

}else if(count($err)>0){

  //エラーがあった場合は戻す。
  $_SESSION = $err;
  header('Location: administratorRegistrationScreen.php');
  return;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者登録完了画面</title>
</head>

<body>
  <?php if(count($err)>0): ?>
  <?php foreach($err as $e): ?>
  <?php echo $e ?>
  <?php endforeach; ?>
  <?php else : ?>
  <p>管理者登録完了しました。</p>
  <?php endif ?>
  <br>
  <a href="administratorRegistrationScreen.php">戻る</a>
</body>

</html>