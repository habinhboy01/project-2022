<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÃ ĐÁO THÀNH CÔNG</title>

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
                                                <img class="w-100" src="../images/M-Ma Dao Thanh Cong.png" alt="M-Ma Dao Thanh Cong">
                                            </div>
                                        </div>
                                        <div class="collect-personalized-slider__item-right collect-slider__item-right">
                                            <div class="collect-personalized-slider__product-content collect-slider__product-content">
                                                <h4 class="collect-personalized-slider__product-title collect-slider__product-title font-style-05 text-uppercase cl-white mb-4">
                                                    MÃ ĐÁO THÀNH CÔNG</h4>
                                                <div class="collect-personalized-slider__product-desc collect-slider__product-desc font-style-04 cl-white lf-text-justify">
                                                    Hình ảnh ngựa vàng thể hiện sự trung thành, tự tin, mạnh mẽ và là
                                                    dấu hiệu của vượt qua khó khăn để tiến đến tương lai tươi sáng, khởi
                                                    đầu cho những may mắn và thành công. Hương vị whisky đầy tinh tế thể
                                                    hiện tinh thần luôn tiên phòng khám phá để đánh thức tiềm năng còn
                                                    ẩn giấu, và sự ăn mừng thành công một cách đầy tinh tế.
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