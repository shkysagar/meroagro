<?php
/* Template Name: news-and-event */

get_header(); ?>
    <div class="main-container">
    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php
                    $args = array('post_type' => 'news-and-event');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <div class="article-body">
                            <h3 class="text-center"><?php the_title(); ?></h3>
                            <figure class="text-center">
                                <img alt="Blog Article Figure"
                                     src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"
                                     style="width: 60%">
                            </figure>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>