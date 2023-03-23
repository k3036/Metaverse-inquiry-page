<?php
  session_start();
  /** http://localhost/signupFromMember.php  */
  session_destroy();
include('CountermeasuresAgainstExternalAttacks.php');
include('loginLogic.php');

//ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if($result){

  header('Location:mypage.php');

}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>ユーザー登録画面</title>

</head>

<?php
    include "virtualRealityInquiryHeader.php";
    ?>

<body class="bg-info">

  <!-- Example single danger button -->
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Choose From The Menu
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="">新規登録</a></li>
      <li><a class="dropdown-item" href="login_form.php">ログインはこちら</a></li>
      <li><a class="dropdown-item" href="virtualRealityInquiry.php">PAGE TOP</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
    </ul>
  </div>
  <!-- End Example Code -->

  <div class="text-center">

    <h2 class="text-primary">ユーザー登録フォーム</h2>
    <form action="MemberPictureRegistration.php" method="POST">

      <p>
        <label for="username">ユーザー名:</label>
        <input type="text" name="username"></input>
        <?php if(isset($_SESSION['username'])){?>
      <p class="red"><?php echo $_SESSION['username']; ?> </p>
      <?php  }  ?>

      </p>

      <p>
        <label for="email">メールアドレス:</label>
        <input type="email" name="email"></input>
        <?php if(isset($_SESSION['email'])){?>
      <p class="red"><?php echo $_SESSION['email']; ?> </p>
      <?php  }  ?>

      <p>
        <label for="password">パスワード:</label>
        <input type="password" name="password"></input>
        <?php if(isset($_SESSION['password'])){?>
      <p class="red"><?php echo $_SESSION['password']; ?> </p>
      <?php  }  ?>

      <p>
        <label for="password_conf">パスワード確認:</label>
        <input type="password" name="password_conf"></input>
        <?php if(isset($_SESSION['password_conf'])){?>
      <p class="red"><?php echo $_SESSION['password_conf']; ?> </p>
      <?php  }  ?>
      </p>
      <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
      <p>
        <input class="btn btn-primary" href="MemberPictureRegistration.php" type="submit" id="hoge"
          class="btn btn-primary" data-toggle="popover" title="クリックして新規登録実行。" type="submit" value="新規登録">
      </p>
    </form>

  </div>
  </button>

</body>
<?php
    include "virtualRealityInquiryFooter.php";
    ?>

</html>