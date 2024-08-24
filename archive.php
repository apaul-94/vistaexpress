<?php
/*
 * The template for displaying archive pages
 */

get_header(); ?>

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

    // Set default values for title and excerpt word limits, button color, and text
    $title_words = get_theme_mod('post_page_title_words', 10);
    $excerpt_words = get_theme_mod('post_page_excerpt_words', 20);
    $read_more_color = get_theme_mod('read_more_button_color', '#0073aa');
    $read_more_text = get_theme_mod('read_more_button_text', __('Read More', 'arunvpress'));

    // Determine the current archive type and set up query parameters accordingly
    $args = array(
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'paged' => $paged,
    );

    // Modify query for date-based archives
    if (is_year()) {
        $args['year'] = get_query_var('year');
    } elseif (is_month()) {
        $args['year'] = get_query_var('year');
        $args['monthnum'] = get_query_var('monthnum');
    } elseif (is_day()) {
        $args['year'] = get_query_var('year');
        $args['monthnum'] = get_query_var('monthnum');
        $args['day'] = get_query_var('day');
    }

    // Set archive title based on the archive type
    if (is_category()) {
        $archive_title = 'Category: ' . single_cat_title('', false);
    } elseif (is_tag()) {
        $archive_title = 'Tag: ' . single_tag_title('', false);
    } elseif (is_author()) {
        $archive_title = 'Author: ' . get_the_author();
    } elseif (is_year()) {
        $archive_title = 'Year: ' . get_the_date('Y');
    } elseif (is_month()) {
        $archive_title = 'Month: ' . get_the_date('F Y');
    } elseif (is_day()) {
        $archive_title = 'Day: ' . get_the_date('F j, Y');
    } else {
        $archive_title = 'Archives';
    }

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
                <!-- Archive Posts -->
                <div class="content">
                    <h4 id="archive-title"><?php echo esc_html($archive_title); ?></h4>

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
                        <p><?php _e('Sorry, no posts found in this archive.', 'arunvpress'); ?></p>
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
