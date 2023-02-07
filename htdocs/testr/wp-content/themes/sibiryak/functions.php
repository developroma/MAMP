<?php 

function sibiryak_assets() {
    wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', false, null, true);
    wp_enqueue_script('js_slick', get_template_directory_uri() . '/assets/app/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script('js_app', get_template_directory_uri() . '/assets/app/app.js', array(), '1.0.0', true);

    wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('normalize_css', get_template_directory_uri() . '/assets/css/normalize.css');
}
show_admin_bar(false);

add_action('wp_enqueue_scripts', 'sibiryak_assets');

add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('products', 'cards', 'sliders'));