<?php
/* Template Name: downloads */
get_header(); ?>
    <div class="main-container">
    <section class="image-divider duplicatable-content hero-services">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="img/introduction_bg.jpg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
                    <h1>Downloads</h1>
                    <h5>distributors and farmers in different level</h5>
                </div>
            </div>
            <div class="row">
                <div class="blog-masonry-container text-center">
                    <?php
                    foreach (get_cfc_meta('download_img') as $key => $value) { ?>
                        <div class="col-md-4 col-sm-6 blog-masonry-item">
                            <div class="item-inner">
                                <div class="post-title">
                                    <a download="<?php the_cfc_field('download_img', 'download_image_title', false, $key); ?>"
                                       href="<?php the_cfc_field('download_img', 'download_image', false, $key); ?>"
                                       title="ImageName">
                                        <img alt="Blog Preview"
                                             src="<?php the_cfc_field('download_img', 'download_image', false, $key); ?>"/>
                                    </a>
                                    <hr/>
                                    <h2><?php the_cfc_field('download_img', 'download_image_title', false, $key); ?></h2>
                                </div>
                            </div>
                        </div><!--end of individual post-->
                    <?php } ?>
                </div><!--end of blog masonry container-->
            </div><!--end of row-->
        </div>
    </section>
<?php get_footer(); ?>