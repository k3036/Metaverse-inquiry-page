<?php
// localhost/virtualRealityInquiryHeader.php
// localhost/virtualRealityInquiry.php
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title></title>
  <!-- CSSの読み込み -->
  <link rel="stylesheet" href="virtualRealityInquiry.css">
  <!-- bootstrapの読み込み -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon-180x180.png">
  <!-- icon192×192  画像名前が apple-touch-icon-180x180.png -->
  <link rel="icon" type="image/x-icon" href="./favicon.ico">
  <!-- favicon16×16  画像名前が favicon.ico -->
</head>



<body>
  <!-- 以下ヘッダーのコード -->
  <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist"
    style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
    <li onclick="location.href='virtualRealityInquiry.php' " class="nav-item" role="presentation"><button
        class=" nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab"
        aria-selected="true">Home</button></li>
    <!-- <li class="nav-item" role="presentation"><button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab"
        type="button" role="tab" aria-selected="false">Profile</button></li> -->
    <li onclick="location.href='InquiriesAboutVR.php' " class=" nav-item" role="presentation"><button
        class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab"
        aria-selected="false">Contact</button></li>
    <li class="nav-item" role="presentation">
      <!-- ドロップダウンメニュー -->
      <div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
          aria-expanded="false">login || PostAPhoto </button>
        <ul class="dropdown-menu">
          <li><button onclick="location.href='signupFromMember.php' " class="dropdown-item"
              type="button">新規会員登録</button></li>
          <li><button onclick="location.href='login_form.php' " class="dropdown-item" type="button">ログイン</button>
          </li>
          <li><button onclick="location.href='upload_form.php' " class="dropdown-item" type="button">VR写真投稿</button>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" role="presentation">
      <!-- モーダル表示ボタン --><button type="button" class="btn btn-primary" data-toggle="modal"
        data-target="#testModal">StaffRoom</button>
      <!-- <br><br><br><a class="btn btn-primary" data-toggle="modal" data-target="#testModal">リンクボタンで開く</a>-->
      <!--モーダルウィンドウ -->
      <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body"><label><button onclick="location.href='adminEntrance.php' " type=" button"
                  class="btn btn-primary" data-toggle="modal" data-target="#testModal">StaffRoom</button></label></div>
          </div>
        </div>
      </div>
    </li>
  </ul>
  <!-- ヘッダーの画像 -->
  <div class="img-fluid"><video src="mt.mp4" class="OverlayTopImage" loop muted autoplay playsinline></video></div>
  <!-- ここから読み込みの記述 -->
  <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
  <!-- <script type="text/javascript" src="">
        </script>
        <script src=""></script>--><?php
/** BoosTrapのJS読み込み */
?><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>