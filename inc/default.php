<?php 
//Title support
add_theme_support('title-tag');

//Thumbnail support
add_theme_support('post-thumbnails', array('page', 'post'));

//thumbnail size
add_image_size('post-thumbnails', 970, 350, true);

// Except to 40 Word

function themeOne_excerpt_more($more){
    $post = get_post();
    return '<br> <br>  <a class="redmore" href="'.get_permalink( $post->ID) . '">' . 'Read More' . '</a>';
  }
  add_filter('excerpt_more', 'themeOne_excerpt_more');
  
  function themeOne_excerpt_lenght($length){
    return 40;
  }

  add_filter('excerpt_length', 'themeOne_excerpt_lenght', 999);


//Post Page Pagination

function themeOne_page_nav(){
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => 'Previous',
        'next_text' => 'Next',
    ));

}


//sidebar registration
function themeOne_main_sidebar(){
  register_sidebar(array(
      'name' => 'Main Sidebar',
      'id' => 'main-sidebar-1',
      'description' => 'This is the main sidebar',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'Footer widget 1',
    'id' => 'footer-widget-one',
    'description' => 'This is the Footer widget one',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => 'Footer widget 2',
  'id' => 'footer-widget-two',
  'description' => 'This is the Footer widget two',
  'before_widget' => '<div class="widget-item">',
  'after_widget' => '</div>',
  'before_title' => '<h4 class="widget-title">',
  'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => 'Footer widget 3',
  'id' => 'footer-widget-three',
  'description' => 'This is the Footer widget Three',
  'before_widget' => '<div class="widget-item">',
  'after_widget' => '</div>',
  'before_title' => '<h4 class="widget-title">',
  'after_title' => '</h4>'
));



}

add_action('widgets_init', 'themeOne_main_sidebar');