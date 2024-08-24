<?php
/*
 * This template for displaying the header
 */
get_header();
the_post(); //push for the_author()
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: New Amsterdam, sans-serif;" <?php body_class(); ?>>

    <div class="container">
        <div class="row row-cols-1">

            <div class="col-lg-8 p-3">

                <!-- For post thumnail -->
                <div class="row" id="single-post-thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                </div>

                <!-- For Post Title -->
                <div class="row" id="single-post-title">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>

                <!-- For Post Meta Data -->
                <div class="row" id="single-post-meta-data">
                    <span id="single-post-date"><?php echo get_the_date(); ?></span>
                    <span id="single-post-author"><?php the_author(); ?></span>
                </div>

                <!-- For Post Content -->
                <div class="row" id="single-post-content">
                    <?php the_content(); ?>
                </div>

                <!-- For Previous and Next Post Navigation -->
                <div class="row" id="post-navigation">
                    <div class="col" id="previous-post-link">
                        <div>
                            <?php previous_post_link('%link', '« Previous Post'); ?>
                        </div>
                    </div>
                    <div class="col text-right" id="next-post-link">
                        <div>
                            <?php next_post_link('%link', 'Next Post »'); ?>
                        </div>
                    </div>
                </div>

                <!-- For Categories and Tags -->
                <div class="row" id="single-post-categories-tags">
                    <div class="col p-0" style="margin: 0px 5px 0px 0px">
                        <p id="post-categories-title">Post Categories</p>
                        <?php the_category(' | '); ?>
                    </div>
                    <div class="col p-0 text-right" style="margin: 0px 0px 0px 5px">
                        <p id="post-tags-title">Post Tags</p>
                        <?php the_tags('', ' | ', ''); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 p-3">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="row row-cols-1">

            <div class="col-md-8" >
                <div class="row" id="comment-template-section">
                    <?php comments_template(); ?>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </div>


    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>