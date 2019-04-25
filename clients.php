<?php
/* Template Name: clients */ 
get_header();
?>

<div class="main-container">


    <section class="clients">
        <div class="container">
            <div class="row client-row">
                <div class="row-wrapper">
                  <?php
          $args = array('post_type' => 'client');
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
          ?>

                    <div class="col-sm-6 text-center">
                        <a href="<?php the_permalink();?>">
                            <img alt="client" src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                        </a>
                    </div>
                  <?php endwhile;?>
                   
                </div>
            </div><!--end of row-->


        </div><!--end of container-->
    </section>
<?php get_footer();?>