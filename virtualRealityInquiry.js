
// $(function() {

//   $('body').fadeIn(3000); //3秒かけてフェードイン！

// });



// $(document).ready(function() {
//   var appear = false;

//   var pageTop = $('#page_top');
//   $(window).scroll(function () {
//     if ($(this).scrollTop() > 400) {  //100pxスクロールしたら
//       if (appear == false) {
//         appear = true;
//         pageTop.stop().animate({
//           'bottom': '100px' //下から0pxの位置に
//         }, 300); //0.3秒かけて現れる
//       }
//     } else {
//       if (appear) {
//         appear = false;
//         pageTop.stop().animate({
//           'bottom': '-150px' //下から-50pxの位置に
//         }, 300); //0.3秒かけて隠れる
//       }
//     }
//   });
//   pageTop.click(function () {
//     $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
//     return false;
//   });
// });




//スムーズスクロール部分の記述
{/* <script>
$(function() {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^=#]').click(function() {
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href = $(this).attr("href");
    // 移動先を取得
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を数値で取得
    var position = target.offset().top;
    // スムーススクロール
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
});
</script> */}