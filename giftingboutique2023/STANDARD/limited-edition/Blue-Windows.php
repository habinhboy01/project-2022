<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Blue Windows</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap5/css/bootstrap.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="../vendor/fontawesome-free-5.15.3-web/css/all.min.css">

    <!-- carousel -->
    <link rel="stylesheet" href="../vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

    <!-- library animation -->
    <link rel="stylesheet" type="text/css" href="../css/aos.css">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico" />

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/limited-edition.css">


    <?php
    $direct = '../../';
    ?>
    <link rel="stylesheet" href="<?php echo $direct ?>assets/css/menu.css" />
</head>

    <!-- phần thân -->

    <div class="bg-limited">
        <div class="container">
            <div class="row content-limited4">
                <div class="col-lg-6 col-12">
                    <img class="img-limited" src="../images/Limited-Edition/img10.png">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="content-limited5">
                        <h2 class="title-limited4">Blue Windows</h2>

                        <p class="text-limited2">
                            Hình ảnh người phụ nữ cùng gánh hàng rong được
                            ghi dấu bên nền tường vàng cùng khung cửa xanh
                            đặc trưng tại một góc phố cổ Hội An. Blue Windows
                            chính là hình ảnh tái hiện một cách sống động tác
                            phẩm của Réhahn trên thân chai Johnnie Walker
                            Blue Label, bình yên đến lạ thường.
                            <br>
                            Phiên bản giới hạn đặc biệt Blue Windows × Johnnie
                            Walker Blue Label chỉ được sản xuất 100 chai trên
                            toàn quốc.
                            <br>
                            Sản phẩm có mặt tại Walker Whisky Boutique và hệ thống Whisky Boutique trên toàn quốc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Header Menu -->
    <?php
    $isTab = 'limited';
    $isPage = 'limited';
    require_once $direct .'/header-menu.php' ?>


    <!-- footer -->
    <?php
    require_once $direct .'/footer.php';
    ?>

<!-- bootstrap -->
<script src="../vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="../vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="../js/aos.js"></script>

<!-- My Js -->
<script type="text/javascript" src="../js/limited-edition.js"></script>
<script type="text/javascript" src="../js/style.js"></script>


<script>
    AOS.init();
</script>
</body>

</html>