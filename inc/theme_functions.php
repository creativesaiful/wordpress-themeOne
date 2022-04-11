<?php 


function themeOne_logo_customize_register($wp_customize){

    //logo section register
    $wp_customize->add_section('themeOne_logo_section', array(
       'title' => __('Update Logo', 'themeOne'),
       'description' => __('Upload a logo to replace the default site name and description in the header', 'themeOne')
    ));
 
    $wp_customize->add_setting('themeOne_logo', array(
       'default' => get_bloginfo('template_directory') . '/img/logo.jpg',
       
    ));
 
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeOne_logo', array(
       'label' => __('Logo', 'themeOne'),
       'section' => 'themeOne_logo_section',
       'settings' => 'themeOne_logo'
    )));
 
    /*=================================
    Menu and logo position
    ==================================*/
 
    $wp_customize->add_section('themeOne_menu_position', array(
       'title' => __('Menu Position', 'themeOne'),
       'description' => __('Change the menu position', 'themeOne')
    ));
 
    $wp_customize->add_setting('themeOne_menu', array(
       'default' => 'right_menu',
 
    ));
 
    $wp_customize->add_control('themeOne_menu', array(
       'label'=> 'Menu Position',
       'description'=>__('Change the menu position', 'themeOne'),
       'section' => 'themeOne_menu_position',
       'settings' => 'themeOne_menu',
       'type' => 'radio',
       'choices'=> array(
          'left_menu' => 'Left Menu',
          'right_menu' => 'Right Menu',
          'center_menu' => 'Center Menu',
       )
    ));
 
  /*=================================
    Footer copyright section
    ==================================*/
 
    $wp_customize->add_section('themeOne_footer_copyright_section', array(
       'title' => __('Footer Copyright', 'themeOne'),
       'description' => __('Change the footer copyright text', 'themeOne')
    ));
 
    $wp_customize->add_setting('themeOne_footer_copyright_setting', array(
       'default' => __('Copyright &copy; '. date("Y")  .' All rights reserved', 'themeOne'),
    ));
 
    $wp_customize->add_control('themeOne_footer_copyright_setting', array(
       'label'=> 'Footer Copyright',
       'description'=>__('Change the footer copyright text', 'themeOne'),
       'section' => 'themeOne_footer_copyright_section',
       'settings' => 'themeOne_footer_copyright_setting',
       'type' => 'textarea'
    ));
 
     /*=================================
    Footer copyright background color
    ==================================*/
 
    $wp_customize->add_section('themeOne_copyright_background_color_section', array(
       'title' => __('Footer Copyright Background Color', 'themeOne'),
       'description' => __('Change the footer copyright background color', 'themeOne')
    ));
 
    $wp_customize->add_setting('themeOne_copyright_background_color_setting', array(
       'default' => '#ea1a70',
    ));
 
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'themeOne_copyright_background_color_setting', array(
       'label'=> 'Footer Copyright Background Color',
       'description'=>__('Change the copyright background color', 'themeOne'),
       'section' => 'themeOne_copyright_background_color_section',
       'settings' => 'themeOne_copyright_background_color_setting'
    )));
 
 
    
 
 }

 add_action('customize_register', 'themeOne_logo_customize_register');