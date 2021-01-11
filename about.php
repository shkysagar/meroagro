<?php /* Template Name: about */ ?>
<?php get_header(); ?>
    <div class="main-container">
    <header class="page-header">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image"
                 src="<?= get_template_directory_uri(); ?>/uploads/28483_1475747859.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="text-white alt-font"><a href="">Home</a>> About Us </span>
                    <h1 class="text-white">About Us</h1>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </header>

    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>About Us</h1>

                    <?php
                    $id = get_the_id();
                    $post = get_post($id);
                    $content = apply_filters('the_content', $post->post_content);
                    echo $content;
                    ?>

                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>