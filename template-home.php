<?php
/*
Template Name: Arun's Custom Home Page
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

    <br><br>
    <!-- Hero Section -->
    <div class="container">
        <div class="row row-cols-1 p-3">

            <!-- Hero Section Col 1 -->
            <div class="col-md" id="hero-section-col1">
                <div class="row" id="welcome-to">Welcome To</div>
                <div class="row" id="vista-press">Vista <span style="color: #6C757D; padding-left: 10px;">Express</span><span style="color: black; font-size: 15px;">V1.0.0</span></div>
                <div class="row" id="your-instantly">Your Instantly Customizable Theme</div>
                <div class="row" id="hero-about1">Vista Express is your go-to WordPress theme for seamless customization and a professional look. Designed with user-friendly features, Vista Express allows you to effortlessly personalize your site with customizable headers, logos, and responsive navigation.</div>
                <div class="row" id="hero-about2">Vista Express is a versatile and highly customizable WordPress theme designed to give your website a polished and professional appearance with minimal effort.</div>
                <div class="row">
                    <a id="hero-about-us-btn" href="" class="btn btn-secondary">About Us</a>
                    <a id="hero-contact-us-btn" href="" class="btn">Contact Us</a>
                </div>

            </div>

            <!-- Hero Section Col 2 -->
            <div class="col-md" id="hero-section-col2">
                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/hero-section-image.png" alt="">
            </div>

        </div>
    </div>

    <br><br>

    <!-- Vista Express Features Section -->
    <div class="container">

        <div class="row p-3">
            <div class="col text-center" id="features-of-vista-press">
                Features of Vista <span style="color: #0073aa; padding-left: 0px;">Express</span>
            </div>
        </div>

        <div class="row row-cols-2">

            <div class="col-lg p-3">
                <div class="row">
                    <div class="col text-center" id="features-image">
                        <img class="w-50" src="<?php echo get_template_directory_uri(); ?>/images/header.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" id="features-texts">
                        Customizable Header & Footer
                    </div>
                </div>
            </div>

            <div class="col-lg p-3">
                <div class="row">
                    <div class="col text-center" id="features-image">
                        <img class="w-50" src="<?php echo get_template_directory_uri(); ?>/images/responsive.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" id="features-texts">
                        Responsive & Flexible Design
                    </div>
                </div>
            </div>

            <div class="col-lg p-3">
                <div class="row">
                    <div class="col text-center" id="features-image">
                        <img class="w-50" src="<?php echo get_template_directory_uri(); ?>/images/widget.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" id="features-texts">
                        Customizable Widgets
                    </div>
                </div>
            </div>

            <div class="col-lg p-3">
                <div class="row">
                    <div class="col text-center" id="features-image">
                        <img class="w-50" src="<?php echo get_template_directory_uri(); ?>/images/navigation.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" id="features-texts">
                        Flexible Navigation
                    </div>
                </div>
            </div>

            <div class="col-lg p-3">
                <div class="row">
                    <div class="col text-center" id="features-image">
                        <img class="w-50" src="<?php echo get_template_directory_uri(); ?>/images/post-display.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" id="features-texts">
                        Pagination & Post Display
                    </div>
                </div>
            </div>

            <div class="col-lg p-3">
                <div class="row">
                    <div class="col text-center" id="features-image">
                        <img class="w-50" src="<?php echo get_template_directory_uri(); ?>/images/updates.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" id="features-texts">
                        Easy Installation & Updates
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br><br>

    <!-- About Admin Section -->
    <div class="container">
        <div class="row row-cols-1 p-3">

            <!-- About Admin Section Col 1 -->
            <div class="col-lg" id="admin-section-col1">
                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/admin-section-image.png" alt="">
            </div>

            <!-- About Admin Section Col 2 -->
            <div class="col-lg" id="admin-section-col2">
                <div class="row" id="welcome-to">About Developer</div>
                <div class="row" id="vista-press">Arun <span style="color: #6C757D; padding-left: 10px;">Paul</span><span style="color: black; font-size: 15px;">IN</span></div>
                <div class="row" id="your-instantly">Web Developer | SEO Specialist | Blogger</div>
                <div class="row" id="hero-about1">I am a seasoned Web Developer, SEO Specialist, and Blogger with over 3 years of hands-on experience in crafting high-performing websites and driving organic traffic. My expertise lies in building responsive, user-friendly websites that align with the latest SEO best practices. Whether it's developing custom WordPress themes, optimizing websites for better search visibility, or writing engaging blog content, I bring a comprehensive skill set to every project.</div>
                <div class="row">
                    <span id="admin-section-social-media-facebook"><a href="">Facebook <i class="bi bi-facebook"></i></a></span>
                    <span id="admin-section-social-media-instagram"><a href="">Instagram <i class="bi bi-instagram"></i></a></span>
                    <span id="admin-section-social-media-linkedin"><a href="">Linkedin <i class="bi bi-linkedin"></i></a></span>
                </div>

            </div>



        </div>
    </div>

    <br><br>

    <!-- Used Technology and Tools Section -->
    <div class="container">

        <div class="row p-3">
            <div class="col text-center" id="features-of-vista-press">
                Used Tools & <span style="color: #0073aa; padding-left: 0px;">Technology</span>
            </div>
        </div>

        <!-- Main Tools & Technology -->
        <div class="row row-cols-1">

            <div class="col-md p-3" id="tools-tech-col">
                <div class="row">
                    <div class="col" id="tools-tech-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/wordpress-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="tools-tech-text1">
                        WP Codex CRM
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="tools-tech-text2">
                        Official documentation that provides guidelines, code examples, and best practices for theme development.
                    </div>
                </div>
            </div>

            <div class="col-md p-3" id="tools-tech-col">
                <div class="row">
                    <div class="col" id="tools-tech-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/php-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="tools-tech-text1">
                        PHP script
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="tools-tech-text2">
                        The core language of WordPress, used to build theme functionality, retrieve and display data from the database.
                    </div>
                </div>
            </div>

            <div class="col-md p-3" id="tools-tech-col">
                <div class="row">
                    <div class="col" id="tools-tech-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/bootstrap-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="tools-tech-text1">
                        Bootstrap FW
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="tools-tech-text2">
                        This frameworks can be integrated into WordPress themes to streamline responsive design and for various screen sizes.
                    </div>
                </div>
            </div>

            <div class="col-md p-3" id="tools-tech-col">
                <div class="row">
                    <div class="col" id="tools-tech-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/vscode-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="tools-tech-text1">
                        Visual Studio Code
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="tools-tech-text2">
                        Popular code editors with features like syntax highlighting, auto-completion, and extensions for WordPress development.
                    </div>
                </div>
            </div>



        </div>

        <!-- Others Tools & Technology -->
        <div class="row row-cols-2">

            <div class="col-lg">
                <div class="row">
                    <div class="col text-center" id="other-tools-tech-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/html-logo.png" alt="">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col text-center">
                        <Span id="other-tools-tech-text-html5">HTML5</Span>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="row">
                    <div class="col text-center" id="other-tools-tech-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/css-logo.png" alt="">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col text-center">
                        <Span id="other-tools-tech-text-css3">CSS3</Span>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="row">
                    <div class="col text-center" id="other-tools-tech-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/js-logo.png" alt="">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col text-center">
                        <Span id="other-tools-tech-text-js">JScript</Span>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="row">
                    <div class="col text-center" id="other-tools-tech-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/jquery-logo.png" alt="">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col text-center">
                        <Span id="other-tools-tech-text-jquery">JQuery</Span>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="row">
                    <div class="col text-center" id="other-tools-tech-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/github-logo.png" alt="">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col text-center">
                        <Span id="other-tools-tech-text-github">github</Span>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="row">
                    <div class="col text-center" id="other-tools-tech-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/xamp-logo.png" alt="">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col text-center">
                        <Span id="other-tools-tech-text-xamp">Xamp</Span>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="row">
                    <div class="col text-center" id="other-tools-tech-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/pinterest-logo.png" alt="">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col text-center">
                        <Span id="other-tools-tech-text-pinterest">Pinterest</Span>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="row">
                    <div class="col text-center" id="other-tools-tech-image">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/google-fonts-logo.png" alt="">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col text-center">
                        <Span id="other-tools-tech-text-gfonts">G. Fonts</Span>
                    </div>
                </div>
            </div>



        </div>


    </div>

    <br><br>

    <!-- Why Choose Us Section -->
    <div class="container">

        <div class="row p-3">
            <div class="col text-center" id="features-of-vista-press">
                Why Choose Us <span style="color: #0073aa; padding-left: 0px;">?</span>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="row row-cols-1">

            <div class="col-md p-3">
                <div class="row">
                    <div class="col" id="why-choose-us-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text1">
                        Clean and Modern
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text2">
                        With a sleek, contemporary design, Vista Express ensures your website has a professional look that appeals to your audience.
                    </div>
                </div>
            </div>

            <div class="col-md p-3">
                <div class="row">
                    <div class="col" id="why-choose-us-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text1">
                        SEO Friendly
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text2">
                        Designed with best practices in mind, Vista Express helps your website rank higher on search engines, driving more traffic to your site.
                    </div>
                </div>
            </div>

            <div class="col-md p-3">
                <div class="row">
                    <div class="col" id="why-choose-us-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text1">
                        Widget-Ready
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text2">
                        With multiple widget areas, you can easily add, arrange, and manage your site’s content to suit your needs.
                    </div>
                </div>
            </div>

        </div>

        <!-- Section 2 -->
        <div class="row row-cols-1">

            <div class="col-md p-3">
                <div class="row">
                    <div class="col" id="why-choose-us-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text1">
                        Global Reach
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text2">
                        With multilingual support and easy translation options, Vista Express is ready to help you reach a global audience.
                    </div>
                </div>
            </div>

            <div class="col-md p-3">
                <div class="row">
                    <div class="col" id="why-choose-us-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text1">
                        Instant Customization
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text2">
                        Easily personalize every aspect of your site without needing to touch a single line of code. From headers to footers, colors to fonts, Vista Express gives you the control.
                    </div>
                </div>
            </div>

            <div class="col-md p-3">
                <div class="row">
                    <div class="col" id="why-choose-us-image">
                        <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/images/right-arrow-logo.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text1">
                        Built for Speed
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="why-choose-us-text2">
                        Vista Express is optimized for performance, ensuring fast load times and smooth navigation, which enhances user experience and boosts SEO.
                    </div>
                </div>
            </div>

        </div>

    </div>

    <br><br>


    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>