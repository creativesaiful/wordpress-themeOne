<?php

//This is for front page only

get_header() ?>

<section id="body_area">
    <div class="container py-5">
        <div class="row">


            <?php
            query_posts(array(
                'post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'orderby' => 'date'
            ));

            if (have_posts()) :
                while (have_posts()) :
                    the_post();


            ?>
                    <div class="col-md-4">
                        <div class="service_child">
                            <div class="service_child_img">
                                <?php the_post_thumbnail('service'); ?>
                            </div>
                            <div class="service_child_content">
                                <h1><?php the_title() ?></h1>
                                <p> <?php the_excerpt() ?> </p>
                                <a href="<?php the_permalink() ?>" class="btn btn-primary service_btn">Read More</a>
                            </div>
                            <h1></h1>
                        </div>




                    </div>
            <?php endwhile;
            endif; ?>


        </div>
    </div>




</section>

<?php get_footer() ?>