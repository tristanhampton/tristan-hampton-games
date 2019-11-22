<?php

if (!function_exists('tristan_games_setup')): 
    function tristan_games_setup()
    {
        add_theme_support( 'title-tag' );
        add_theme_support('post-thumbnails');
    } 
endif;

add_theme_support("after_setup_theme", "tristan_games_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);

function tristan_games_styles()
{
    wp_enqueue_style('tristan_games_reboot', get_template_directory_uri() . '/assets/css/reboot.css');
    wp_enqueue_style('tristan_games_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'tristan_games_styles');

function jargon_scripts () {
    wp_enqueue_script("nav-menu",  get_template_directory_uri() . "/js/nav-menu.js");
}

add_action('wp_enqueue_scripts', 'jargon_scripts');


add_action('admin_head', 'hide_wp_title_input');
function hide_wp_title_input()
{
    $screen = get_current_screen();
    if ($screen->id != 'game') {
        return;
    }
    ?>
    <style type="text/css">
      #post-body-content {
        display: none;
      }
    </style>
  <?php
}

// Change Auto Draft title that appears in the CMS with ACF plugin
function save_post_type_game($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'game') {
        return;
    }

    $header = get_field('header');
    $post_title = $header['game_title'];
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
    wp_update_post($post);
}

function save_post_type_review($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'review') {
        return;
    }

    $header = get_field('header');
    $post_title = $header['review_title'];
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
    wp_update_post($post);
}

add_action('acf/save_post', 'save_post_type_game'); 
add_action('acf/save_post', 'save_post_type_review'); 
?>