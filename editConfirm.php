<?php
    session_start();
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>editConfirm.php</title>
  <link rel="stylesheet" href="form.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>

<body>
  <?php
    // include "inquiryHeader3.php";
  ?>
  <br /><br />

  <main>
    <div class="contentOfTransmission2">
      <p class="inquiry">お問い合わせ</p>
      <div class="inquiryLine"></div>
      <div class="sendOrReturn">
        <p class=Notes0>下記の内容をご確認の上送信ボタンを押してください</p>
        <p class=Notes1>内容を訂正する場合は戻るを押してください。</p>
      </div>

      <?php

            $referer = $_SERVER["HTTP_REFERER"];
            $editUrl='edit.php';

              if(strstr($referer,$editUrl)){

              }else{

                die("正規の画面からアクセスしてください");
                exit;

              }
        ?>

      <?php
              function XssOCuntermeasure($XssMeasures)
              {
                  echo nl2br(htmlspecialchars($XssMeasures, ENT_QUOTES, "UTF-8")) ;/** htmlspecialchars( 変換対象文字, 変換パターン, 文字コード )  */
              }

        ?>

      <p class="fillInYourName">氏名</p>
      <div class="Inquiry0LinesBelow"></div>
      <div class="Confirmation0">
        <?php  XssOCuntermeasure( $_SESSION["editName"] ) ; ?>
      </div>

      <p class="fillInThePhoneNumber">フリガナ</p>
      <div class="Inquiry1LinesBelow"></div>
      <div class="Confirmation1"><?php  XssOCuntermeasure($_SESSION["editHowToRead"]) ; ?></div>

      <p class="fillInThePhoneNumber">電話番号</p>
      <div class="Inquiry2LinesBelow"></div>
      <div class="Confirmation2">
        <?php
            if( empty( $_SESSION["edithPoneNumber"])){

            }else{
              XssOCuntermeasure( $_SESSION["edithPoneNumber"] ) ;
            }
          ?>
      </div>
      <p class="fillInYourEmailAddress">メールアドレス</p>
      <div class="Inquiry3LinesBelow"></div>
      <div class="Confirmation3">
        <?php  XssOCuntermeasure( $_SESSION["editEmailAddress"] ) ; ?>
      </div>
      <p class="ContentsOfInquiry">お問い合わせ内容</p>
      <div class="Inquiry4LinesBelow"></div>
      <div class="Confirmation4">
        <?php  XssOCuntermeasure( $_SESSION["editContentsOfInquiry"] ) ; ?></div>
      <div class="sendOrBack">
        <a href="end.php" input type=" submit" class="submitButton4" style=text-decoration:none;
          text-area="name=mutter;" name="send">
          <p class="sendSize2"> 送&nbsp;&nbsp;信</p>
        </a>
        <a href="edit.php" input type=" submit" class="submitButton5" style=text-decoration:none;
          text-area="name=mutter;">
          <p class="sendSize2"> 戻&nbsp;&nbsp;る</p>
        </a>
      </div>
    </div>
  </main>
  <!-- <div class="FooterList"> -->
  <?php
    //  include "footerTwo.php";
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="form0main.js"></script>
</body>

</html>