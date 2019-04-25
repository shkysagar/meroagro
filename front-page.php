<?php /* Template Name: front */ ?>

<?php get_header(); ?>
    <div class="main-container">
    <section class="hero-slider">
        <ul class="slides text-center">
            <?php

            $post_meta_array = get_post_meta($post->ID, "wpcf-sliderimage");

            foreach ($post_meta_array as $post_meta) {

                ?>
                <li class="overlay">
                    <div class="background-image-holder parallax-background">
                        <img class="background-image" alt="Background Image" src="<?= $post_meta; ?>">
                    </div>
                </li>
            <?php }

            ?>

        </ul>
        <div class="overlay-banner">
            <div class="text-center" style="width: 470px;">
                <img src="<?= get_template_directory_uri(); ?>/img/logo-agro.png" alt=""/>
                <div class="text-right">
                    <h1 style="margin-bottom: 8px">Mero Agro Pvt. Ltd.</h1>
                    <h5 style="background: #008131;
    display: initial;
    padding: 3px 5px;
    font-size: 28px;
    letter-spacing: 4px;
    color: #d3c32f;
    font-style: italic;">किसानको साथी </h5>
                </div>
            </div>
        </div>
    </section>
    <section class="image-divider duplicatable-content hero-services">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image"
                 src="<?= get_template_directory_uri(); ?>/img/introduction_bg.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <!--                    <i class="icon icon-jumbo social_twitter"></i>-->
                    <h1>Products we serve</h1>
                    <h5>DISTRIBUTORS AND FARMERS across DIFFERENT LEVELs</h5>
                </div>
            </div>

            <div class="row">
                <div class="service-sectiona">


                    <?php

                    $categories = get_terms('product-cat', array(
                        'orderby' => 'count',
                        'hide_empty' => 0,
                        'parent' => 0
                    ));


                    foreach ($categories as $term) :


                        ?>


                        <div class="col-md-3">
                            <div id="hearo" class="box overlay">
                                <img src="<?php the_field('category_image', 'product-cat_' . $term->term_id); ?>"
                                     class="box-img"/>
                                <div class="overlay-box-content">
                                    <h1><?php echo $term->name; ?></h1>
                                    <!--                                    <p class="hidden">--><!--...</p>-->
                                    <?php

                                    $args = array(
                                        'post_type' => 'all-product',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'product-cat',
                                                'posts_per_page' => 1,
                                                'field' => 'term_id',
                                                'terms' => $term->term_id
                                            ),
                                        ),
                                    );
                                    $query = get_posts($args);

                                    $post_id = $query[0]->ID;
                                    if ($term->term_id == 13) {
                                        $post_id = 149;
                                    }
                                    ?>
                                    <a href="<?php echo get_permalink($post_id); ?>"
                                       class="btn btn-primary btn-filled btn-xs">Read more</a>
                                </div>

                            </div>
                        </div>
                    <?php endforeach;
                    ?>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>

    <section class="hero-aboutagro overlay"
             style="background: url('<?= get_template_directory_uri(); ?>/uploads/2083_1475747887.jpg') no-repeat center top; background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h1>All About <span>mero agro</span></h1>
                    <?php
                    $id = 200;
                    $post = get_post($id);
                    $content = apply_filters('the_content', $post->post_content);
                    echo $content;
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <div id="heroasd" class="feature-video">
                        <div class="feature-main" style="background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>') center no-repeat; background-size: cover;">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php get_footer(); ?>