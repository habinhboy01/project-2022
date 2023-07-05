<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROSE PARADISE</title>

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

                                <div class="collect-wedding-slider__item collect-slider__item collect-wedding-slider__item--5">
                                    <div class="row align-items-center">
                                        <div class="collect-wedding-slider__item-left collect-slider__item-left">
                                            <div class="collect-wedding-slider__product-image collect-slider__product-image">
                                                <img class="w-100" src="../images/Blue-Rose Paradise.png" alt="Blue-Rose Paradise">
                                            </div>
                                        </div>
                                        <div class="collect-wedding-slider__item-right collect-slider__item-right">
                                            <div class="collect-wedding-slider__product-content collect-slider__product-content">
                                                <h4 class="collect-wedding-slider__product-title collect-slider__product-title font-style-05 text-uppercase cl-white mb-4">
                                                    ROSE PARADISE</h4>
                                                <div class="collect-wedding-slider__product-desc collect-slider__product-desc font-style-04 cl-white lf-text-justify">
                                                    Như gia điệu 999 đóa hồng ngọt ngào, Johnnie Walker Blue Label –
                                                    Rose Paradise là thời khắc thiên đường, ghi dấu những bước chân đầu
                                                    tiên vào cuộc sống hôn nhân. Hạnh phúc ngọt ngào, đằm thắm như hoa
                                                    hồng, tinh tế như câu chúc tuyệt vời đầy ý nghĩa mà Johnnie Walker
                                                    Blue Label muốn khắc ghi cùng bạn.
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