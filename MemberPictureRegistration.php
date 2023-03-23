<?php

session_start();
//http://localhost/public/MemberPictureRegistration.php
//バリデーションのページ
// $_SESSION = array();
// session_destroy();

include('loginLogic.php');
//public\classes\loginLogic.php   include('classes/loginLogic.php');   require_once 'classes/loginLogic.php'

//エラーメッセージ
$err = [];

// $token = filter_input(INPUT_POST, 'csrf_token');
// トークンがないもしくは一致しない場合、処理中止。
// if( !isset($_SESSION['csrf_token']) || $token !== $SESSION['csrf_token'] ){
//   exit('不正なリクエストです。');
// }
// unset($SESSION['csrf_token']);

//バリデーション
if(!$username = filter_input(INPUT_POST,'username')){
  $err['username'] = 'ユーザー名を記入して下さい。';
}
if(!$email = filter_input(INPUT_POST,'email')){
  $err['email'] = 'メールアドレスを記入して下さい。';
}
  $password = filter_input(INPUT_POST, 'password');
//正規表現
if(!preg_match("/\A[a-z\d]{1,10}+\z/i",$password)){/** !preg_match("/\A[a-z\d]{8,100}+\z/i",$password) */
  $err['password'] = 'パスワードは英数字8文字以上10文字以下にして下さい。';
}
$password_conf = filter_input(INPUT_POST, 'password_conf');
if($password !== $password_conf){
  $err['password_conf'] = 'パスワードと確認用パスワードが異なっています。';
}

if(count($err)>0){

  //エラーがあった場合は戻す。
  $_SESSION = $err;
  header('Location: signupFromMember.php');
  return;

}

if(count($err)===0){

  //ユーザーを登録する処理
  $hasCreated = UserLogic::createUser($_POST);
  /** $hasCreated に loginLogic.phpの ($_POST)をいれた createUserクラスを格納  */ /** ３の13:27 */

  if(!$hasCreated){ /** $hasCreatedの中身がなかったら */

    $err[] = '登録に失敗しました';

  }

}
?>
<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>ユーザー登録完了画面</title>

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

<body class="bg-info" class="AdminLoginPageCentered">
  <?php if(count($err)>0): /** ifコロン構文 */ ?>
  <?php foreach($err as $e): /** foreachコロン構文 */ ?>
  <p class="bg-danger">
    <?php echo $e ?>
  <p>
    <?php endforeach; ?>
    <?php else : ?>
  <p class="text-center" class="container">ユーザー登録完了しました。</p>
  <?php endif ?>
  <a href="signupFromMember.php">戻る</a>




  <!-- <script src="M.T.js">
    </script>
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="slick.min.js"></script> -->
</body>

<?php
    include "virtualRealityInquiryFooter.php";
    ?>

</html>