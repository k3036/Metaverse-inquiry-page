<?php

session_start();

?>

<?php include "inquiryFormSql.php";?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title></title>
  <link rel="stylesheet" href="virtualRealityInquiry.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
    text-align: center;
  }
  </style>
</head>

<body>
  <?php include "virtualRealityInquiryHeader.php";?>
  <form method=“POST”>
    <?php

        $referer = $_SERVER["HTTP_REFERER"];
        $url = 'inquiryConfirmationScreen.php';
          if(!strstr($referer,$url)){
            die("正規の画面からアクセスしてください");
            exit;
          }

      ?>
    <div class=contentOfTransmission3>
      <p class="inquirySendCompletely">お問い合わせ</p>
      <p class="inquirySendCompletelyLine"></p>
      <p class="thankYouText0">お問い合わせ頂きありがとうございます。</p>
      <p class="thankYouText1">送信頂いた件につきましては、</p>
      <p class="thankYouText1">内容を精査したのち、</p>
      <p class="thankYouText2">返信が必要と判断させて頂いたものに関しましては、</p>
      <p class="thankYouText2">折り返しご連絡させ頂く場合もございますので</p>
      <p class="thankYouText2">あらかじめ、ご了承ください</p>
      <a href="virtualRealityInquiry.php" class="backToTopButton">トップへ戻る</a>
    </div>
  </form>
  </main>
  </div>
  <?php include "virtualRealityInquiryFooter.php";?>
  <script src=""></script>
</body>

</html>
<?php

      $_SESSION = array();
      session_destroy();

?>