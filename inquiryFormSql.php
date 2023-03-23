<?php

include "databaseConnectionId.php";


try {

    $pdo = new PDO($dsn, $user, $pass,[
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ]);


    $name = $_SESSION["chineseCharacterName"] ;
    $kana = $_SESSION["howToRead"] ;
    $email = $_SESSION["emailAddress"] ;
    $body = $_SESSION["contentsOfInquiry"];

    if(isset($_SESSION["phoneNumber"])){

      $tel = $_SESSION["phoneNumber"] ;

    }

    if (isset($tel)) {

        $stmt =  $pdo->prepare('INSERT INTO contacts (name, kana, tel, email, body) VALUES(:name, :kana, :tel, :email, :body)');

    }else{

      $stmt =  $pdo->prepare('INSERT INTO contacts (name, kana, email, body) VALUES(:name, :kana, :email, :body)');

    }

    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':kana', $kana);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':body', $body);

    if(isset($tel)){
      $stmt->bindValue(':tel', $tel);
    }

    $stmt->execute();

} catch (PDOException $e) {

    echo $e->getMessage();

} finally {

    $pdo = null;

}

?>