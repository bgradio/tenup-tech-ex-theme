<?php
### DEFINES ###
define( 'TENUP_TEMPLATE_DIR', get_template_directory() );
define( 'TENUP_STYLESHEET_DIR', get_stylesheet_directory_uri() );

### MENUS ###
function tenup_register_menus() {
    register_nav_menus(
        array(
            'main-nav' => __( 'Main Navigation' ),
        )
    );
}
add_action( 'init', 'tenup_register_menus' );

### STYLES AND SCRIPTS ###
function tenup_enqueue_styles_scripts() {
	wp_enqueue_style( 'tenup-style', TENUP_STYLESHEET_DIR . '/css/style.css');

  #wp_enqueue_script( 'jquery-min', TENUP_STYLESHEET_DIR . '/js/jquery-3.3.1.min.js' );
  wp_enqueue_script( 'tenup-script', TENUP_STYLESHEET_DIR . '/js/script.js', array(), null, true );
  $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
  wp_localize_script( 'tenup-script', 'tenup_theme', $translation_array );
}
add_action( 'wp_enqueue_scripts', 'tenup_enqueue_styles_scripts' );

### FEATURED IMAGES ###
add_theme_support( 'post-thumbnails' );

### LOGO ###
add_theme_support( 'custom-logo' );
