<?php

function snd_files()
{
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
    wp_enqueue_style('snd_stylesheet', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_script('snd_main_js', get_theme_file_uri('/assets/javascript/app.js'), array(), null, true);
}

add_action('wp_enqueue_scripts', 'snd_files');

function internat_feature()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'internat_feature');
