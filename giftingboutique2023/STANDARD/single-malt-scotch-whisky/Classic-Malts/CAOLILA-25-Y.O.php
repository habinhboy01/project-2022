<!DOCTYPE html>
<html lang="vi">

<head>
    <title>CAOLILA 25 Y.O</title>
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
            <img id="img-singleton3" src="../../images/img129.png">

            <div class="row bg-product8">
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-singleton5" src="../../images/img151.png">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <p class="text-singleton6">tiếng vọng <br> đại dương</p>

                    <img id="img-singleton4" src="../../images/img140.png">

                    <p class="text-malt text-singleton5">Thừa hưởng không khí mặn ven biển tại Isay, Caol Ila 25
                        Y.O
                        quyến rũ ngay từ mùi không khí biển trong lành và ngọt ngào thoảng hương trái cây.
                        Whisky
                        tạo nên phức hợp cân bằng giữa các đặc tính khói đặc trưng và vị ngọt tinh tế của thảo
                        dược.
                        Đậm vị gỗ sồi, khói, dầu, than bùn và lúa mạch, whisky kết lại cuộc hành trình cảm xúc
                        với
                        hương thảo mộc kéo dài, khá khô và nhiều vị khói, tạo ấn tượng dễ chịu.</p>
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