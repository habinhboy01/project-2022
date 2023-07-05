<!DOCTYPE html>
<html lang="vi">

<head>
    <title>MORTLACH 20 Y.O</title>
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
        <img id="img-product2" src="../../images/img88.png">

        <img class="img-midnight-malt" src="../../images/img81-1.png">

        <div class="content-product4">
            <h4 class="title-malt2">huyền thoại</h4>

            <h4 class="title-malt">whiskey lừng danh</h4>

            <p class="text-malt">
                Tuyệt tác Mortlach 20 Y.O tự hào nằm trong 12 thượng phẩm whisky được bậc thầy chế tác
                Alexander
                Cowie truyền lại cho hậu thế. Được tỉ mỉ chưng cất suốt 20 năm trong thùng gỗ sồi sherry
                Châu
                Âu, Mortlach 20 Y.O kiêu hãnh mang đến dòng whisky đa tầng hương vị nhưng vô cùng êm mượt từ
                họ
                cam quýt và vị trầm ấm của gỗ.
            </p>

            <p class="text-malt">Bằng sự tinh tế và chuẩn xác trong từng chi tiết, Mortlach 20 Y.O sở hữu
                chất
                vị lừng danh, đánh thức mọi giác quan. </p>
        </div>

        <div class="bg-product-pc">
            <div class="container">
                <div class="row content-product-pc">
                    <div class="col-lg-6 col-6">
                        <img class="img-mortlach2" src="../../images/img90.png">
                    </div>

                    <div class="col-lg-6 col-6 text-center">
                        <p class="text-malt2">HƯƠNG</p>

                        <p class="text-malt">Hạt dẻ rang kết hợp với sô cô la đậm đặc.</p>

                        <p class="text-malt2">VỊ</p>

                        <p class="text-malt">Đinh hương và bơ brandy, chà là, vỏ cam, gỗ sồi và bánh quy
                            Hobnob.
                        </p>

                        <p class="text-malt2">HẬU VỊ</p>

                        <p class="text-malt">Kéo dài với hương vị quả mọng mùa hè.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile -->

    <div class="display-slider">
        <div class="Prosperous">
            <div class="container Prosperous2">
                <img id="img-product" src="../../images/img88.png">

                <h4 class="title-malt2">huyền thoại</h4>

                <h4 class="title-malt">whiskey lừng danh</h4>
            </div>
        </div>

        <img class="img-midnight-malt" src="../../images/img81.png">

        <div class="bg-product">
            <div class="container">
                <p class="text-malt">
                    Tuyệt tác Mortlach 20 Y.O tự hào nằm trong 12 thượng phẩm whisky được bậc thầy chế tác
                    Alexander Cowie truyền lại cho hậu thế. Được tỉ mỉ chưng cất suốt 20 năm trong thùng gỗ
                    sồi
                    sherry Châu Âu, Mortlach 20 Y.O kiêu hãnh mang đến dòng whisky đa tầng hương vị nhưng vô
                    cùng êm mượt từ họ cam quýt và vị trầm ấm của gỗ.
                </p>

                <p class="text-malt">Bằng sự tinh tế và chuẩn xác trong từng chi tiết, Mortlach 20 Y.O sở
                    hữu
                    chất vị lừng danh, đánh thức mọi giác quan. </p>

                <div class="row content-product">
                    <div class="col-lg-6 col-6">
                        <img class="img-midnight-malt" src="../../images/img90.png">
                    </div>

                    <div class="col-lg-6 col-6 text-center">
                        <p class="text-malt2">HƯƠNG</p>

                        <p class="text-malt">Hạt dẻ rang kết hợp với sô cô la đậm đặc.</p>

                        <p class="text-malt2">VỊ</p>

                        <p class="text-malt">Đinh hương và bơ brandy, chà là, vỏ cam, gỗ sồi và bánh quy
                            Hobnob.
                        </p>

                        <p class="text-malt2">HẬU VỊ</p>

                        <p class="text-malt">Kéo dài với hương vị quả mọng mùa hè.</p>
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