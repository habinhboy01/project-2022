<!DOCTYPE html>
<html lang="vi">

<head>
    <title>THE SINGLETON 21 Y.O</title>
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
                        <img id="img-singleton" src="../../images/img101.png">
                    </div>

                    <div class="col-lg-6 col-12">
                        <img class="img-midnight-malt" src="../../images/img113.png">

                        <div class="content-product2">
                            <p class="text-malt">The Singleton Of Dufftown 21 Y.O lại là một kiệt tác
                                khác,
                                được ủ trong thùng gỗ sherry Châu Âu mang đến hương vị trái cây mượt mà
                                và
                                ngọt ngào.
                                Kết quả này được tạo ra bởi quy trình chưng cất được tính toán cẩn
                                trọng, và
                                chỉ 1 trong 20.000 thùng gỗ sồi mới đủ phẩm chất để tạo ra chai whisky
                                mạch
                                nha đơn quý hiếm này. Sản phẩm mang đến hương vị êm đằm và ngọt ngào của
                                trái cây, vốn là dấu ấn đặc trưng của bậc thầy pha chế đến từ Dufftown.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-content-singleton2">
                    <img id="img-singleton-pc" src="../../images/img107-1.png">

                    <div class="content-singleton2">
                        <p class="text-malt2">HƯƠNG</p>

                        <p class="text-malt">Bánh mì nướng, gừng mật ong, và thức quà ngâm sherry.</p>

                        <p class="text-malt2">VỊ</p>

                        <p class="text-malt">
                            Ngọt, béo, nhiều kem với vị vừng, quả hồ lô luộc và quả mọng.
                        </p>

                        <p class="text-malt2">HẬU VỊ</p>

                        <p class="text-malt">
                            Kéo dài với khói, mứt trái cây và rất nhiều trái cây mọng đỏ.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- mobile -->

    <div class="display-slider">

        <div class="bg-product2">
            <img id="img-singleton" src="../../images/img101.png">

            <img class="img-midnight-malt" src="../../images/img113.png">

            <div class="container content-product2">
                <p class="text-malt">The Singleton Of Dufftown 21 Y.O lại là một kiệt tác khác, được ủ
                    trong
                    thùng gỗ sherry Châu Âu mang đến hương vị trái cây mượt mà và ngọt ngào.
                    Kết quả này được tạo ra bởi quy trình chưng cất được tính toán cẩn trọng, và chỉ 1
                    trong
                    20.000 thùng gỗ sồi mới đủ phẩm chất để tạo ra chai whisky mạch nha đơn quý hiếm
                    này.
                    Sản phẩm mang đến hương vị êm đằm và ngọt ngào của trái cây, vốn là dấu ấn đặc trưng
                    của
                    bậc thầy pha chế đến từ Dufftown.</p>
            </div>
            
        </div>

        <img class="img-midnight-malt" src="../../images/img107.png">

        <div class="bg-product3">
            <div class="container">
                <p class="text-malt2">HƯƠNG</p>

                <p class="text-malt">Bánh mì nướng, gừng mật ong, và thức quà ngâm sherry.</p>

                <p class="text-malt2">VỊ</p>

                <p class="text-malt">
                    Ngọt, béo, nhiều kem với vị vừng, quả hồ lô luộc và quả mọng.
                </p>

                <p class="text-malt2">HẬU VỊ</p>

                <p class="text-malt">
                    Kéo dài với khói, mứt trái cây và rất nhiều trái cây mọng đỏ.
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