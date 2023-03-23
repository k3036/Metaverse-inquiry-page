<?php
/**
 * ファイルデータを保存
 * @param string $fileName ファイル名
 * @param string $save_pass 保存先のパス
 * @param string $caption 投稿の説明
 * @return bool $result
 */

//➀
//-PDO::query(sql)を使おう
//➁foreachで表示
//-出力はエスケープしよう
function fileSave( $fileName , $save_pass ,$caption ){

  $result=false;

  $sql = "INSERT INTO file_table ( file_name,file_path,description )VALUE(?,?,?)" ;

  try{

    $stmt = connect() -> prepare($sql) ;/**connect  prepare */
    $stmt  -> bindValue( 1,$fileName ) ;/**  bindValueは変数の値をバインドするための関数であり悪意のある入力をエスケープ処理する */
    $stmt  -> bindValue( 2,$save_pass ) ;
    $stmt  -> bindValue( 3,$caption ) ;
    $result = $stmt -> execute() ;
    return $result ;

  }catch(\Exception $e){

    echo $e->getMessage() ;
    return $result ;

  }

}





/**
 * ファイルデータを取得
 * @return array $fileDate
 */

//➀
//-PDO::query(sql)を使おう
//➁foreachで表示
//-出力はエスケープしよう
// ・公式記載の内容[query]
//   ➡ [PDO::query — プレースホルダを指定せずに、SQL ステートメントを準備して実行する]
//   queryは適切にエスケープ処理する必要がある。
//    ↓
//   なのでユーザーからの入力がない場合の処理に[query]は適している。
function getAllFile(){/** 登録された画像の表示 */

      $sql = " SELECT * FROM file_table " ;
      $fileDate =  connect() -> query($sql);
      return $fileDate ;

}




function h($s){
    return htmlspecialchars($s, ENT_QUOTES,"UTF-8") ;
}