<?php get_header(); ?>
    <div class="main-container">


    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="article-body">
                        <div class="text-center">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="text-center"
                                 alt="" style="max-width:250px;"/>
                        </div>
                        <br/>
                        <br/>


                        <?php
                        $id = get_the_id();
                        $post = get_post($id);
                        $content = apply_filters('the_content', $post->post_content);
                        echo $content;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>