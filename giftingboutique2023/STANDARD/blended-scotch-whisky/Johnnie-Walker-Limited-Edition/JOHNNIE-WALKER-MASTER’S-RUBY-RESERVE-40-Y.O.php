<!DOCTYPE html>
<html lang="vi">

<head>
    <title>JOHNNIE WALKER Master’s Ruby Reserve 40 Y.O</title>
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
    <link rel="stylesheet" type="text/css" href="../../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <!-- Style Menu -->
    <?php
    $direct = '../../../';
    ?>
    <link rel="stylesheet" href="<?php echo $direct ?>assets/css/menu.css" />
</head>

    

    <!-- phần thân -->

    <div class="owl-carousel owl-theme carousel_1" id="JohnnieWalkerLimitedEditionSlider">

        <!-- slider 1 -->

        <div class="item">
            <img id="img-johnnie-walker" src="../../images/img5-1.png">
        </div>

        <!-- slider 2 -->

        <div class="item">
            <img id="img-johnnie-walker" src="../../images/img5-2.png">
        </div>
    </div>

    <!-- nội dung -->

    <div class="bg-johnnie-walker bg-johnnie-walker2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 text-center">
                    <img id="img-johnnie-walker2" src="../../images/img13.png">
                </div>

                <div class="col-lg-8 col-12">
                    <h2 class="text-limied3">Huyền thoại đằng sau kiệt tác 40 năm</h2>

                    <p class="text-limied4">Được ra mắt với số lượng giới hạn chỉ 398 chai trên toàn thế giới,
                        Johnnie Walker Master’s Ruby Reserve được phát hành nhân dịp kỷ niệm hành trình 40 năm
                        tại vị của bậc thầy pha chế Jim Beveridge đồng hành cùng thương hiệu Johnnie Walker. Jim
                        và đội ngũ của mình đã tuyển chọn kỹ lượng nguyên liệu đầu vào gồm 8 dòng whisky từ các
                        nhà chưng cất lừng danh, bao gồm những chất vị đến từ những cái tên huyền thoại như
                        Cambus, Carsebridge, Pittyvaich và Port Ellen. Tất cả được hòa quyện một cách khéo léo
                        và đóng chai trong bình pha lê Baccarat được nung chảy cùng vàng 24 carat ở chính xác
                        540 độ để tạo nên màu hồng ngọc rực rỡ mang tính biểu tượng.</p>
                </div>
            </div>
        </div>
    </div>



    <!-- Header Menu -->
    <?php
    $isTab = 'standard';
    $isPage = 'standard-blended';
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
<script type="text/javascript" src="../../js/blended-scotch-whisky.js"></script>
<script type="text/javascript" src="../../js/style.js"></script>


<script>
    AOS.init();
</script>
</body>

</html>