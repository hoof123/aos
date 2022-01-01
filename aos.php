<?php
/**
* Plugin Name: AOS
* Plugin URI: https://github.com/michalsnik/aos/
* Description: a WordPress plugin for AOS - Animate on Scroll Library
* Version: 1.0
* Author: Jake Price | JP Creative Media
* Author URI: https://jpcreativemedia.ca/
**/

// hooks
add_action( 'wp_enqueue_scripts' , 'aos_enqueue_scripts' );
add_action( 'wp_body_open', 'aos_init');

// register styles & scripts
function aos_enqueue_scripts() {

    // css
    wp_register_style('aos-css', plugin_dir_url( __FILE__ ) . 'css/aos.css', 1.0, false);
    wp_enqueue_style('aos-css');

    // js
    wp_register_script('aos-js', plugin_dir_url( __FILE__ ) . 'js/aos.js', 1.0, false);
    wp_enqueue_script('aos-js');
}

function aos_init() {

    // init script
    wp_register_script('aos-init-js', plugin_dir_url( __FILE__ ) . 'js/aos_init.js', 1.0, true);
    wp_enqueue_script('aos-init-js');

}
?>