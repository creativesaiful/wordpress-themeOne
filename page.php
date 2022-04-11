

<!--  This is for page template -->


<?php


get_header() 
?>



<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

            <?php get_template_part('templates/post_details'); ?>
 

            </div>

            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>


    
</section>

<?php get_footer() ?>