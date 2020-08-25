<?php
function custom_post_type()
{
    register_post_type('latest_works', array(
        'labels' => array(
            'menu_name' => 'Latest Works Menu',
            'name' => 'Latest Works',
            'add_new_item' => 'add new latest work',
            'add_new' => 'add new work',
            'all_items' => 'all latest work',
        ),
        'public' => true,
        'supports' => array(
            'thumbnail', 'custom-fields',
        ),
        'menu_icon' => 'dashicons-hammer'
    ));

    register_post_type('offers', array(
        'labels' => array(
            'menu_name' => 'Offer menu',
            'name' => 'Offers',
            'add_new' => 'Add New Offer',
            'all_items' => 'All offer',
            'add_new_item' => 'Add new offer item'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-heart'
    ));

    register_post_type('simple_post', array(
        'labels' => array(
            'menu_name' => 'Simple Post Menu',
            'name' => 'simple post',
            'add_new' => 'Add New simple',
            'all_items' => 'All simple post',
            'add_new_item' => 'Add new simple post'
        ),
        'public' => true,
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-sos'
    ));

    register_post_type('team_member', array(
        'labels' => array(
            'menu_name' => 'Team Member Menu',
            'name' => 'Team member',
            'add_new' => 'Add New member',
            'all_items' => 'All member',
            'add_new_item' => 'Add new member'
        ),
        'public' => true,
        'supports' => array('thumbnail'),
        'menu_icon' => 'dashicons-groups'
    ));

    
    register_post_type('blog_posts', array(
        'labels' => array(
            'menu_name' => 'Custom Blog Posts',
            'name' => 'Blog Post',
            'add_new' => 'Add New post',
            'add_new_item' => 'Add New Post Item',
            'all_items' => 'All Blog Posts',
        ),
        'public' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail', 'comments '
        ),
        'menu_icon' => 'dashicons-format-aside'
    ));

    register_post_type('gallery', array(
        'labels' => array(
            'menu_name' => 'Galleries',
            'name' => 'Gallery Item',
            'add_new' => 'Add New Item',
            'add_new_item' => 'Add New Gallery Item',
            'all_items' => 'All Gallery Item',
        ),
        'public' => true,
        'supports' => array(
            'thumbnail'
        ),
        'menu_icon' => 'dashicons-format-gallery'
    ));
    register_post_type('contact_options', array(
        'labels' => array(
            'menu_name' => 'Contact Menu',
            'name' => 'Contact Options',
            'add_new' => 'Add New Option',
            'add_new_item' => 'Add New Contact Option',
            'all_items' => 'All Contact Option',
        ),
        'public' => true,
        'supports' => array(
            'thumbnail'
        ),
        'menu_icon' => 'dashicons-location'
    ));
}
add_action('init', 'custom_post_type');
