<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="main-header">
    <nav class="nav-container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php laville_custom_logo(); ?>
            </a>
        </div>
        <?php
        // Try the WordPress menu first, fall back to hardcoded links
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu',
                'container' => false,
            ));
        } else {
        ?>
            <ul class="nav-menu">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('/gallery/')); ?>">Gallery</a></li>
            </ul>
        <?php } ?>
    </nav>
</header>
