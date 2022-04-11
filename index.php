<?php

//Header callings

get_header() ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

            <?php get_template_part('templates/blog'); ?>
 

            </div>

            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            
        </div>
    </div>

    <div class="container">
        <div class="pagination mt-3">
            <?php
            
            if('themeOne_page_nav'){themeOne_page_nav();}
            else{
                next_post_link();
            }
            ?>
        </div>
    </div>

    
</section>

<?php get_footer() ?>