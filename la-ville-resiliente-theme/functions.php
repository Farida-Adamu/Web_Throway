<?php
/**
 * La Ville Resiliente Theme Functions
 */

// Theme Setup
function laville_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'la-ville-resiliente')
    ));

    // Set featured image sizes
    add_image_size('card-thumbnail', 600, 375, true); // 16:10 ratio for cards
    add_image_size('post-featured', 1200, 675, true); // 16:9 ratio for posts
}
add_action('after_setup_theme', 'laville_theme_setup');

// Enqueue styles and scripts
function laville_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('laville-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600&family=Open+Sans:wght@300;400;600&display=swap', array(), null);

    // Theme stylesheet
    wp_enqueue_style('laville-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'laville_enqueue_scripts');

// Excerpt length
function laville_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'laville_excerpt_length');

// Excerpt more
function laville_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'laville_excerpt_more');

// Get first category
function laville_get_first_category() {
    $categories = get_the_category();
    if (!empty($categories)) {
        return esc_html($categories[0]->name);
    }
    return '';
}

// Custom logo SVG
function laville_custom_logo() {
    ?>
    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 5 L28 12 L35 20 L28 28 L20 35 L12 28 L5 20 L12 12 Z"
              stroke="#CC785C"
              stroke-width="2"
              fill="none"
              stroke-linejoin="round"/>
        <path d="M20 12 L25 17 L28 20 L25 23 L20 28 L15 23 L12 20 L15 17 Z"
              stroke="#CC785C"
              stroke-width="1.5"
              fill="none"
              stroke-linejoin="round"/>
        <circle cx="20" cy="20" r="3" fill="#CC785C"/>
    </svg>
    <?php
}
?>
