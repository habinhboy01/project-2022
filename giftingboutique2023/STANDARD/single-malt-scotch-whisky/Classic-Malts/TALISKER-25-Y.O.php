<!DOCTYPE html>
<html lang="vi">

<head>
    <title>TALISKER 25 Y.O</title>
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
            <img id="img-singleton3" src="../../images/img122.png">

            <div class="row bg-product8">
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-singleton5" src="../../images/img139.png">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <p class="text-singleton6">món quà <br> từ biển cả</p>

                    <img id="img-singleton4" src="../../images/img140.png">

                    <p class="text-malt text-singleton5">Được ủ trong hỗn hợp thùng gỗ sồi Mỹ và Châu Âu
                        trong hơn một phần tư thế kỷ, Talisker 25 Y.O là món quà dành cho tâm hồn ưa
                        phiêu
                        lưu, và lựa chọn tuyệt hảo cho các nhà thám hiểm tài ba. Hương khói biển đậm đà
                        đi
                        kèm với trái cây tươi cùng vị cay nhẹ của tiêu đỏ nối liền với hương hoa thạch
                        nam
                        tăng dần với vị caramel mặn và sô cô la đen, kết thúc với một chút đắng sau cùng
                        trong làn khói nhẹ dâng lên sống mũi.</p>
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