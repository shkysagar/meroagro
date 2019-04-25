<?php

/* Template Name: dealers */ 

get_header();

?>

<div class="main-container">



    <section class="about-content">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <h1>Mero Agro Authorized Dealers</h1>



                    <table class="table table-hover">

                        <thead>

                        <tr>

                            <th>S.No.</th>

                            <th>Dealers</th>

                            <th>Location</th>

                            
                        </tr>

                        </thead>

                        <tbody>

                        	 <?php 

                  $count = 1;

 foreach( get_cfc_meta( 'dealers_group' ) as $key => $value ){ ?>

   



                        <tr>

                            <th scope="row"><?php echo $count;?></th>

                            <td><?php the_cfc_field( 'dealers_group','dealers', false, $key ); ?></td>

                            <td><?php the_cfc_field( 'dealers_group','location', false, $key );?></td>
                           

                        </tr>

                       <?php  $count++; } ?>

                        



                       



                        </tbody>

                    </table>

<hr/>
<?php echo do_shortcode( '[maplist]' ) ?>

<hr/>

                </div>

            </div>


        </div>

        <?php get_footer(); ?> 

    </section>