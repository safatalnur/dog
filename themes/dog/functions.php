<?php

//Adds script and stylesheets
function dog_files() {
    wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('dog_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css2?family=Oswald&display=swap");
    wp_enqueue_style('font-awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');

    wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('jquery'), true);
}

add_action('wp_enqueue_scripts', 'dog_files');



//Adds theme support - ex: title tag
function dog_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'dog_features');

?>