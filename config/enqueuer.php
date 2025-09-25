<?php

function starkers_script_enqueuer() {
    $js_version = '1.0.0';
    $css_version = '1.0.0';

    ### JS ###
    wp_enqueue_script( 'splide-cdn-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js', array(), $js_version, false );

    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), $js_version, true );
    wp_enqueue_script( 'scrolltrigger-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap-js'), $js_version, true );
    wp_enqueue_script( 'draggable-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Draggable.min.js', array('gsap-js'), $js_version, true );
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/dist/js/app.min.js', array('gsap-js', 'scrolltrigger-js', 'draggable-js'), '2.0.0', true );

    ### CSS ###
    wp_enqueue_style( 'styles-css', get_stylesheet_directory_uri() . '/dist/css/styles.min.css', array(), $css_version, 'screen' );
}

add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );