<!DOCTYPE html>
<html lang="vi">

<head>
    <title>THE SINGLETON 25 Y.O</title>
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

    <div class="display-slider2">

        <div class="bg-product2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img id="img-singleton" src="../../images/img100.png">
                    </div>

                    <div class="col-lg-6 col-12">
                        <img class="img-midnight-malt" src="../../images/img112.png">

                        <div class="content-product2">
                            <p class="text-malt">The Singleton of Dufftown 25 Y.O được chưng cất trong
                                những
                                thùng whisky lâu đời nhất của vùng Dufftown với số lượng có hạn. Được ủ
                                trong thùng gỗ Châu Mỹ, sản phẩm mang đến hương vị êm dịu trên vòm miệng
                                và
                                hậu vị trái cây ngọt ngào. Chỉ 1 trong 50.000 thùng gỗ sồi mới đủ phẩm
                                chất
                                để tạo ra chai whisky mạch nha đơn quý hiếm này. Chính niềm đam mê và nỗ
                                lực
                                không ngừng đến gần hơn với sự hoàn hảo đã mang lại cho Dufftown 25 Y.O
                                hương vị tuyệt hảo, xứng đáng là niềm tự hào của dòng whisky danh giá.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-content-singleton2">
                    <img id="img-singleton-pc" src="../../images/img106-1.png">

                    <div class="content-singleton2">
                        <p class="text-malt2">HƯƠNG</p>

                        <p class="text-malt"> Nhẹ nhàng như lời thì thầm của hương thơm nhiệt đới.</p>

                        <p class="text-malt2">VỊ</p>

                        <p class="text-malt">
                            Lê, dứa và chanh dây cân bằng tuyệt đẹp trong vòm miệng.
                        </p>

                        <p class="text-malt2">HẬU VỊ</p>

                        <p class="text-malt">
                            Hài hòa của các nốt hương vị trái cây.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- mobile -->

    <div class="display-slider">

        <div class="bg-product2">
            <img id="img-singleton" src="../../images/img100.png">

            <img class="img-midnight-malt" src="../../images/img112.png">

            <div class="container content-product2">
                <p class="text-malt">The Singleton of Dufftown 25 Y.O được chưng cất trong những thùng
                    whisky lâu đời nhất của vùng Dufftown với số lượng có hạn. Được ủ trong thùng gỗ
                    Châu
                    Mỹ, sản phẩm mang đến hương vị êm dịu trên vòm miệng và hậu vị trái cây ngọt ngào.
                    Chỉ 1
                    trong 50.000 thùng gỗ sồi mới đủ phẩm chất để tạo ra chai whisky mạch nha đơn quý
                    hiếm
                    này. Chính niềm đam mê và nỗ lực không ngừng đến gần hơn với sự hoàn hảo đã mang lại
                    cho
                    Dufftown 25 Y.O hương vị tuyệt hảo, xứng đáng là niềm tự hào của dòng whisky danh
                    giá.
                </p>
            </div>
            
        </div>

        <img class="img-midnight-malt" src="../../images/img106.png">

        <div class="bg-product3">
            <div class="container">
                <p class="text-malt2">HƯƠNG</p>

                <p class="text-malt"> Nhẹ nhàng như lời thì thầm của hương thơm nhiệt đới.</p>

                <p class="text-malt2">VỊ</p>

                <p class="text-malt">
                    Lê, dứa và chanh dây cân bằng tuyệt đẹp trong vòm miệng.
                </p>

                <p class="text-malt2">HẬU VỊ</p>

                <p class="text-malt">
                    Hài hòa của các nốt hương vị trái cây.
                </p>
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