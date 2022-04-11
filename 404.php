<!-- This page is the 404 page for the site. -->

<?php

//Header callings

get_header() ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                

                <div class="error-template text-center">
                    <h1 class="text-danger">Oops!</h1>
                    <h2>404 Not Found</h2>
                    <div class="error-details my-3">
                        Sorry, an error has occured, Requested page not found!
                    </div>
                    <div class="error-actions">
                        <a href="<?php echo site_url(); ?>" class="btn btn-primary btn-lg home_btn"><span class="glyphicon glyphicon-home"></span>
                            Take Me Home </a>
                    </div>
                </div>
 

            </div>

            
        </div>
    </div>

 

    
</section>

<?php get_footer() ?>