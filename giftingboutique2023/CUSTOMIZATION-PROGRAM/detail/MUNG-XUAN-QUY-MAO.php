<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MỪNG XUÂN QUÝ MÃO</title>

    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" />

    <!-- slick -->
    <link rel="stylesheet" href="../vendor/slick/slick.css" />
    <link rel="stylesheet" href="../vendor/slick/slick-theme.css" />


    <!-- Style -->
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reponsive.css">

    <!-- Style Menu -->
    <?php
    $direct = '../../';
    ?>
    <link rel="stylesheet" href="<?php echo $direct ?>assets/css/menu.css" />

</head>

<body>

    <div class="lf-program">
        <div class="lf-program-main">
            <div class="longform-container">
                <!-- Bộ sưu tập tết -->
                <section class="collect-tet-section" id="collectionTet">
                    <!-- Collection Tet Slider -->
                    <div class="collect-tet-slider">
                        <div class="collect-tet-slider__wrap collection-container position-relative">
                            <div class="collect-tet-slider__list customization-program-slider collect-slider lf-slide-arrow-light">
                                <div class="collect-tet-slider__item collect-slider__item">
                                    <div class="row align-items-center">
                                        <div class="collect-tet-slider__item-left collect-slider__item-left">
                                            <div class="collect-tet-slider__product-image collect-slider__product-image">
                                                <img class="w-100" src="../images/Blue-Mung Xuan Quy Mao large.png" alt="">
                                            </div>
                                        </div>
                                        <div class="collect-tet-slider__item-right collect-slider__item-right">
                                            <div class="collect-tet-slider__product-content">
                                                <h4 class="collect-tet-slider__product-title collect-slider__product-title font-style-05 text-uppercase cl-white mb-4">
                                                    MỪNG XUÂN QUÝ MÃO</h4>
                                                <div class="collect-tet-slider__product-desc collect-slider__product-desc font-style-04 cl-white lf-text-justify">
                                                    Một món quà đặc biệt ý nghĩa
                                                    mang trọn vẹn lời chúc cho
                                                    năm Quý Mão hưng thịnh, t ài
                                                    lộc đâm chồi. Cánh hạc bay cao
                                                    mang may mắn, an lành cùng
                                                    Xuân về muôn nơi. Món quà
                                                    tuyệt đẹp này chính là lời chúc
                                                    An khang, Thịnh vượng cho
                                                    năm mới.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!-- Header Menu -->
    <?php
    $isTab = 'customprogram';
    $isPage = 'customprogram';
    require_once $direct . '/header-menu.php' ?>


    <!-- footer -->
    <?php
    require_once $direct . '/footer.php';
    ?>

    <!-- Script -->
    <script src="../vendor/slick/slick.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>