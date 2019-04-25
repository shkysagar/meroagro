<?php
/* Template Name: agri-toos */
get_header(); ?>
<script>

</script>

<div class="main-container">


    <section class="image-divider duplicatable-content hero-services">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="img/introduction_bg.jpg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
                    <h1>AGRI-TOOLS</h1>
                    <h5>distributors and farmers in different level</h5>
                </div>
            </div>
            <div class="row">
                <div class="blog-masonry-container text-center">


                    <?php
                    //$post_meta_array = get_post_meta($post->ID, "wpcf-multi_image");

                    //foreach ($post_meta_array as $post_meta) {
                    ?>
                    <?php

                    foreach (get_cfc_meta('agritoolsimage') as $key => $value) { ?>

                        <div class="col-md-4 col-sm-6 blog-masonry-item">
                            <div class="item-inner">
                               <div class="post-title">
                                <a class="image-popup-no-margins" href="<?php the_cfc_field('agritoolsimage', 'agri-image', false, $key); ?>"
                                   title="">
                                            <img alt="Blog Preview"
                                                 src="<?php the_cfc_field('agritoolsimage', 'agri-image', false, $key); ?>"/></a>

                                            <h2><?php the_cfc_field('agritoolsimage', 'agri-image-title', false, $key); ?></h2>
                                            <a class="expand"
                                               href="#image-<?php the_cfc_field('agritoolsimage', 'agri-image', false, $key); ?>"></a>
                                   </div> 
                            </div>
                        </div><!--end of individual post-->
                    <?php } ?>
                </div><!--end of blog masonry container-->
            </div><!--end of row-->
        </div>
    </section>
    <?php get_footer(); ?>
