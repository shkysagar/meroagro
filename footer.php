<section class="hero-talktoexpert">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
                <h1>connect <span>with us</span></h1>


                <div class="container-fluid div-support">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="icon-box">
                                <i class="fa fa-map-marker fa-2x"></i>
                            </div>
                            <h2><span>Old Baneshwor, Kumari Complex</span></h2>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <i class="fa fa-phone fa-2x"></i>
                            </div>
                            <h2>Call <span>+977-1-4492285/4470092</span></h2>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box">
                                <i class="fa fa-envelope fa-2x"></i>
                            </div>
                            <h2>Mail <span><a href="mailto:info@meroagro.com">info@meroagro.com</a></span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-8">
                <div class="footer-logo pull-left">
                    <img src="<?= get_template_directory_uri(); ?>/img/footer-agro-logo.png" alt=""/>
                </div>
                <div class="footer-off-info pull-left">
                    <h4>Mero Agro Pvt. Ltd.</h4>
                    <p style="text-left">Kumari Complex, Old Baneshwor,<br/>
                         Kathmandu, Nepal <br/>
                        Post box No:11887<br/>
                        Call: 01-4492285, 4470092<br/>
                        mail: <a href="mailto=info@meroagro.com">info@meroagro.com</a>
                    </p>
                </div>
            </div>


            <div class="col-md-8 footer-product">
                <h5>Product</h5>
                <?php
                wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'footer_menu',
                        'depth' => 5,
                        //'container'         => 'div',
                        // 'container_class'   => 'footer-product',
                        //'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'footmenu-main',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker_footer())
                );
                ?>

            </div>

        </div>
    </div>
    <div class="container">
        <hr/>
        <div class="row coppy">

            <div class="col-md-6">
                <p>© Mero Agro Private Limited 2012- <?php echo date("Y"); ?> . All rights are reserved.</p>
            </div>
            <div class="col-md-6 text-right">
                <p>Crafted with <i class="fa fa-heart fa-pulse"></i> in <a href="https://arctechnepal.com">Kathmandu</a>
                </p>
            </div>
        </div>

    </div>
</footer>

<script src="<?= get_template_directory_uri(); ?>/js/jquery.min.js"></script>

<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>-->

<!--<script src="<?= get_template_directory_uri(); ?>/js/index.js"></script>-->
<!-- owl.carousel JS
============================================ -->
<script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.plugin.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<script src="<?= get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/spectragram.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/scrollReveal.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/isotope.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/twitterFetcher_v10_min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/lightbox.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.countdown.min.js"></script>
<script type="text/javascript"
        src="<?= get_template_directory_uri(); ?>/js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/scripts.js"></script>

<?php wp_footer(); ?>


</body>

</html>
