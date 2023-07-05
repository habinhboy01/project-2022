<!DOCTYPE html>
<html lang="vi">

<head>
    <title>THE SINGLETON 54 Y.O</title>
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
                        <img id="img-singleton" src="../../images/img99.png">
                    </div>

                    <div class="col-lg-6 col-12">
                        <img class="bg-product2" src="../../images/img109.png">

                        <div class="content-product2">
                            <p class="text-malt">Là dòng whisky lâu đời và hiếm có bậc nhất mà thương
                                hiệu
                                từng phát hành với chỉ 235 chai trên toàn thế giới, The Singleton 54
                                Paragon
                                of Time II là hiện thân cho những tinh hoa vượt xa khái niệm thời gian.
                                Với
                                hơn nửa thế kỷ ủ rượu bằng tay nghề thủ công điêu luyện, dòng whisky sở
                                hữu
                                tất cả những phẩm chất đỉnh cao chỉ có thể có được từ phương pháp ủ chậm
                                truyền thống của nhà chưng cất Singleton. Vỏ chai, nút đậy riêng biệt
                                được
                                chế tác thủ công bằng bằng pha lê Baccarat, lớp đồng tinh xảo bao quanh
                                cổ
                                chai tạo nên vẻ sang trọng tuyệt đối cho chai rượu. </p>
                        </div>
                    </div>
                </div>

                <img id="img-singleton-pc" src="../../images/img103-1.png">
            </div>
        </div>

    </div>

    <!-- mobile -->

    <div class="display-slider">

        <div class="bg-product2">

            <img id="img-singleton" src="../../images/img99.png">

            <img class="img-midnight-malt" src="../../images/img109.png">

            <div class="container content-product2">
                <p class="text-malt">Là dòng whisky lâu đời và hiếm có bậc nhất mà thương hiệu từng phát
                    hành với chỉ 235 chai trên toàn thế giới, The Singleton 54 Paragon of Time II là
                    hiện
                    thân cho những tinh hoa vượt xa khái niệm thời gian. Với hơn nửa thế kỷ ủ rượu bằng
                    tay
                    nghề thủ công điêu luyện, dòng whisky sở hữu tất cả những phẩm chất đỉnh cao chỉ có
                    thể
                    có được từ phương pháp ủ chậm truyền thống của nhà chưng cất Singleton. Vỏ chai, nút
                    đậy
                    riêng biệt được chế tác thủ công bằng bằng pha lê Baccarat, lớp đồng tinh xảo bao
                    quanh
                    cổ chai tạo nên vẻ sang trọng tuyệt đối cho chai rượu. </p>
            </div>

        </div>

        <img class="img-midnight-malt" src="../../images/img103.png">

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