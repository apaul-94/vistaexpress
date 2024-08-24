<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body style="font-family: New Amsterdam, sans-serif;" <?php body_class(); ?>>

    <header class="navbar">
        <div class="container">

            <div class="navbar-brand">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                <p class="site-tagline"><?php bloginfo('description'); ?></p>
            </div>


            <div class="navbar-toggle" id="navbar-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_class'     => 'navbar-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </div>
    </header>

    <?php get_template_part('scrollbar'); ?>





    <?php wp_footer(); ?>
</body>

</html>