<?php 

// this page is for short code 

function service_shortcode($atts){
    ob_start();
    $query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'date',

    ));

    if($query->have_posts(  )): ?>

        <div class="row">
        <?php while($query->have_posts(  )): 
                
                $query->the_post(  ); ?>

                <div class="col-md-4">
                    <div class="service_child">
                        <div class="service-icon">
                            <?php the_post_thumbnail( 'service' ); ?>
                        </div>
                        <div class="service-content">
                            <h3><?php the_title(  ); ?></h3>
                            <p><?php the_excerpt(  ); ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-primary service_btn">Read More</a>
                            

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>



    <?php 
 
    $mavariable = ob_get_clean();
    return $mavariable;
        
    endif;
};
add_shortcode('service', 'service_shortcode');