<?php
/** http://localhost/DatabaseConnectionForLoginInformationRegistration.php */

ini_set('display_errors', true);/**エラーを検知するコード */


  function connect()
  {

    include('databaseConnectionId.php');

      try{

              $pdo = new PDO($dsn, $user, $pass,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
              ]);
              // echo '成功です!';
              return $pdo;

      }catch(PDOException $e){

          echo '接続失敗です。'.$e->getMessage();
          exit($e->getMessage());

      }

  }


  // connect();