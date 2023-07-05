<!DOCTYPE html>
<html lang="vi">

<head>
    <title>GLENKINCHIE 12 Y.O</title>
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

    <div class="bg-product7">
        <div class="container">
            <img id="img-singleton3" src="../../images/img127.png">

            <div class="row bg-product8">
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-singleton5" src="../../images/img148.png">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <p class="text-singleton6">phức hợp <br> ngọt ngào</p>

                    <img id="img-singleton4" src="../../images/img147.png">

                    <p class="text-malt text-singleton5">Được ví như một nàng thơ đang độ tuổi xuân thì,
                        rực
                        rỡ tươi mới với sự ngọt ngào mê đắm, Glenkinchie 12 Y.O tỏa ra mùi thơm nhẹ mũi
                        với
                        chút mạch nha lúa mạch, hạnh nhân, quả phỉ và mật ong manuka. Chất vị đậm đà từ
                        trái
                        cây cùng với trái cây hầm, rượu tráng miệng, vỏ táo và mật ong khơi gợi mọi giác
                        quan, và cuối cùng kết lại ở hậu vị dài vừa thoảng hương vị của lúa mạch và cỏ
                        mới
                        cắt.</p>
                </div>
            </div>
        </div>
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