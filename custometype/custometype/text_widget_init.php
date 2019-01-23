<?php
/*
Plugin Name: Custom Post Type 
Plugin URI: #
Description: Custom Post Type like Game Reviews etc.
Version: 1.0
Author: Demo
Author URI: #
License: GPL2 
*/

function game_reviews_init() {
    $args = array(
      'label' => 'Game Reviews',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'game-reviews'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'game-reviews', $args );
}
add_action( 'init', 'game_reviews_init' );