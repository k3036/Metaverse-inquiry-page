<?php session_start();?>
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
  }
  </style>
</head>

<body>
  <main>
    <?php include "virtualRealityInquiryHeader.php";?>
    <div class="contentOfTransmission">
      <p class="inquiry">お問い合わせ</p>
      <div class="inquiryLine"></div>
      <div class="sendOrReturn">
        <p class=Notes0>下記の内容をご確認の上送信ボタンを押してください</p>
        <p class=Notes1>内容を訂正する場合は戻るを押してください。</p>
      </div>
      <form method="POST" action="inquiryCompletionScreen.php">
        <?php
          $referer = $_SERVER["HTTP_REFERER"];   /*ダイレクトアクセスの禁止*/
          $url = 'InquiriesAboutVR.php';
            if(!strstr($referer,$url)){
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

        <p class="fillInYour">氏名</p>
        <div class="Inquiry0LinesBelow"></div>
        <div class="Confirmation0"><?php  XssOCuntermeasure($_SESSION["chineseCharacterName"] ); ?>
        </div>

        <p class="fillInYour">フリガナ</p>
        <div class="Inquiry1LinesBelow"></div>
        <div class="Confirmation0"><?php XssOCuntermeasure($_SESSION["howToRead"]); ?></div>

        <p class="fillInYour">電話番号</p>
        <div class="Inquiry2LinesBelow"></div>
        <div class="Confirmation0">
          <?php
            if( empty($_SESSION["phoneNumber"])){

            }else{
                XssOCuntermeasure($_SESSION["phoneNumber"]);
            }
          ?>
        </div>
        <p class="fillInYour">メールアドレス</p>
        <div class="Inquiry3LinesBelow"></div>
        <div class="Confirmation0"><?php XssOCuntermeasure($_SESSION["emailAddress"]	); ?></div>
        <p class="fillInYour">お問い合わせ内容</p>
        <div class="Inquiry4LinesBelow"></div>
        <div class="Confirmation0"><?php XssOCuntermeasure($_SESSION["contentsOfInquiry"] ); ?></div>
      </form>
      <div class="sendOrBack">
        <a href="inquiryCompletionScreen.php" input type=" submit" class="Confirmation0" style=text-decoration:none;
          text-area="name=mutter;">
          <p class="submitButton3"> 送&nbsp;&nbsp;信</p>
        </a>
        <a href="InquiriesAboutVR.php" input type=" submit" class="Confirmation0" style=text-decoration:none;
          text-area="name=mutter;">
          <p class="submitButton3"> 戻&nbsp;&nbsp;る</p>
        </a>
      </div>
    </div>
  </main>

  <?php include "virtualRealityInquiryFooter.php"; ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="M.T.js"></script>
</body>

</html>