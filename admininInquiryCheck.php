<?php
//http://localhost/admininInquiryCheck.php
//localhost/virtualRealityInquiry.php
$referer = $_SERVER["HTTP_REFERER"];
$adminLoginCheckUrl='inquiryManagementScreen.php';
include "databaseConnectionId.php";

  if(strstr($referer,$adminLoginCheckUrl)){

  }else{

    die("正規の画面からアクセスしてください");
    exit;

  }

?>
<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>編集</title>
  <noscript>
    <p class="pleaseTurnOnJavaScript">
      【 JavaScriptをONにしないと正規の表示ができません。 】<br />
      【 If JavaScript is not turned on, regular display is not possible. 】
    </p>
  </noscript>
  <style>
  .body {
    font-size: 1vh;
  }
  </style>
</head>

<body>
  <?php
    include "virtualRealityInquiryHeader.php";
    ?>

  <?php include "databaseConnectionId.php";
    $_SESSION["inquiryScreenPageUrl"]=$_SERVER['REQUEST_URI'];

    // echo $_SESSION["inquiryScreenPageUrl"] ;
    try {

      $sql="SELECT * FROM users";
      $dbh=new PDO($dsn, $user, $pass, [ PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
        ]);
      $stmt=$dbh->prepare($sql);
      $stmt->execute();
      $dbh->beginTransaction();
      $res=$dbh->commit();

    }

    catch (PDOException $e) {

      echo $e->getMessage();
      $dbh->rollBack();

    }
    ?>
  <p class="memberTableName">会員一覧</p>
  <button class="btn btn-primary" type=“button”
    onclick="location.href='inquiryManagementScreen.php'">inquiryManagementScreen</button>
  <div style="overflow-x:auto;">
    <table border="1" class="table table-striped"></br>
      <th>ID</th>
      <th>名前</th>
      <th>メールアドレス</th>
      <th>パスワード</th>
      <?php foreach ($stmt as $row) {

      ?><tr>
        <td><input style="text-align: center" name="dataToDisplay" size="1" type="text"
            value="<?php echo $row["id"]; ?> " readonly></td>
        <td><?php echo $row['name'];
      ?></td>
        <td><?php echo $row['email'];
      ?></td>
        <td><?php // echo $row['password'];
      ?></td>
        <td class=buttonCoLor><a href="edit.php? id=<?php echo $row["id"]; ?>" class="editButton" name=editPush>編集</a>
        </td>
        <td class=buttonCoLor><a href="delete.php? id=<?php echo  $row["id"]; ?>
" onclick="return confirm('本当に削除しますか？')" class="deleteButton " name=deletePush>削除</a>
        </td>
      </tr><?php echo '<br>';
    }

    ?></td>
    </table>
  </div>
  <?php
    include "virtualRealityInquiryFooter.php";
    ?>
</body>