<?php 
function yupnep_resources(){
wp_enqueue_style('style',get_stylesheet_uri());
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'simplelineicons', get_template_directory_uri() . '/css/simple-line-icons.css');
wp_enqueue_style( 'themefyicons', get_template_directory_uri() . '/css/themify-icons.css');
wp_enqueue_style( 'set1', get_template_directory_uri() . '/css/set1.css');
wp_enqueue_style( 'style_', get_template_directory_uri() . '/css/style.css');
wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
wp_enqueue_script( 'poper', get_template_directory_uri() . '/js/popper.min.js');
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
wp_enqueue_script( 'popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js');
wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js');
wp_enqueue_script( 'zmain', get_template_directory_uri() . '/js/z.main.js');
}
add_action('wp_enqueue_scripts','yupnep_resources');

register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));
/* write above here */
?>