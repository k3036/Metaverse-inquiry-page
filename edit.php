<?php

session_start();

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


  <main>
    <?php
            $referer = isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : null;
            $editUrl = 'edit.php' ;
            $inquiryScreenUrl = 'inquiryManagementScreen.php' ;
            $editConfirmUrl='editConfirm.php' ;

            if(strstr($referer,$editUrl) || strstr($referer,$inquiryScreenUrl) || strstr($referer,$editConfirmUrl)){

            }else{

              die("正規の画面からアクセスしてください");
              exit;

            }



?><br /><?php

if ( strstr($referer, $inquiryScreenUrl)) {

    include "databaseConnectionId.php";
    $_SESSION["id"] = $_GET["id"] ;
    $id = $_SESSION["id"] ;

    try {

    $dbh = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    $dbh->beginTransaction();

    } catch (PDOException $e) {

    echo $e->getMessage();
    $dbh->rollBack();

    }

    if (!empty($id)) {
    try {
    $sql = "SELECT * FROM contacts WHERE id = '$id';";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dataToDisplay = $stmt->fetch();
    $res = $dbh->commit();
    } catch(Exception $e) {
    echo $e->getMessage();
    $dbh->rollBack();
    }

    $stmt = $dbh->prepare('SELECT * FROM contacts WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    foreach ($stmt as $row) {

    $_SESSION["chineseCharacterName"] = $row['name'];
    $_SESSION["howToRead"] = $row['kana'];
    $_SESSION["phoneNumber"] = $row['tel'];
    $_SESSION["emailAddress"] = $row['email'];
    $_SESSION["contentsOfInquiry"] = $row['body'];

    }
    }
    }
    ?>
    <?php

    if( empty($_POST["editName"] ) && empty($_POST["editHowToRead"])  && empty($_POST["editEmailAddress"] )  && empty($_POST["editContentsOfInquiry"] ) &&  empty($_POST["edithPoneNumber"])){


    }else if( $_POST["editName"]  && empty($_POST["editHowToRead"])  && empty($_POST["editEmailAddress"] )  && empty($_POST["editContentsOfInquiry"] ) &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editName"]	= $_POST["editName"];

    }else if( empty($_POST["editName"] ) && $_POST["editHowToRead"]  && empty($_POST["editEmailAddress"] )  && empty($_POST["editContentsOfInquiry"] ) &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];

    }else if( empty($_POST["editName"] ) && empty($_POST["editHowToRead"])  && $_POST["editEmailAddress"]  && empty($_POST["editContentsOfInquiry"] ) &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];

    }else if( empty($_POST["editName"] ) && empty($_POST["editHowToRead"])  && empty($_POST["editEmailAddress"] )  && empty($_POST["editContentsOfInquiry"] ) &&  $_POST["edithPoneNumber"]){

      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( empty($_POST["editName"] ) && empty($_POST["editHowToRead"])  && empty($_POST["editEmailAddress"])  && $_POST["editContentsOfInquiry"]  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( $_POST["editName"]  && $_POST["editHowToRead"]  && empty($_POST["editEmailAddress"])  &&  empty( $_POST["editContentsOfInquiry"] )  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];

    }else if( $_POST["editName"]  && empty($_POST["editHowToRead"])  && $_POST["editEmailAddress"]  &&  empty( $_POST["editContentsOfInquiry"] )  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];

    }else if( $_POST["editName"]  && empty($_POST["editHowToRead"])  && empty($_POST["editEmailAddress"])  &&  $_POST["editContentsOfInquiry"]  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( $_POST["editName"]  && empty($_POST["editHowToRead"])  && empty($_POST["editEmailAddress"])  &&  empty($_POST["editContentsOfInquiry"])  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( empty($_POST["editName"] )  && $_POST["editHowToRead"]  && $_POST["editEmailAddress"]  &&  empty($_POST["editContentsOfInquiry"])  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];

    }else if( empty($_POST["editName"] )  && $_POST["editHowToRead"]  && empty($_POST["editEmailAddress"] )  &&  $_POST["editContentsOfInquiry"]  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( empty($_POST["editName"] )  && $_POST["editHowToRead"]  && empty($_POST["editEmailAddress"] )  &&  empty($_POST["editContentsOfInquiry"])  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( empty($_POST["editName"] )  && empty($_POST["editHowToRead"] )  && $_POST["editEmailAddress"]   &&  $_POST["editContentsOfInquiry"]  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( empty($_POST["editName"] )  && empty($_POST["editHowToRead"] )  && $_POST["editEmailAddress"]   &&  empty($_POST["editContentsOfInquiry"])  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( $_POST["editName"]  && $_POST["editHowToRead"]  && $_POST["editEmailAddress"]  &&  empty($_POST["editContentsOfInquiry"])  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];

    }else if( $_POST["editName"]  && $_POST["editHowToRead"]  && empty($_POST["editEmailAddress"] )  &&  $_POST["editContentsOfInquiry"]  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( $_POST["editName"]  && $_POST["editHowToRead"]  && empty($_POST["editEmailAddress"] )  &&  empty($_POST["editContentsOfInquiry"] ) &&  $_POST["edithPoneNumber"]){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( $_POST["editName"]  && empty($_POST["editHowToRead"] )  && $_POST["editEmailAddress"]   &&  empty($_POST["editContentsOfInquiry"] ) &&  $_POST["edithPoneNumber"]){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( $_POST["editName"]  && empty($_POST["editHowToRead"] )  && empty($_POST["editEmailAddress"] )  &&  $_POST["editContentsOfInquiry"]  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( $_POST["editName"]  && empty($_POST["editHowToRead"])  && $_POST["editEmailAddress"]  &&  $_POST["editContentsOfInquiry"]  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( empty($_POST["editName"] ) && $_POST["editHowToRead"]   && empty($_POST["editEmailAddress"] )  &&  $_POST["editContentsOfInquiry"]  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( empty($_POST["editName"] ) && $_POST["editHowToRead"]   && $_POST["editEmailAddress"]   && empty( $_POST["editContentsOfInquiry"] ) &&  $_POST["edithPoneNumber"]){

      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( empty($_POST["editName"] ) && $_POST["editHowToRead"]   && $_POST["editEmailAddress"]   &&  $_POST["editContentsOfInquiry"] &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( empty($_POST["editName"] ) && empty($_POST["editHowToRead"] )   && $_POST["editEmailAddress"]   &&  $_POST["editContentsOfInquiry"] &&  $_POST["edithPoneNumber"]){

      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( $_POST["editName"]  && $_POST["editHowToRead"]  && $_POST["editEmailAddress"]  &&  $_POST["editContentsOfInquiry"]  &&  empty($_POST["edithPoneNumber"])){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( $_POST["editName"]  && $_POST["editHowToRead"]  && $_POST["editEmailAddress"]  &&  empty($_POST["editContentsOfInquiry"] ) &&  $_POST["edithPoneNumber"]){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];

    }else if( $_POST["editName"]  && $_POST["editHowToRead"]  && empty($_POST["editEmailAddress"])  &&  $_POST["editContentsOfInquiry"]  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( $_POST["editName"]  && empty($_POST["editHowToRead"])  && $_POST["editEmailAddress"]  &&  $_POST["editContentsOfInquiry"]  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( empty($_POST["editName"] )  && $_POST["editHowToRead"]  && $_POST["editEmailAddress"]  &&  $_POST["editContentsOfInquiry"]  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }else if( $_POST["editName"]   && $_POST["editHowToRead"]  && $_POST["editEmailAddress"]  &&  $_POST["editContentsOfInquiry"]  &&  $_POST["edithPoneNumber"]){

      $_SESSION["editName"]	= $_POST["editName"];
      $_SESSION["editHowToRead"]	= $_POST["editHowToRead"];
      $_SESSION["editEmailAddress"]	= $_POST["editEmailAddress"];
      $_SESSION["edithPoneNumber"]	= $_POST["edithPoneNumber"];
      $_SESSION["editContentsOfInquiry"]	= $_POST["editContentsOfInquiry"];

    }

    $mailAdd ="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$" ;
    $pattern = "^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$";
    $pattern2 = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";

    if(strstr($referer,$editConfirmUrl) || strstr($referer,$inquiryScreenUrl) ){


    }else if (empty($_SESSION["editName"])&&empty($_SESSION["editHowToRead"])&&empty($_SESSION["editEmailAddress"])&&empty($_SESSION["editContentsOfInquiry"])&&empty($_SESSION["edithPoneNumber"])) {

          if (isset($_POST['send']) && empty($_SESSION["editName"])&&empty($_SESSION["editHowToRead"])&&empty($_SESSION["editEmailAddress"])&&empty($_SESSION["editContentsOfInquiry"])) {
              echo <<<EOM
            <script type="text/javascript">
              alert( "※[氏名、フリガナ、メールアドレス、お問い合わせ内容 ]は必須入力です。" )
            </script>
            EOM;
          }

    }else if (isset($_POST['send']) && empty($_SESSION["editName"])&&empty($_SESSION["editHowToRead"])&&empty($_SESSION["editEmailAddress"])&&empty($_SESSION["editContentsOfInquiry"])) {

    echo <<<EOM
    <script type="text/javascript">
    alert( "※[氏名、フリガナ、メールアドレス、お問い合わせ内容 ]は必須入力です。" )
    </script>
    EOM;

    } else if (isset($_POST['send']) && empty($_SESSION["editHowToRead"])&&empty($_SESSION["editEmailAddress"])&&empty($_SESSION["editContentsOfInquiry"])) {

    echo <<<EOM
    <script type="text/javascript">
      alert( "※[フリガナ、メールアドレス、お問い合わせ内容 ]は必須入力です。" )
    </script>
    EOM;

    } else if (isset($_POST['send']) && empty($_SESSION["editName"]) && empty($_SESSION["editEmailAddress"]) && empty($_SESSION["editContentsOfInquiry"])) {

      echo <<<EOM
    <script type="text/javascript">
      alert( "※[氏名、メールアドレス、お問い合わせ内容 ]は必須入力です。" )
    </script>
    EOM;

    } else if (isset($_POST['send']) && empty($_SESSION["editName"]) && empty($_SESSION["editHowToRead"])&&empty($_SESSION["editContentsOfInquiry"])) {

    echo <<<EOM
    <script type="text/javascript">
      alert( "※[氏名、フリガナ、お問い合わせ内容 ]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) && empty($_SESSION["editName"])&&empty($_SESSION["editHowToRead"])&&empty($_SESSION["editEmailAddress"])) {

      echo <<<EOM
    <script type="text/javascript">
      alert( "※[氏名、フリガナ、メールアドレス]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) && empty($_SESSION["editName"])&&empty($_SESSION["editHowToRead"])) {

      echo <<<EOM
    <script type="text/javascript">
      alert( "※[氏名、フリガナ]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) && empty($_SESSION["editName"])&&empty($_SESSION["editEmailAddress"])) {

      echo <<<EOM
    <script type="text/javascript">
      alert( "※[氏名、メールアドレス]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) && empty($_SESSION["editName"])&&empty($_SESSION["editContentsOfInquiry"])) {

    echo <<<EOM
    <script type="text/javascript">
      alert( "※[氏名、お問い合わせ内容 ]は必須入力です。" )
    </script>
    EOM;

    } else if (isset($_POST['send']) && empty($_SESSION["editHowToRead"])&&empty($_SESSION["editContentsOfInquiry"])) {

    echo <<<EOM
    <script type="text/javascript">
      alert( "※[フリガナ、お問い合わせ内容 ]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) && empty($_SESSION["editHowToRead"]) &&empty($_SESSION["editEmailAddress"])) {

    echo <<<EOM
    <script type="text/javascript">
      alert( "※[フリガナ、メールアドレス]は必須入力です。" )
    </script>
    EOM;

    } else if (isset($_POST['send']) && empty($_SESSION["editEmailAddress"])&&empty($_SESSION["editContentsOfInquiry"])) {

    echo <<<EOM
    <script type="text/javascript">
      alert( "※[メールアドレス、お問い合わせ内容 ]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) && empty($_SESSION["editName"])) {

      echo <<<EOM
    <script type="text/javascript">
      alert( "※[氏名]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) && empty($_SESSION["editHowToRead"])) {

      echo <<<EOM
    <script type="text/javascript">
      alert( "※[フリガナ ]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) &&empty($_SESSION["editEmailAddress"])) {

      echo <<<EOM
    <script type="text/javascript">
      alert( "※[メールアドレス]は必須入力です。" )
    </script>
    EOM;

    }else if (isset($_POST['send']) &&empty($_SESSION["editContentsOfInquiry"])) {

      echo <<<EOM
    <script type="text/javascript">
      alert( "※[お問い合わせ内容 ]は必須入力です。" )
    </script>
    EOM;

    }else if(empty($_SESSION["editName"])){

    }else if(isset($_POST['send']) && mb_strlen($_SESSION["editName"])>10){

    }else if(empty($_SESSION["editHowToRead"])){

    }else if(isset($_POST['send']) && mb_strlen($_SESSION["editHowToRead"])>10){

    }else if(empty($_SESSION["editEmailAddress"])){

    }else if ($_SESSION["editEmailAddress"] === "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/" ){

    }else if(empty($_SESSION["editContentsOfInquiry"])){

    }else if(empty($_SESSION["edithPoneNumber"])){

              header("Location: editConfirm.php") ;

    }else if(isset($_POST['send']) && !preg_match('/^0$|^-?[0-9][0-9]*$/', $_SESSION["edithPoneNumber"]	)){/**電話番号が半角数字0-9じゃなければ表示しない */

      echo <<<EOM
      <script type="text/javascript">
        alert( "※電話番号は、半角数字0-9でご入力ください。" )
      </script>
      EOM;

    }else{

              header("Location: editConfirm.php") ;

    }

    ?>

    <div class="contentOfTransmission">
      <p class="inquiryEdit">EDIT</p>
      <form method="POST" action="edit.php">
        <div class="entryName">
          <p class="fillInYourName0">氏名</p>
          <div class="nameNote">
            <?php
              if(empty($_SESSION["editName"])){

                $result = "";
                if (isset($_POST['send']) && empty($_SESSION["editName"])) {
                    $result = "※氏名は必須入力です。１０文字以内でご入力ください。";
                    echo $result ;
                }

              }else if(isset($_POST['send']) && mb_strlen($_SESSION["editName"])>10){

                $result = "※氏名は,10文字以内でご入力ください。";
                echo $result ;
                echo <<<EOM
                <script type="text/javascript">
                  alert( "※氏名は10文字以内で入力して下さい。" )
                </script>
                EOM;
                unset($_SESSION["editName"]);

              }
            ?>
          </div>
          <div class=nameMove><input value="<?php
          if( strstr($referer,$inquiryScreenUrl) || strstr($referer,$editConfirmUrl) ) {

            echo $_SESSION["chineseCharacterName"] ;

          }else if(isset($_POST['send'])){

                if(empty( $_SESSION["editName"])){

                }else{

                    echo $_SESSION["editName"] ;

                }

          }?>" class=" entryPlace" type=" text" placeholder="" id="entryPlace" name="editName">
          </div>
        </div>
        <div class="entryName2">
          <p class="howToRead0">フリガナ</p>
          <div class="phoneticNote">
            <?php
                      if(empty($_SESSION["editHowToRead"])){

                        $result = "";

                        if (isset($_POST['send']) && empty($_SESSION["editHowToRead"])) {

                            $result = "※フリガナは必須入力です。１０文字以内でご入力ください。";
                            echo $result ;

                        }

                      }else if(isset($_POST['send']) && mb_strlen($_SESSION["editHowToRead"])>10){

                        $result = "※フリガナは,１０文字以内でご入力ください。";
                        echo $result ;
                        echo <<<EOM
                        <script type="text/javascript">
                          alert( "※フリガナは10文字以内で入力して下さい。" )
                        </script>
                        EOM;
                        unset($_SESSION["editHowToRead"]);

                      }
            ?>
          </div>
          <div class=howToReadReeding> <input value="<?php
                      if( strstr($referer,$inquiryScreenUrl) || strstr($referer,$editConfirmUrl) ) {

                        echo $_SESSION["howToRead"] ;

                      }else if(isset($_POST['send'])){

                        if(empty( $_SESSION["editHowToRead"])){

                        }else{

                          echo $_SESSION["editHowToRead"] ;

                        }

                      }?>" class="entryPlace" type=" text" name="editHowToRead" placeholder="">
          </div>
        </div>
        <div class="entryNumber">
          <p class="fillInThePhoneNumber0">電話番号</p>
          <div class="phoneNumberNote">
            <?php
                      if(empty($_SESSION["edithPoneNumber"])){

                        $result ="";

                      }else if(isset($_POST['send']) && !preg_match('/^0$|^-?[0-9][0-9]*$/', $_SESSION["edithPoneNumber"]	)){

                        $result = "※電話番号は、半角数字0-9でご入力ください。";
                        echo $result ;
                        unset($_SESSION["edithPoneNumber"]);

                      }
              ?>
          </div>
          <div class=movePhoneNumber><input value="<?php
                      if( strstr($referer,$inquiryScreenUrl) || strstr($referer,$editConfirmUrl)  ) {

                        echo $_SESSION["phoneNumber"] ;

                      }else if(isset($_POST['send'])){

                        if(empty( $_SESSION["edithPoneNumber"])){

                          }else{

                            echo $_SESSION["edithPoneNumber"] ;

                          }

                      }?>" class="entryPlace" type=" tel" name="edithPoneNumber" placeholder=""></div>
        </div>
        <div class="addressMovement">
          <p class="fillInYourEmailAddress0">メールアドレス</p>
          <div class="EmailAddressIsRequired">
            <?php
                  $pattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)*$/";

                  if(empty($_SESSION["editEmailAddress"])){

                    $result = "";

                          if (isset($_POST['send']) && empty($_SESSION["editEmailAddress"])) {

                              $result = "※メールアドレスは必須入力です。";
                              echo $result ;

                          }

                  }else if ($_SESSION["editEmailAddress"] === $pattern ){

                  }
            ?>
          </div>
          <div class=addressMove>
            <input value="<?php
                      if( strstr($referer,$inquiryScreenUrl) || strstr($referer,$editConfirmUrl)  ) {

                        echo $_SESSION["emailAddress"] ;

                      }else if(isset($_POST['send'])){

                        if(empty( $_SESSION["editEmailAddress"])){

                        }else{

                          echo $_SESSION["editEmailAddress"] ;

                        }

                      } ?>" class="entryPlace" type="email" name="editEmailAddress" placeholder="">
          </div>
          <div class="detail">
            <div class="theContentOfYourInquiryIsEssential">
              <?php
            if(empty($_SESSION["editContentsOfInquiry"])){ $result = ""; if (isset($_POST['send']) && empty($_SESSION["editContentsOfInquiry"])) { $result = "※お問い合わせ内容は必須入力です。"; echo $result ; } }
            ?>
            </div>
          </div>
          <br>
          <textarea placeholder="" class="entryDetail"
            name="editContentsOfInquiry"><?php if( strstr($referer,$inquiryScreenUrl) || strstr($referer,$editConfirmUrl) ) { echo $_SESSION["contentsOfInquiry"] ;}else if(isset($_POST['send'])){if(empty( $_SESSION["editContentsOfInquiry"])){ }else{echo $_SESSION["editContentsOfInquiry"] ;}}?></textarea>
        </div>
        <button class="submitButtonEdit" type="submit" id="btnSubmit" name="send">
          <p class="sendSizeEdit">&nbsp;更 &nbsp;&nbsp;&nbsp; 新 </p>
        </button>

      </form>
  </main>
  <?php
    include "virtualRealityInquiryFooter.php";
    ?>

  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="form0main.js"></script> -->
</body>

</html>