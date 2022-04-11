<?php 


function themeOne_css_js (){
    wp_enqueue_style('css', get_stylesheet_uri());//Defult style sheet call
 
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');//Bootstrap style sheet registration
    wp_enqueue_style('bootstrap');//Bootstrap style sheet call
 
    wp_register_style('custom-css', get_template_directory_uri() . '/css/custom.css', array());//Custom style sheet registration
    wp_enqueue_style('custom-css');//Custom style sheet call
 
    //JS File Calling
 
    wp_enqueue_script('jquery');//Jquery call
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.1.3', true);//Bootstrap JS call
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);//Custom JS call
 
    //google fonts
    wp_enqueue_script('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato&family=Oswald&family=Roboto&display=swap', array(), '1.0.0', true);//Google fonts call
 
 }
 
 add_action('wp_enqueue_scripts', 'themeOne_css_js');