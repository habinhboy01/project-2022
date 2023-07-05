<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Tradition</title>
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
                    <img class="img-limited" src="../images/Limited-Edition/img12.png">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="content-limited5">
                        <h2 class="title-limited4">Tradition</h2>

                        <p class="text-limited2">
                            Bắt trọn vẹn khoảnh khắc yên bình giữa ngày cùng
                            tà áo trắng thướt tha, Réhahn đã tinh tế thể hiện
                            một nét đẹp nhẹ nhàng, mang đậm nét văn hóa Việt
                            Nam. Phiên bản giới hạn Tradition × Johnnie Walker
                            Blue Label chính là món quà không thể thiếu dành
                            cho những ai yêu mến tà áo dài truyền thống.
                            <br>
                            Là phiên bản giới hạn đặc biệt chỉ 100 chai trên toàn
                            quốc, đây là tặng phẩm ý nghĩa trong các dịp đặc
                            biệt, mang tính sưu tầm cao.
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