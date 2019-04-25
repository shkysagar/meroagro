<?php 

/* Template Name: products */ 

get_header();?>

                <div class="main-container">

                    <section class="image-slider-section" style="padding-top: 20px">

                        <div class="container">

                           <!--  <div class="row">

                                <div class="col-md-8">

                                    <ol class="breadcrumb" style="background: none">

                                        <li><a href="http://www.meroagro.com/">Home</a></li>

                                        <li><a href="#">Insecticides</a></li>

                                        <!--                        <li><a href="#">--><!--</a></li>--><!--

                                        <li class="active">Bullet</li>

                                    </ol>

                                </div>

                            </div> -->

                            <div class="row">

                                <div class="col-md-8 col-md-offset-2">

                                    <h1><?php the_title();?></h1>

                                    <div class="item-img text-center">

                                        <img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>"

                                        alt="product"/>

                                    </div>



<p class="lead">





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

                                           <section class="image-divider duplicatable-content hero-services">

                                            <div class="background-image-holder parallax-background">

                                                <img class="background-image" alt="Background Image" src="img/introduction_bg.jpg">

                                            </div>

                                            <div class="container">

                                                <div class="row">

                                                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">

                                                        <h1>Product we serve</h1>

                                                        <h5>distributors and farmers in different level</h5>

                                                    </div>

                                                </div>









                                                <div class="row">

                                                  <div id="product-productitems" class="service-sectiona">

                                                         





<?php

$terms = wp_get_post_terms(get_the_ID(),'product-cat', array("fields" => "ids"));

//print_r($terms);

$args = array(

'post_type'      => 'all-product',

'posts_per_page' => -1,

'order'          => 'ASC',

'tax_query'=>array(

array(

   'taxonomy' => 'product-cat',

   'field'    => 'term_id',

   'terms'    => $terms,

   'operator' => 'IN',

  ))

);



//print_r($args);

$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

 <div class="">

            <div class="item-inner">

                <a href="<?php the_permalink(); ?>">

                    <img alt="Blog Preview" src="<?php the_post_thumbnail($_page->ID,'thumbnail');?>
                </a>

                <div class="post-title">

                    <h2><?php the_title();?></h2>



                   

                    <div class="clearfix"></div>

                    <a href="<?php the_permalink(); ?>"

                    class="link-text">Read More</a>

                </div>

            </div>

        </div>

      



<?php endwhile; ?>

<?php endif; wp_reset_query(); 



?>





                                                    </div><!--end of blog masonry container-->

                                                </div>









                                            </div>

                                        </section>



                                       <?php get_footer();?>