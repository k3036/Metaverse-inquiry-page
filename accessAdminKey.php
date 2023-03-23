<!-- http://localhost/accessAdminKey.php  管理者の鍵にアクセス.php ⇒ 登録、ログイン時のPASS照合ロジック -->
<?php

include("DatabaseConnectionForLoginInformationRegistration.php");
class AdministratorLogic{

  //管理者登録処理
  public static function AdministratorRegistration($data) {

    $result = false ;

    $sql = 'INSERT INTO ManagementScreenSecurity ( name, email, password )VALUES(?,?,?)';
//ManagementScreenSecurity ||  managementScreenSecurity (XAMPP)
//ユーザーデータを配列に格納
    $arr = [];
    $arr[] = $data['username'] ;
    $arr[] = $data['email'] ;
    $arr[] = password_hash( $data['password'] , PASSWORD_DEFAULT  ) ;

    try{

      $stmt  = connect()->prepare($sql);
      $result = $stmt -> execute($arr);
      return $result ;

    }catch(\Exception $e){

      return $result ;

    }




  }


/**
 * Summary of LoginProcess
 * @param string $email
 * @param string $password
 * @return bool  $result
 */
public static function LoginProcess ( $email , $password ){

    //結果
    $result = false;
   //ユーザーをemailから検索して取得
    $user = self :: getUserByEmail( $email );

    if(!$user){

      $_SESSION['msg'] = 'emailが一致しません。';
          return $result  ;

    }


    //パスワードの照会
    if(password_verify($password,$user['password'])){
      //ログイン成功
    //session_regenerate_idは古いsessionを破棄して新しいsessionを入手するメソッド、この記述だけでsessionハイジャックの対策になるのでログイン後には入れるようにする。
      // session_regenerate_id(true);      // 警告: session_regenerate_id(): セッション ID を再生成できません - ヘッダーは既に/home/ebmxrzmi/public_html/accessAdminKey.phpの63行目で送信されています
      $_SESSION['login_user'] = $user ;
      $result = true ;
      return $result ;

      }

      $_SESSION['msg'] = 'パスワードが一致しません。';
      return $result  ;

}

/**
 * Summary of LoginProcess
 * @param string $email
 * @return bool  $user| false
 */
public static function getUserByEmail ( $email ){

//SQLの準備
//SQLの実行
//SQLの結果を返す
    $sql = 'SELECT * FROM ManagementScreenSecurity WHERE email = ?';
//emailを配列に格納
    $arr = [];
    $arr[] = $email ;


    try{

      $stmt  = connect()->prepare($sql);
      $stmt -> execute($arr);
      //SQLの結果を返す
      $user = $stmt -> fetch() ;
      return $user ;

    }catch(\Exception $e){

      return $user ;

    }

}

}