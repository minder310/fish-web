<?php
include "./api/db.php";
?>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">澈方</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?do=home">
                            回首頁
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=design_concept">
                            品牌理念
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?do=Product_desciption">
                            魚缸系列
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            烏龜系列
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            聯絡資訊
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- container--xl指地的是在視窗達到1200xp前，都會是100%佔滿這個視窗。 -->
    <div class="container-xl" style="margin-top: 75px;">
        <?php
        // 如果$_GET['do']存在，$do=$_GET['do']，如果不存在$do=home;
        $do = $_GET['do'] ?? 'home';
        // 將$do存入$file內，並且轉成資料夾位置。
        $file = "./" . $do . ".php";
        if (file_exists($file)) {
            include $file;
        } else {
            include "./home.php";
        }
        ?>
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
    <style>
        .a{
            margin-bottom: 25px;
        }
    </style>
    <footer class="container-xl">
        <div class="position-absolute col-4 end-0" style="margin-top: 25px;">
            <a href="?do=login" style="text-decoration:none;color:black;">© 澈方 2023</a>
            <a href="#"><img style="width: 24px;height: 24px;" src="./img/facebook.png" alt=""></a>
            <a href="#"><img style="width: 24px;height: 24px;" src="./img/instagram.png" alt=""></a>
            <a href="#"><img style="width: 24px;height: 24px;" src="./img/line.png" alt=""></a>
        </div>
    </footer>
</body>

</html>