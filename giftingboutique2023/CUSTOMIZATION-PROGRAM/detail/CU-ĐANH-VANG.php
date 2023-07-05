<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÚ ĐÁNH VÀNG</title>

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
                <!-- Bộ Sưu Tập mang dấu ấn cá nhân -->
                <section class="collect-personalized-section" id="collectionPersonalized">
                    <!-- Collection mang dấu ấn cá nhân Slider -->
                    <div class="collect-personalized-slider">
                        <div class="collect-personalized-slider__wrap collection-container position-relative">
                            <div class="collect-personalized-slider__list collect-slider lf-slide-arrow-light">
                                <div class="collect-personalized-slider__item collect-slider__item">
                                    <div class="row align-items-center">
                                        <div class="collect-personalized-slider__item-left collect-slider__item-left">
                                            <div class="collect-personalized-slider__product-image collect-slider__product-image">
                                                <img class="w-100" src="../images/M-Cu Danh Vang.png" alt="M-Cu Danh Vang">
                                            </div>
                                        </div>
                                        <div class="collect-personalized-slider__item-right collect-slider__item-right">
                                            <div class="collect-personalized-slider__product-content collect-slider__product-content">
                                                <h4 class="collect-personalized-slider__product-title collect-slider__product-title font-style-05 text-uppercase cl-white mb-4">
                                                    CÚ ĐÁNH VÀNG</h4>
                                                <div class="collect-personalized-slider__product-desc collect-slider__product-desc font-style-04 cl-white lf-text-justify">
                                                    Bộ sưu tập “Cú Đánh Vàng” cùng Mortlach 12 Y.O thể hiện sự mạnh mẽ
                                                    khi tung cú đánh của những người đam mê golf, ẩn chứa một tinh thần
                                                    thể thao và sự kiên định dứt khoát của môn thể thao của sự tinh tế
                                                    và chuẩn xác này.
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