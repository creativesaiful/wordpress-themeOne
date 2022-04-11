
<hr>
<footer>

<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
            <?php dynamic_sidebar('footer-widget-one'); ?>
        </div>
        <div class="col-md-4">
        <?php dynamic_sidebar('footer-widget-two'); ?>
        </div>
        <div class="col-md-4">
        <?php dynamic_sidebar('footer-widget-three'); ?>
        </div>
    </div>
</div>


    <div id="copyright" style="background-color:<?php echo get_theme_mod('themeOne_copyright_background_color_setting') ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copy_text"> <?php echo get_theme_mod('themeOne_footer_copyright_setting') ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
    


<?php wp_footer() ?>
</body>
</html>