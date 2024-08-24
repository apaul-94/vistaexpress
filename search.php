<?php
/*
 * This template for displaying the search results
 */
get_header();

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: New Amsterdam, sans-serif;" <?php body_class(); ?>>

    <?php
    // Get the current page number for pagination
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $title_words = get_theme_mod('post_page_title_words', 10);
    $excerpt_words = get_theme_mod('post_page_excerpt_words', 20);
    $read_more_color = get_theme_mod('read_more_button_color', '#0073aa');
    $read_more_text = get_theme_mod('read_more_button_text', __('Read More', 'arunvpress'));

    // Get the search query
    $search_query = get_search_query();

    // Prepare query arguments
    $args = array(
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'paged' => $paged,
        's' => $search_query, // Search in post title and content
    );

    $query = new WP_Query($args);

    // Function to limit words
    function limit_words($string, $word_limit)
    {
        $words = explode(' ', $string);
        return implode(' ', array_slice($words, 0, $word_limit));
    }

    ?>

    <div class="container">
        <div class="row row-cols-1">

            <!-- For Posts Section -->
            <div class="col-lg-8 p-3">
                <!-- Search Results -->
                <div class="content">
                    <h4 id="cat-tag-search-title"><?php printf(esc_html__('Search Results for: %s', 'arunvpress'), esc_html($search_query)); ?></h4>

                    <?php if ($query->have_posts()) : ?>

                        <div class="post-list">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="post-item">

                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium');
                                            } ?>
                                        </a>
                                    </div>

                                    <h2 class="post-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo limit_words(get_the_title(), $title_words); ?>
                                        </a>
                                    </h2>

                                    <div class="post-meta">
                                        <span class="post-date"><?php echo get_the_date(); ?></span> *
                                        <span class="post-author"><?php the_author(); ?></span>
                                    </div>

                                    <div class="post-excerpt">
                                        <?php echo limit_words(get_the_excerpt(), $excerpt_words); ?>
                                    </div>

                                    <a class="read-more" href="<?php the_permalink(); ?>" style="background-color: <?php echo esc_attr($read_more_color); ?>;">
                                        <?php echo esc_html($read_more_text); ?>
                                    </a>

                                </div>
                            <?php endwhile; ?>
                        </div>

                    <?php else : ?>
                        <p><?php _e('Sorry, no results found for your search.', 'arunvpress'); ?></p>
                    <?php endif; ?>

                </div>

                <!-- For post navigation -->
                <?php arunvptheme_pagination($query); ?>

            </div>

            <!-- For sidebar section -->
            <div class="col-lg-4 p-3">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>