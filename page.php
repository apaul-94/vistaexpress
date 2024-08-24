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

    <div class="container p-4">
        <div class="row">
            <div class="col text-center">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col text-center" style="font-size: 15px; font-family: monospace;">
                <a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?>
            </div>
        </div>
    </div>

    <div class="container pt-4" style="font-family: monospace;">
        <?php the_content(); ?>
    </div>




    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>