<?php session_start();?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>k.k</title>
  <link rel="stylesheet" href="virtualRealityInquiry.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>
<?php
    include "virtualRealityInquiryHeader.php";
    ?>

<body>
  <?php
          $referer = $_SERVER["HTTP_REFERER"];
          $url = 'inquiryManagementScreen.php';
          $admininInquiryCheck = "admininInquiryCheck.php" ;

            if(strstr($referer,$url)||strstr($referer,$admininInquiryCheck)){

            }else{
              die("正規の画面からアクセスしてください");
              exit;
            }
        ?>

  <?php
          function XssOCuntermeasure($XssMeasures)
          {
              echo nl2br(htmlspecialchars($XssMeasures, ENT_QUOTES, "UTF-8")) ;
          }
        ?>

  <?php

  include "databaseConnectionId.php";
  $dbh = new PDO($dsn, $user, $pass,[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ]);
  $id = $_GET["id"] ;

  ?>
  <?php

        try {

                $sql = "DELETE FROM contacts WHERE id = :id";
                $stmt = $dbh->prepare($sql);
                $params = array(':id'=>$id);
                $stmt->bindValue(':id', $id);
                $stmt->execute($params);

        } catch (PDOException $e) {

                echo $e->getMessage();

        } finally {

                $pdo = null;

        }

  ?>
  <button onclick="location.href='inquiryManagementScreen.php'" class="onclickDeleteButton">削除完了致しました。</button>

  <?php
    include "virtualRealityInquiryFooter.php";
    ?>

  <script type="text/javascript" src="virtualRealityInquiry.js"></script>
  <!-- jQuery.jsの読み込み -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
</body>

</html>