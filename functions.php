<?php
function theme_enqueue_styles(){
  $parent_style='parent-style';
  wp_enqueue_style($parent_style,get_template_directory_uri().'/style.css');
  wp_enqueue_style('child-style',
    get_stylesheet_directory_uri().'/style.css',
    array($parent_style)
   );
}
 add_action('wp_enqueue_scripts','theme_enqueue_styles');

function wmpudev_enqueue_icon_stylesheet() {
	wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
}
 
 add_action( 'wp_enqueue_scripts',
     'wmpudev_enqueue_icon_stylesheet' 
 );
