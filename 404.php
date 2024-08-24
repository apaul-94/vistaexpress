<?php
/*
 * This template for displaying the header
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

    <div class="container p-5">

        <div class="row">
            <div class="col text-center" style="font-family: monospace; font-size: 15px;">
                <a href="<?php echo site_url(); ?>">Home</a> <
                <?php
                if (is_404()) {
                    echo '404 - Post/Page Not Found';
                } else {
                    the_title();
                }
                ?>
            </div>
        </div>

        <div class="row row-cols-1">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center">
                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/404-page-image2.png" alt="">
            </div>
            <div class="col-lg-4"></div>
        </div>

        <div class="row">
            <div class="col text-center"><h2>Search Another Post/Page</h2></div>
        </div>

        <div class="row row-cols-1">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <?php get_search_form(); ?>
            </div>
            <div class="col-lg-4"></div>
        </div>

    </div>






    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>