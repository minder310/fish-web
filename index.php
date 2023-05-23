<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>魚缸網站</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>

    </style>
</head>

<body>
    <!-- 導覽bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">澈方</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">澈方</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">品牌理念</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">魚缸系列</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">烏龜系列</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">聯絡資訊</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- container--xl指地的是在視窗達到1200xp前，都會是100%佔滿這個視窗。 -->
    <div class="container-xl">
        <!-- 旋轉木馬 -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./img/P1127690.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./img/P1127693.JPG" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/P1127693-01.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- 參考網站:https://www.adana.co.jp/en/ -->
        <!-- 參考網站:https://www.onf.com.tw/ -->
        <!--
    首頁 
    1.首頁左上角為mark，還有中文字。
    2.mark後面接英文名子，並且置中。
    3.導覽列
        3-1 首頁
        3-2 品牌理念
        3-3 魚缸系列
        3-4 烏龜系列
        3-5 聯絡資訊
    4.大圖展示，bootstarp(旋轉木馬)
    5.熱門商品預覽。
        5-1 標題:精選商品。
        5-2 用卡片做出，精選商品介紹。
    6.最下面寫聯絡資訊跟fb。
    -->
        <!-- 後臺管理系統:
    1.可以寫新文案。
    2.可以可以上傳圖片。
    3.登入系統。
    4.改密碼葉面。
    -->
    </div>
</body>

</html>