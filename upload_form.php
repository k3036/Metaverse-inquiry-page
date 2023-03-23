<!--➀フォームの説明 -->
<!--➁$_FILEの確認 -->
<!--➂バリデーション -->
<!-- localhost/upload_form.php -->
<?php

  include("DatabaseConnectionForLoginInformationRegistration.php");/** DBの呼出し */
  include("DatabaseImageRegistrationProcess.php");/** SQL記載ページ */
  // var_dump( getAllFile() ) ;
  $files = getAllFile();
  // foreach ( $files as $file ){  ※テーブルのデータを全て出力

  //   print_r ( $file ) ;

  // }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アップロードフォーム</title>
  <link rel="stylesheet" href="virtualRealityInquiry.css">
</head>
<?php
    include "virtualRealityInquiryHeader.php";
    ?>

<body>
  <form enctype="multipart/form-data" action="file_upload.php" method="POST">
    <!-- enctype="multipart/form-data" (複数のものを送れるという意味) -->
    <diV class="file-up">
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576" /></input>
      <!-- type = "hidden"  name="MAX_FILE_SIZE" value = "1048576" (ファイルのサイズの最大を指定) -->
      <p class="btn btn-outline-secondary"><input type="file" name="img" accept="image/*" /> </input></p>
      <!-- accept="image/*" (画像の拡張子だけが選択できる) -->
    </div>
    <diV>
      <textarea class="PlaceOfPost" name="caption" placeholder="キャプション(140文字以下)" id="caption"></textarea>
      <!-- name=captionで画像と一緒に文字も送れるようになる。 -->
    </div>
    <div class="SendButtonMove">
      <p class="btn btn-outline-primary"> <input type="submit" value="送信" class="btn"></input></p>
    </div>
  </form>
  <div>
    <?php foreach($files as $file): ?>
    <img class="imageSizeInVr" src="<?php echo "{$file['file_path']}" ; ?>" alt=""></img>
    <!-- src内にfile_passを入れて画像も出力 -->
    <p class="imageSizeInVr"><?php echo h("{$file['description']}") ; ?></p>
    <!-- descriptionは写真の説明データの入ったカラム名でこれをforeachで回して出力 -->
    <!-- 説明文に悪意あるデータが入っている可能性がある為、エスケープ処理をする。 -->
    <?php  endforeach;  ?>
  </div>
  <?php
    include "virtualRealityInquiryFooter.php";
    ?>
</body>

</html>