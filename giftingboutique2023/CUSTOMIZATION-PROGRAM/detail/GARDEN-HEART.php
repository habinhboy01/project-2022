<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GARDEN HEART</title>

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
                <!-- Bộ sưu tập đám cưới -->
                <section class="collect-wedding-section" id="collectionWedding">
                    <!-- Collection Đám Cưới Slider -->
                    <div class="collect-wedding-slider">
                        <div class="collect-wedding-slider__wrap collection-container position-relative">
                            <div class="collect-wedding-slider__list customization-program-slider collect-slider lf-slide-arrow-light">

                                <div class="collect-wedding-slider__item collect-slider__item">
                                    <div class="row align-items-center">
                                        <div class="collect-wedding-slider__item-left collect-slider__item-left">
                                            <div class="collect-wedding-slider__product-image collect-slider__product-image">
                                                <img class="w-100" src="../images/18-Golden Heart.png" alt="18-Golden Heart">
                                            </div>
                                        </div>
                                        <div class="collect-wedding-slider__item-right collect-slider__item-right">
                                            <div class="collect-wedding-slider__product-content collect-slider__product-content">
                                                <h4 class="collect-wedding-slider__product-title collect-slider__product-title font-style-05 text-uppercase cl-white mb-4">
                                                    GARDEN HEART</h4>
                                                <div class="collect-wedding-slider__product-desc collect-slider__product-desc font-style-04 cl-white lf-text-justify">
                                                    Bộ sưu tập Garden Heart là hình ảnh tình yêu khắc
                                                    họa từ hàng ngàn trái tim, tượng trưng cho vẻ
                                                    đẹp của tình yêu – có tinh tế, đằm thắm; có thăng
                                                    hoa, lãng mạn, những cung bậc cảm xúc luôn luôn
                                                    hiện hữu khi yêu. Bộ sưu tập muốn cùng bạn ghi lại
                                                    những khoảnh khắc hạnh phúc nồng nàn này.
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