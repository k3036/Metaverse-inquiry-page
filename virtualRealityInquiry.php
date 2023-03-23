<?php
  session_start();
  $_SESSION = array();
  session_destroy();
/** http://localhost/inquiryManagementScreen.php */
/** localhost/virtualRealityInquiry.php */
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>k.k</title>
  <link rel="stylesheet" href="virtualRealityInquiry.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
</head>
<?php
    include "virtualRealityInquiryHeader.php";
    ?>

<body>

  <!-- slide画像 -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <button class="carousel-item active" onclick="location.href='https://dokodemodoors.com/' ">
        <img src="dokodemodoor.jpg" class="d-block w-100" alt="...">
      </button>
      <button class="carousel-item" onclick="location.href='https://www.meta.com/jp/en/quest/quest-pro/' ">
        <img src="pro.jpg" class="d-block w-100" alt="...">
      </button>
      <button class="carousel-item" onclick="location.href='https://unity.com/ja' ">
        <img src="Unity.jpg" class="d-block w-100" alt="...">
      </button>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- ここまでslide画像 -->

  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          <div class="firstTitle"></div>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">

          <p class="titleCenteredHarukaAyase"></p>
          <div class="flexVideos">

            <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/A1LT-frTunY" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
            <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/cDcqinG5_hM" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>

          </div>

          <p class="titleCenteredRikiTakeuchi"></p>
          <div class="flexVideos">

            <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/V9SfNDuisXw" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>

          </div>

          <p class="titleCenteredAKB48AndOfficialHigeDanDism"></p>
          <div class="flexVideos">

            <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/EJQyD2LTuKI" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>

            <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/zTbcw5qve4k" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>

          </div>

          <p class="titleCenteredNice73JohnnysWest"></p>
          <div class="flexVideos">

            <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/yHwEBiDFgbc" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>

            <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/B6WQIa7qc_Y" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>




          </div>



        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div class="theSecondTitle"></div>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">

        <p class="titleCenteredTrip"></p>
        <div class="flexVideos">

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/D9eaE2IJ8Ao" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/plmRukzX8ZI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        </div>

        <div class="flexVideos">

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/BSjNaneBop8" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/of1Wnosw_-0" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        </div>

        <div class="flexVideos">

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/2R-AGB3WLpA" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/sCyo9tJm7-Q" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        </div>

        <p class="titleCenteredDisasterExperience"></p>
        <div class="flexVideos">

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/73gxXPZS1n4" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/Ldh9fcMTBD4" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        </div>

        <p class="titleCenteredUniverse"></p>
        <div class="flexVideos">

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/AoL9jrn0HU0" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/sKVxN711hCA" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
        <div class="flexVideos">
          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/tE5erOlM_sw" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/7WMmAuYsInY" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        </div>

        <p class="titleCenteredAmusementPark"></p>
        <div class="flexVideos">

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/g1lr94t4sdI" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        </div>

        <p class="titleCenteredGravure"></p>
        <div class="flexVideos">

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/wKb4q9_ifX4" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

          <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/CIn50MNkDho" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>


        </div>


      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
        aria-expanded="false" aria-controls="collapseTwo">
        <div class="theThirdTitle"></div>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-bs-parent="#accordionExample">

      <p class="titleCenteredInAMasterpiece"></p>
      <div class="flexVideos">

        <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/F1eLeIocAcU" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
        <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/DLRzWSzwlp8" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>

      </div>
    </div>
  </div>










  <button class="youTube" class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
    aria-controls="offcanvasExample">

  </button>


  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Q＆A</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <img src="6390.jpg" class="qaFotSize"><br>
      <img src="6389.jpg" class="qaFotSize"><br>
      <img src="6399.jpg" class="qaFotSize"><br>
      <img src="6398.jpg" class="qaFotSize"><br>

    </div>
  </div>

  <?php
    include "virtualRealityInquiryFooter.php";
    ?>

  <script type="text/javascript" src="virtualRealityInquiry.js"></script>
  <!-- jQuery.jsの読み込み -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
</body>

</html>