<?php
function snd_adoptions_dogs()
{
    register_post_type('adoptable_dogs', array(
        'public' => true,
        'labels' => array(
            'name' => 'Adoptable Dogs',
            'add_new_item' => 'Add New Adoptable Dog',
            'edit_item' => 'Edit Adoptable Dog'
        ),
        'menu_icon' => 'dashicons-pets',
        'show_in_rest' => true,
        'supports' => [
            'title',
            'editor'
        ]
    ));
}
function snd_adoptions_cats()
{
    register_post_type('adoptable_cats', array(
        'public' => true,
        'labels' => array(
            'name' => 'Adoptable Cats',
            'add_new_item' => 'Add New Adoptable Cat',
            'edit_item' => 'Edit Adoptable Cat'
        ),
        'menu_icon' => 'dashicons-pets',
        'show_in_rest' => true,
        'supports' => [
            'title',
            'editor'
        ]
    ));
}
function snd_articles()
{
    register_post_type('articles', array(
        'public' => true,
        'labels' => array(
            'name' => 'Articles',
            'add_new_item' => 'Add New Article',
            'edit_item' => 'Edit Article'
        ),
        'menu_icon' => 'dashicons-format-aside',
        'show_in_rest' => true,
        'supports' => [
            'title',
            'editor',
            'excerpt'
        ]
    ));
}
function snd_employees()
{
    register_post_type('employees', array(
        'public' => true,
        'labels' => array(
            'name' => 'Employees',
            'add_new_item' => 'Add New Employees',
            'edit_item' => 'Edit Employees'
        ),
        'menu_icon' => 'dashicons-networking',
        'show_in_rest' => true,
        'supports' => [
            'title',
            'editor',
            'thumbnail'
        ]
    ));
}

add_action('init', 'snd_adoptions_dogs');
add_action('init', 'snd_adoptions_cats');
add_action('init', 'snd_articles');
add_action('init', 'snd_employees');
