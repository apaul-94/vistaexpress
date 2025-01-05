<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="font-family: New Amsterdam, sans-serif;" <?php body_class(); ?>>

    <footer id="footer-section">
        <div class="container">

            <div class="row">
                <!-- Footer 1st Col -->
                <div class="col-12 col-md-6 col-lg-3">
                    <?php if (is_active_sidebar('footer-area-1')) : ?>
                        <?php dynamic_sidebar('footer-area-1'); ?>
                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">About Us</h2>
                            <p>This is the footer about us section. You can write here about yourself and about your business as well. Go to the widget section, you will see the Footer Col Area 1 where you can add whatever you want.</p>
                            <p style="margin-top: -10px; font-weight: bold;">Search Anythings</p>
                            <div class="row pb-3" id="sidebar-default-form" style="margin-top: -10px; font-weight: bold;">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Footer 2nd Col -->
                <div class="col-12 col-md-6 col-lg-3">
                    <?php if (is_active_sidebar('footer-area-2')) : ?>
                        <?php dynamic_sidebar('footer-area-2'); ?>
                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">Quick Links</h2>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Footer 3rd Col -->
                <div class="col-12 col-md-6 col-lg-3">
                    <?php if (is_active_sidebar('footer-area-3')) : ?>
                        <?php dynamic_sidebar('footer-area-3'); ?>
                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">Categories</h2>
                            <ul>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Search Engine</a></li>
                                <li><a href="#">Google Analytics</a></li>
                                <li><a href="#">WordPress Themes</a></li>
                                <li><a href="#">Rank Maths SEO</a></li>
                                <li><a href="#">Blogging</a></li>
                                <li><a href="#">Adsense & Ezoic</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <?php if (is_active_sidebar('footer-area-4')) : ?>
                        <?php dynamic_sidebar('footer-area-4'); ?>
                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">Reach Us</h2>
                            <p>Siliguri, West Bengal, 734010, India</p>
                            <ul>
                                <li><a href="#">💬 +91 7602220806</a></li>
                                <li><a href="#">☎️ +91 7431002209</a></li>
                                <li><a href="#">💌 arunpaul36@gmail.com</a></li>
                                <li><a href="#">💌 palark030@gmail.com</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

            <div class="row">
                <div class="col text-center">
                    <?php if (is_active_sidebar('footer_social_section')) : ?>
                        <?php dynamic_sidebar('footer_social_section'); ?>
                    <?php else : ?>
                        <div class="widget">
                            <h2 class="widget-title">Our Socials</h2>

                            <a href="#">
                                <spna id="our-socials-facebook">Facebook <i class="bi bi-facebook"></i></spna>
                            </a>

                            <a href="#">
                                <spna id="our-socials-github">Github <i class="bi bi-github"></i></spna>
                            </a>

                            <a href="#">
                                <spna id="our-socials-linkedin">Linkedin <i class="bi bi-linkedin"></i></spna>
                            </a>

                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>

    </footer>

    <div class="container-fluid p-4" id="copyright-section">
        <div class="row">
            <div class="col text-center">
                <?php echo esc_html(get_theme_mod('arunvptheme_copyright_text', '© Copyright 2024 | Vista Express | Arun Paul')); ?>
            </div>
        </div>
    </div>


    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="bi bi-airplane-fill"></i>
    </a>



    <?php wp_footer(); ?>
</body>

</html>