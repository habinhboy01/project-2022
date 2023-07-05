<!DOCTYPE html>
<html lang="vi">

<head>
    <title>THE SINGLETON 15 Y.O</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="../../vendor/bootstrap5/css/bootstrap.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="../../vendor/fontawesome-free-5.15.3-web/css/all.min.css">

    <!-- carousel -->
    <link rel="stylesheet" href="../../vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

    <!-- library animation -->
    <link rel="stylesheet" type="text/css" href="../../css/aos.css">
    <link rel="shortcut icon" type="image/png" href="../../images/favicon.ico" />

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/single-malt-scotch-whisky.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">

            <!-- Style Menu -->
            <?php
    $direct = '../../../';
    ?>
    <link rel="stylesheet" href="<?php echo $direct ?>assets/css/menu.css" />
</head>

    

    <!-- phần thân -->

    <div class="bg-product4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2 class="title-singleton">the singleton <br> of dufftown <br> 15 y.o
                    </h2>

                    <h3 class="text-singleton">ngọt dịu êm, vui hứng khởi</h3>

                    <p class="text-singleton2">The Singleton 15 7.0 là sự cân bằng hoàn hảo của hương vị
                        thơm
                        ngon không thể cưỡng lại đến từ hương vị trái cây tuyệt hảo đầy sống động, vị mật
                        ong và
                        chất vị tinh tế được kết tinh trong 151 năm. Mọi cuộc vui có The Singleton luôn bùng
                        nổ
                        và sôi động trong sự phấn khởi và nhiệt thành, mở ra trải nghiệm đắm chìm trong chất
                        vị
                        mạch nha đơn tuyệt hảo.</p>
                </div>

                <div class="col-lg-6 col-12">
                    <img class="img-mortlach7" id="img-mortlach6" src="../../images/img116.png">
                </div>
            </div>
        </div>

        <img id="img-mortlach5" src="../../images/img116.png">

        <div class="container bg-product5">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <p class="text-malt2 text-singleton3">HƯƠNG</p>

                    <p class="text-malt text-singleton4">Hương rau mùi, tiêu, xen lẫn với vị sô cô la và cà
                        phê
                        kem.</p>
                </div>

                <div class="col-lg-4 col-12">
                    <p class="text-malt2 text-singleton3">VỊ</p>

                    <p class="text-malt text-singleton4">
                        Hơi cay và khô từ tảo, kẹo bơ cứng, một chút mật ong.
                    </p>
                </div>

                <div class="col-lg-4 col-12">
                    <p class="text-malt2 text-singleton3">HẬU VỊ</p>

                    <p class="text-malt text-singleton4">
                        Mượt mà với hương gỗ sồii thơm nhẹ, cân bằng với nốt hương violet thơm ngậy.
                    </p>
                </div>
            </div>
        </div>

        <img class="img-mortlach7" src="../../images/img119.png">
    </div>



    <!-- Header Menu -->
    <?php
    /** 
     * Value variable $isTab is class active tabs.
     * Options: standard, prestige, limited, customprogram, experience
     * @var string
     */
    $isTab = 'standard';
    /** 
     * Value variable $isPage is class current page
     * Options: standard-blended, standard-single-malt, prestige-blended, prestige-single-malt, limited, customprogram, experience
     * @var string
     */
    $isPage = 'standard-single-malt';

    require_once $direct .'header-menu.php' ?>


    <!-- footer -->
    <?php
    require_once $direct .'footer.php';
    ?>

<!-- bootstrap -->
<script src="../../vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="../../vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="../../js/aos.js"></script>

<!-- My Js -->
<script type="text/javascript" src="../../js/single-malt-scotch-whisky.js"></script>
<script type="text/javascript" src="../../js/style.js"></script>


<script>
    AOS.init();
</script>
</body>

</html>