<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home Page</title>

    <link rel="shortcut icon" type="image/png" href="./assets/images/favicon.ico" />

    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/common.css" />

    <!-- slick -->
    <link rel="stylesheet" href="./assets/slick/slick.css" />
    <link rel="stylesheet" href="./assets/slick/slick-theme.css" />

    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />


    <!-- Style Menu -->
    <?php
    $direct = './';
    ?>
    <link rel="stylesheet" href="<?php echo $direct ?>assets/css/menu.css" />

    <!-- <meta property="og:title" content="Gifting Boutique Catalog Tet 2023" />
    <meta property="og:description" content="..." /> -->
    <meta property="og:image"  content="https://giftingboutique.net/catalogTet2023/assets/images/Homepage.png" />
    <meta property="og:image:secure_url" content="https://giftingboutique.net/catalogTet2023/assets/images/Homepage.png" />


</head>

<body>
    <div class="main-page home-page bg-op">
        <a href="#" class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <section class="main-page__open">
            <!-- <div class="main-page__open-title">
                <img src="./assets/images/main-page/title-open.png" alt="">
            </div> -->


            <div class="main-page__open-content">
                <div class="main-page__open-logo">
                    <!-- <img src="./assets/images/main-page/logo-open.png" alt=""> -->
                    <img src="./assets/images/Diageo_Gifting_[FinalAw].png" alt="Diageo_Gifting">
                </div>

                <div class="main-page__circle-logo">
                    <a href="./STANDARD/blended-scotch-whisky.php" class="main-page__circle-logo-item main-page__circle-logo-item--1">
                        <img src="./assets/images/JW_Logo_KeepWalking_LockUp.png" alt="JW Logo KeepWalking">
                    </a>
                    <a href="./STANDARD/single-malt-scotch-whisky.php#MORTLACH" class="main-page__circle-logo-item main-page__circle-logo-item--2">
                        <img src="./assets/images/DEEPBLUE_Mortlach_MasterLogo_Lockup.png" alt="DEEPBLUE Mortlach MasterLogo">
                    </a>
                    <a href="./STANDARD/single-malt-scotch-whisky.php#THESINGLETON" class="main-page__circle-logo-item main-page__circle-logo-item--3">
                        <img src="./assets/images/singletonlogo_whitefont.png" alt="Singleton Logo">
                    </a>
                </div>
                <!-- <div class="main-page__open-title-mb">
                    <img src="./assets/images/main-page/title-open-mb.png" alt="">
                </div> -->

                <div class="main-page__open-btn-discover">
                    <img src="./assets/images/button-discover.png" alt="">
                </div>
            </div>
        </section>

        <section class="main-page__collection mh-100">

            <div class="main-page__collection-ctn">
                <div class="main-page__collection-left">
                    <div class="main-page__collection-left-wrap">
                        <a href="./STANDARD/" class="main-page__collection-img bg-op" style="background-image: url(./assets/images/main-page/collection-left_column.png)">
                            <img src="./assets/images/main-page/collection-Prestige-left.png" alt="">
                            <h3 class="main-page__collection-title">
                                Phiên Bản <br>
                                Cao Cấp
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="main-page__collection-mid">
                    <div class="main-page__video-title">
                        <img src="./assets/images/main-page/a-gift.png" alt="">
                    </div>

                    <div class="main-page__collection-mid-logo">
                        <img src="./assets/images/main-page/collection-logo.png" alt="">
                    </div>
                </div>
                <div class="main-page__collection-right">
                    <div class="main-page__collection-right-wrap">
                        <a href="./PRESTIGE/" class="main-page__collection-img bg-op" style="background-image: url(./assets/images/main-page/collection-right_column.png)">
                            <img src="./assets/images/main-page/collection-Prestige-right-dt.png" alt="">
                            <h3 class="main-page__collection-title">
                                Phiên Bản <br>
                                Giới Hạn
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-page__collection-mb mh-100">
            <div class="main-page__collection-mb-ctn">
                <div class="main-page__collection-mb-slide">
                    <div class="main-page__collection-mb-col-item bg-op" style="background-image: url(./assets/images/main-page/collection-mobile_column.png)">
                        <a href="./STANDARD/">
                            <img src="./assets/images/main-page/collection_prestige-mb-left.png" alt="">
                            <h3 class="main-page__collection-title-mb">
                                Phiên Bản <br>
                                Cao Cấp
                            </h3>
                        </a>
                    </div>

                    <div class="main-page__collection-mb-col-item bg-op" style="background-image: url(./assets/images/main-page/collection-mobile_column.png)">
                        <a href="./PRESTIGE/">
                            <img src="./assets/images/main-page/collection_prestige-mb-right.png" alt="">
                            <h3 class="main-page__collection-title-mb">
                                Phiên Bản <br>
                                Giới Hạn
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Header Menu -->
    <?php
    $isHomePage = true;
    $classContainerMenu = 'header-side-homepage';
    require_once $direct . '/header-menu.php' ?>

    <?php
    $classFooterHomepage = 'footer-homepage';
    require_once $direct . '/footer.php';
    ?>
    <!-- SCRIPT -->
    <script src="./assets/slick/slick.js"></script>

    <script src="./assets/js/main-page.js"></script>

</body>

</html>