<?php
/*
Template Name: Contact
*/

 get_header(); ?>

    <div class="main-container">
        <section class="image-slider-section" style="padding-top: 20px">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Contact Us</h1>

                        <br />

                                                                       <?php 
$id=get_the_id(); 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
echo $content;  
?>
                        </div>

                    </div><!--end of row-->
                </div><!--end of container-->
            </section>




<?php get_footer()?>

