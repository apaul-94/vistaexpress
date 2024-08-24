<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: New Amsterdam, sans-serif;" <?php body_class(); ?>>


    <section id="posts-page-sidebar">
        <?php if (is_active_sidebar('post-page-sidebar')) : ?>
            <?php dynamic_sidebar('post-page-sidebar'); ?>
        <?php else : ?>
            <div class="widget">
                <h3 class="widget-title">Sidebar Section</h3>
                <div class="row" id="sidebar-default-form">

                    <?php get_search_form();?>
                    
                </div>
                <h4 class="widget-title pt-3">Recent Posts</h4>
                <ul>
                    <li><a href="#">What is SEO?</a></li>
                    <li><a href="#">About Codex</a></li>
                    <li><a href="#">Learn to Skilled Up</a></li>
                </ul>
                <h4 class="widget-title">Categories</h4>
                <ul>
                    <li><a href="#">Theme Dev.</a></li>
                    <li><a href="#">WordPress</a></li>
                    <li><a href="#">React Dev</a></li>
                </ul>
                <p><b>Note: </b>When You Add Something in it from the Widget section, all these text is automatically vanished.</p>
                <p>By Vista Express<br>Made by 💖 Arun Paul.</p>
            </div>
        <?php endif; ?>
    </section>


    <?php wp_footer(); ?>
</body>

</html>