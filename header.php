<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>

    <meta charset="utf-8">


    <title>Mero Agro Pvt. Ltd.</title>

    <meta name="description" content="">

    <meta name="Keywords" content=""/>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="ab70cd3484772928"/>
    <meta name="msvalidate.01" content="E308A7BC9961F70D39DE98938360C8C1"/>
    <meta name="google-site-verification" content="A_pBBGugqYpFXvIcXqI1gXhjp_OxJ8oX26PifhW2ivs"/>
    <meta name="norton-safeweb-site-verification"
          content="4dhlicihpmfw-jh6o12ns0fo4t-l1rbgi9384lvnmi6qvotvj7qw1dmmedfwu-zlg3agdxpc9lopirjpx92ox-bbzcroy55d0qqnch0xouw3qqjegy-j59--2vq917op"/>


    <link href="<?= get_template_directory_uri(); ?>/css/flexslider.min.css" rel="stylesheet" type="text/css"
          media="all"/>

    <link href="<?= get_template_directory_uri(); ?>/css/line-icons.min.css" rel="stylesheet" type="text/css"
          media="all"/>

    <link href="<?= get_template_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet"
          type="text/css"

          media="all"/>

    <link href="<?= get_template_directory_uri(); ?>/css/elegant-icons.min.css" rel="stylesheet" type="text/css"
          media="all"/>

    <link href="<?= get_template_directory_uri(); ?>/css/lightbox.min.css" rel="stylesheet" type="text/css"
          media="all"/>

    <link href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"
          media="all"/>

    <link href="<?= get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet" type="text/css" media="all"/>


    <link href="<?= get_template_directory_uri(); ?>/js/magnific-popup/magnific-popup.css" rel="stylesheet"
          type="text/css"/>


    <!-- owl.carousel CSS

    ============================================ -->

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.css">

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.theme.css">

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.transitions.css">

    <script src="<?= get_template_directory_uri(); ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- added -->
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/style_for_imagezoom.css"/>
    <?php wp_head(); ?>
    <script type="text/javascript">

        setTimeout(function () {
            if (location.hash) {
                window.scrollTo(0, 0);
            }
        }, 1);


    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125555715-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-125555715-1');
    </script>

    <!-- endadded -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9929246911847823",
            enable_page_level_ads: true
        });
    </script>
</head>

<body <?php body_class(); ?>>

<div class="nav-container">

    <nav class="top-bar">

        <div class="container">


            <div class="row utility-menu">

                <div class="col-sm-12">

                    <div class="utility-inner clearfix">

                        <ul class="pull-right list-inline alt-font">

                            <li>

                                <i class="icon icon_phone"></i> +977-1-4786329

                            </li>

                            <li>

                                <i class="icon icon_mail"></i><a href="mailto:info@meroagro.com">info@meroagro.com</a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div><!--end of row-->


            <div class="row nav-menu">

                <div class="col-sm-1 col-md-1 columns">

                    <a href="<?php echo home_url(); ?>">

                        <img class="logo logo-dark" alt="Logo"
                             src="<?= get_template_directory_uri(); ?>/img/logo-dark.png">

                    </a>

                </div>


                <div class="col-sm-11 col-md-11 columns">

                    <nav class="navbar navbar-default">

                        <!-- Brand and toggle get grouped for better mobile display -->

                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"

                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                                <span class="sr-only">Toggle navigation</span>

                                <span class="icon-bar"></span>

                                <span class="icon-bar"></span>

                                <span class="icon-bar"></span>

                            </button>

                        </div>


                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                            <?php

                            wp_nav_menu(array(

                                    'menu' => 'primary',

                                    'theme_location' => 'header_menu',

                                    'depth' => 5,

                                    //'container'         => 'div',

                                    //'container_class'   => 'collapse navbar-collapse',

                                    //'container_id'      => 'bs-example-navbar-collapse-1',

                                    'menu_class' => 'nav navbar-nav pull-right',

                                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',

                                    'walker' => new wp_bootstrap_navwalker())

                            );

                            ?>


                        </div><!-- /.navbar-collapse -->

                    </nav>


                </div>

            </div><!--end of row-->


            <div class="mobile-toggle">

                <i class="icon icon_menu"></i>

            </div>


        </div><!--end of container-->

    </nav>

</div>