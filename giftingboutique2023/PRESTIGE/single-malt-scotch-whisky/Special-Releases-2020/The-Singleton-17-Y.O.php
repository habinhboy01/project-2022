<!DOCTYPE html>
<html lang="vi">

<head>
    <title>The Singleton 17 Y.O</title>
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

    <?php
    $direct = '../../../';
    ?>
    <link rel="stylesheet" href="<?php echo $direct ?>assets/css/menu.css" />
</head>

    

    <!-- phần thân -->

    <!-- slider 2 -->

    <div class="container">
        <div class="row rare-nature2">
            <div class="col-lg-6 col-12">
                <img class="img-prima2" src="../../images/img73.png">
            </div>

            <div class="col-lg-6 col-12">
                <div class="content-prima-ultima3">
                    <img src="../../images/line.png">

                    <img id="img-rare-nature" src="../../images/img81.png">

                    <p class="text-prima2 text-rare-nature">Từ nhà chưng cất có sức sống mạnh mẽ như những
                        chú
                        cá hồi bơi người dòng nước vùng Highlands, Singleton Dufftown 17 Y.O là cuộc dạo
                        chơi
                        giữa khu vườn đầy hoa thơm,với hương trái cây sống động pha vị ngọt ngào của mật
                        ong, để
                        rồi kết thúc một cách trầm ấm xen lẫn vị cay nhè nhẹ. Một sự cân bằng đến hoàn hảo!
                    </p>

                    <img src="../../images/line.png">
                </div>
            </div>
        </div>
    </div>



    <!-- Header Menu -->
    <?php
    $isTab = 'prestige';
    $isPage = 'prestige-single-malt';
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