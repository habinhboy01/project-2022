<!DOCTYPE html>
<html lang="vi">

<head>
    <title>THE SINGLETON 18 Y.O</title>
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

    <div class="bg-product4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2 class="title-singleton">the singleton
                        <br>
                        of dufftown
                        <br>
                        18 y.o
                    </h2>

                    <h3 class="text-singleton">Bùng nổ chất vị niềm vui</h3>

                    <p class="text-singleton2">Nhà chưng cất The Singleton of Dufftown được xây dựng dưới
                        triều
                        đại của Nữ hoàng Victoria với các phương pháp chưng cất whisky thủ công cung nguồn
                        nước
                        tinh khiết được lưu giữ đến ngày hôm nay. The Singleton of Dufftown 18 Y.O thừa
                        hưởng
                        đặc tính cm mượt bậc nhất trong 3 nhà chưng cất The Singleton, với cấu trúc hương vị
                        tinh tế và phong phú được cân bằng hoàn hảo với dư vị hạt trái cây khô, kẹo bơ cùng
                        vanilla pha lẫn hương vị trái cây ngọt ngào. Một chai whisky mạch nha đơn hảo hạng
                        sẽ là
                        điểm nhấn không thể thiếu cho những bữa tiệc đẳng cấp.</p>
                </div>

                <div class="col-lg-6 col-12">
                    <img class="img-midnight-malt" id="img-mortlach6" src="../../images/img115.png">
                </div>
            </div>
        </div>

        <img id="img-mortlach5" src="../../images/img115.png">

        <div class="container bg-product5">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <p class="text-malt2 text-singleton3">HƯƠNG</p>

                    <p class="text-malt text-singleton4">Các loại trái cây hầm, hạt rang, quả phí, quả óc
                        chó,
                        vani và kẹo bơ cứng.</p>
                </div>

                <div class="col-lg-4 col-12">
                    <p class="text-malt2 text-singleton3">VỊ</p>

                    <p class="text-malt text-singleton4">
                        Các loại hạt, kẹo bơ cứng, bánh quy hạnh nhân và kết thúc với vị gỗ, cay nhẹ.
                    </p>
                </div>

                <div class="col-lg-4 col-12">
                    <p class="text-malt2 text-singleton3">HẬU VỊ</p>

                    <p class="text-malt text-singleton4">
                        Hậu vị nhẹ nhàng với hương gỗ sồi, thoảng vị trái cây hầm.
                    </p>
                </div>
            </div>
        </div>

        <img class="img-mortlach7" src="../../images/img118.png">
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