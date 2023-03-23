<?php
// http://localhost/inquiryManagementScreen.php

$referer = $_SERVER["HTTP_REFERER"];
$adminLoginCheckUrl='adminLoginCheck.php';
$admininInquiryCheck='admininInquiryCheck.php' ;
$delete = 'delete.php' ;
$inquiryManagementScreen= 'inquiryManagementScreen.php' ;
$end = 'end.php' ;
$adminEntrance = "adminEntrance.php" ;

  if(strstr($referer,$adminLoginCheckUrl)||strstr($referer,$admininInquiryCheck)||strstr($referer,$delete)||strstr($referer,$inquiryManagementScreen)||strstr($referer,$end)||strstr($referer,$adminEntrance)){

  }else{

    die("正規の画面からアクセスしてください");
    exit;

  }
  include "virtualRealityInquiryHeader.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>edit</title>
  <link rel="stylesheet" href="virtualRealityInquiry.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>

  <?php include "databaseConnectionId.php";
    $_SESSION["inquiryScreenPageUrl"]=$_SERVER['REQUEST_URI'];

    // echo $_SESSION["inquiryScreenPageUrl"] ;
    try {

      $sql="SELECT * FROM contacts";
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

    ?><p class="inquiryTableName">お問い合わせ一覧</p>
  <button class="btn btn-info" type=“button”
    onclick="location.href='admininInquiryCheck.php'">admininInquiryCheck</button>
  <div style="overflow-x:auto;">
    <table border="1" class="table table-striped">
      <!-- table table-dark table-hover || table table-striped -->
      <th>ID</th>
      <th>名前</th>
      <th>読み仮名</th>
      <th>電話番号</th>
      <th>メールアドレス</th>
      <th>お問合せ内容</th><?php foreach ($stmt as $row) {

      ?><tr>
        <td><input style="text-align: center" name="dataToDisplay" size="1" type="text"
            value="<?php echo $row["id"]; ?> " readonly></td>
        <td><?php echo $row['name'];
      ?></td>
        <td><?php echo $row['kana'];
      ?></td>
        <td><?php echo $row['tel'];
      ?></td>
        <td><?php echo $row['email'];
      ?></td>
        <td><?php echo $row['body'];
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