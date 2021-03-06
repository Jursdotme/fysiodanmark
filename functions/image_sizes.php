<?php

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    // add_image_size('large', 700, '', true); // Large Thumbnail
    // add_image_size('medium', 250, '', true); // Medium Thumbnail

    if (function_exists('get_field')) {
      add_image_size('portrait', get_field('portrait_width','option'), get_field('portrait_height','option'), true); // Small Thumbnail
    }
    
    add_image_size('secondthought_feature', 400, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('secondthought', get_template_directory() . '/languages');
}
