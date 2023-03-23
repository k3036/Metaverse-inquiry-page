<?php

        include "virtualRealityInquiryHeader.php";

?>
<!-- localhost/file_upload.php -->
<!-- ➀ファイルの保存 -->
<!-- ➁DB接続 -->
<!-- ➂DBへの保存 -->
<?php
include("DatabaseConnectionForLoginInformationRegistration.php");/** DBの呼出し */
include("DatabaseImageRegistrationProcess.php");
//ファイル関連の取得
$file = $_FILES["img"] ;
$fileName = basename($file["name"]) ;/** basename ➡ ディレクトリトラバーサル */
$tmp_path = $file["tmp_name"] ;
$file_err = $file["error"] ;
$fileSize = $file["size"] ;

$imageSaveFile = './SaveImage/imageSaveFile/imageStorageCenter';/** ローカル環境の保存先の場所 */
$imageSaveFile = './SaveImage/imageSaveFile/imageStorageCenter';/** webサーバーの画像保存先の場所 */
$upload_dir = $imageSaveFile ;/** $upload_dirに保存先を格納 */
$save_fileName = date("YmdHis") . $fileName ;/** YmdHisで日付をファイル名に含めることができる*/
$err_msgs = array();   //array_pushを使ってこの配列に格納
$save_pass = $upload_dir . $save_fileName ;

//キャプションを取得
$caption = filter_input(INPUT_POST,"caption",FILTER_SANITIZE_SPECIAL_CHARS) ;
/**FILTER_SANITIZE_SPECIAL_CHARSはキャプションのデータをサニタイズしてくれる */
/** filter_inputでPOSTのデータか確認 */

//キャプションのバリデーション
//未入力
// array_pushで
if(empty($caption)){

        array_push( $err_msgs ,"キャプションを入力してください。" ) ;/** array_pushを使うと配列($err_msgs = array();)にエラーを格納できる */

}
//140文字か

if(strlen($caption) > 140){    //strlenで文字数取得

        array_push( $err_msgs, "キャプションは140文字以内で入力してください。" ) ;

}else if(empty($caption)){

        array_push( $err_msgs ,"キャプションが入力されていません。" ) ;

}

//ファイルのバリデーション
//ファイルサイズが1MB未満か
if($fileSize>1048576 || $file_err == 2){

        array_push( $err_msgs ,'ファイルサイズは1MB未満にしてください。' ) ;

}

//拡張子は画像形式か
$allow_ext = array("jpg","jpeg","png") ;
$file_ext = pathinfo($fileName, PATHINFO_EXTENSION) ;/** pathinfoはファイルの拡張子を取得  */

if(!in_array(strtolower($file_ext),$allow_ext)){     /** in_array配列にあったらtrueなかったらfalseを返す。 */
/**strtolower関数で文字を小文字に統一できるので、拡張子の文字を自動で小文字に統一*/

        array_push( $err_msgs , "画像ファイルを添付してください。" ) ;

}

if(count($err_msgs)===0){



        if(is_uploaded_file($tmp_path)){
         //is_uploaded_fileでファイルはあるかどうか
                if( move_uploaded_file ($tmp_path,$save_pass)){
                  //move_uploaded_fileでfileの移動
                        echo $fileName . 'を'. $upload_dir .'へアップしました。' ;
                        //DBに(ファイル名、ファイルパス、キャプション)を保存
                        $result = fileSave( $fileName , $save_pass ,$caption );
                        ?><p class="btn btn-outline-secondary">
  <button type=“button” onclick="location.href='upload_form.php'">Image
    UploadPage</button>
</p><?php
if($result){

// echo " アップロード完了です。 " ;
exit();

}else{
echo "アップロードが失敗しました！" ;
}

}else{

echo 'アップロードが失敗しました！' ;

}

}else{

echo "画像が選択されていません。" ;

}

}else{

foreach( $err_msgs as $msg ){//エラーがある場合はここで出力

echo $msg ;
echo "</br>" ;

}

}

?>