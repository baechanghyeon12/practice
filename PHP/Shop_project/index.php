<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="layout/header-1/header_1.css">
  <link rel="stylesheet" href="layout/footer-1/footer_1.css">
  <link rel="stylesheet" href="layout/content-1/content_1.css">
  <title>Document</title>
</head>
<body>
  <?php require_once("./layout/header-1/header_1.php")?>
  <div class="container">
  <div class="main-img-outer">
    <div class="main-img">
      <div class="main-img-item">
        <img class="main-img-img" src="img/background-img-2.png" alt="">
        <a href="">
          <div class="img-text-box">
            <h2>바다</h2>
            <p>아름다운 바다로 떠나가입시다~</p>
          </div>
        </a>
      </div>
      <div class="main-img-item">
        <img class="main-img-img"  src="img/background-img-3.png" alt="">
        <a href="">
          <div class="img-text-box">
            <h2>바다</h2>
            <p>아름다운 바다로 떠나가입시다~</p>
          </div>
        </a>
      </div>
      <div class="main-img-item">
        <img class="main-img-img"  src="img/background-img-4.png" alt="">
        <a href="">
          <div class="img-text-box">
            <h2>산</h2>
            <p>아름다운 바다로 떠나가입시다~</p>
          </div>
        </a>
      </div>
      <div class="main-img-item">
        <img class="main-img-img"  src="img/background-img-5.png" alt="">
        <a href="">
          <div class="img-text-box">
            <h2>바다</h2>
            <p>아름다운 바다로 떠나가입시다~</p>
          </div>
        </a>
      </div>
    </div>
    <div class="prev_btn_outer"><button type="button" class="prev">이전</button></div>
    <div class="next_btn_outer"><button  type="button" class="next">다음</button></div>
  </div>
  <h4>원하시는 제품을 찾아보세요.</h4>
  <div class="main-img-link">
      <div class="main-img-link-item">
        <img class="main-img-link-item-img" src="./img/link-box-icon.png" alt="">
      </div>
      <div class="main-img-link-item">
        <img class="main-img-link-item-img" src="./img/link-box-icon.png" alt="">
      </div>
      <div class="main-img-link-item">
        <img class="main-img-link-item-img" src="./img/link-box-icon.png" alt="">
      </div>
      <div class="main-img-link-item">
        <img class="main-img-link-item-img" src="./img/link-box-icon.png" alt="">
      </div>
      <div class="main-img-link-item">
        <img class="main-img-link-item-img" src="./img/link-box-icon.png" alt="">
      </div>
      <div class="main-img-link-item">
        <img class="main-img-link-item-img" src="./img/link-box-icon.png" alt="">
      </div>
  </div>
  <div class="wrapper">
    <div class="main-contents">
      <? for($i = 0; $i <10; $i++){?>
      <div class="main-contents-item">
        <img  src="img/background-img-3.png" alt="">
      </div>
      <?}?>
    </div>
  </div>
</div>
  <?php require_once("./layout/footer-1/footer_1.php")?>
  <script src="./index.js"></script>
</body>
</html>