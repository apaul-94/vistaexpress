<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: New Amsterdam, sans-serif;" <?php body_class(); ?>>


    <?php
    // Arguments for WP_Query
    $args = array(
        'posts_per_page' => 5, // Number of posts to display
        'post_status'    => 'publish', // Only published posts
    );

    // Fetch recent posts
    $recent_posts = new WP_Query($args);
    ?>



    <?php if ($recent_posts->have_posts()) : ?>
        <?php if (get_theme_mod('enable_post_scroll', true)) : ?>

            <div class="recent-posts-scroll container mt-md-3">

                <div class="row row-cols-2 ">

                    <div class="col-2 p-2" id="recent-posts-title">
                        New
                    </div>

                    <div class="col-10 p-2" style="align-content: center;">
                        <div class="scrolling-wrapper">
                            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                                <div class="scroll-item">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            <?php endwhile; ?>

                            <?php
                            // Duplicate items for seamless scroll
                            $recent_posts->rewind_posts();
                            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                                <div class="scroll-item">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            <?php endwhile; ?>

                            <!-- Optionally, duplicate again if you want a longer scroll effect -->
                            <?php
                            $recent_posts->rewind_posts();
                            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                                <div class="scroll-item">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            <?php endwhile; ?>

                        </div>
                    </div>

                </div>

            </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p>No recent posts available.</p>
    <?php endif; ?>




    <?php wp_footer(); ?>
</body>

</html>