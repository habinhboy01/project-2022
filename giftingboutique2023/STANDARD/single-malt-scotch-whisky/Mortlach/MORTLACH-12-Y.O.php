<!DOCTYPE html>
<html lang="vi">

<head>
    <title>MORTLACH 12 Y.O</title>
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

    <!-- pc -->

    <div class="display-slider2" id="Mortlach02">

        <img id="img-product2" src="../../images/img85.png">

        <img class="img-midnight-malt" src="../../images/img84-1.png">

        <div class="content-product4">

            <h4 class="title-malt2">đánh thức</h4>

            <h4 class="title-malt">mọi giác quan</h4>

            <p class="text-malt">
                Là một trong những dòng whisky được ưa chuộng nhất, Mortlach 12 Y.O chính là cuộc khởi đầu
                của
                hành trình whisky mạch nha đơn cất. Âm thầm chín muồi trong những thùng gỗ sồi cao cấp nhất
                từ
                Châu Âu và Châu Mỹ, whisky làm phong phú và mạnh mẽ thêm các thành phần huyền thoại đã tạo
                nên
                tên tuổi Mortlach, đậm đà hương trái cây và sôi động với vị umami, sô cô la đen thêm chút
                anh
                đào và kết thúc đầy mịn màng thanh tao.
            </p>
        </div>

        <div class="bg-product-pc">
            <div class="container">
                <div class="row content-product-pc">
                    <div class="col-lg-6 col-6">
                        <img class="img-midnight-malt" src="../../images/img93.png">
                    </div>

                    <div class="col-lg-6 col-6 text-center">
                        <p class="text-malt2">HƯƠNG</p>

                        <p class="text-malt">Cân bằng của gỗ sồi và gỗ đàn hương. Gia vị nhẹ, kẹo bơ cứng và
                            quả
                            mọng đỏ.</p>

                        <p class="text-malt2">VỊ</p>

                        <p class="text-malt">Đậm vị, hương trái cây chín, umani, sô cô la đen và cherry.</p>

                        <p class="text-malt2">HẬU VỊ</p>

                        <p class="text-malt">Nhẹ nhàng tạo cảm giác vô cùng dễ chịu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile -->

    <div class="display-slider">
        <div class="Prosperous">
            <div class="container Prosperous2">
                <img id="img-product" src="../../images/img85.png">

                <h4 class="title-malt2">đánh thức</h4>

                <h4 class="title-malt">mọi giác quan</h4>
            </div>
        </div>

        <img class="img-midnight-malt" src="../../images/img84.png">

        <div class="bg-product">
            <div class="container">
                <p class="text-malt">
                    Là một trong những dòng whisky được ưa chuộng nhất, Mortlach 12 Y.O chính là cuộc khởi
                    đầu
                    của hành trình whisky mạch nha đơn cất. Âm thầm chín muồi trong những thùng gỗ sồi cao
                    cấp
                    nhất từ Châu Âu và Châu Mỹ, whisky làm phong phú và mạnh mẽ thêm các thành phần huyền
                    thoại
                    đã tạo nên tên tuổi Mortlach, đậm đà hương trái cây và sôi động với vị umami, sô cô la
                    đen
                    thêm chút anh đào và kết thúc đầy mịn màng thanh tao.
                </p>

                <div class="row content-product">
                    <div class="col-lg-6 col-6">
                        <img class="img-midnight-malt" src="../../images/img93.png">
                    </div>

                    <div class="col-lg-6 col-6 text-center">
                        <p class="text-malt2">HƯƠNG</p>

                        <p class="text-malt">Cân bằng của gỗ sồi và gỗ đàn hương. Gia vị nhẹ, kẹo bơ cứng và
                            quả
                            mọng đỏ.</p>

                        <p class="text-malt2">VỊ</p>

                        <p class="text-malt">Đậm vị, hương trái cây chín, umani, sô cô la đen và cherry.</p>

                        <p class="text-malt2">HẬU VỊ</p>

                        <p class="text-malt">Nhẹ nhàng tạo cảm giác vô cùng dễ chịu.</p>
                    </div>
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

    require_once $direct .'/header-menu.php' ?>

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