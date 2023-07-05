<!-- address -->
<?php if (!isset($classFooterHomepage)) { ?>
    <section class="ss-address<?php echo isset($classFooterHomepage) ? ' ' . $classFooterHomepage : '' ?>">
        <div class="ss-address__container">
            <div class="text-center">
                <div class="ss-address__content wow animate__animated animate__fadeIn">
                    <div class="ss-address__logo">
                        <img src="<?php echo $direct ?>assets/images/menu/Logo-footer.png" alt="Logo-footer">
                    </div>

                    <div class="ss-address__row cl-white">
                        <h3>Hotline CSKH</h3>
                        <p>+84 902 152 777</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php } ?>



<!-- Background opacity -->
<div class="bg-opacity-dark"></div>

<!-- Button Back To Top -->
<div class="btn-back-to-top" onclick="backToTop()"></div>
<!-- Button Share -->
<div class="wrapper-btn-share">
    <button class="btn-share" type="button"></button>
</div>
<!-- Jquery -->
<script src="<?php echo $direct .  'assets/js/jquery/jquery.min.js'; ?>"></script>
<script src="<?php echo $direct . 'assets/js/menu.js'; ?>"></script>