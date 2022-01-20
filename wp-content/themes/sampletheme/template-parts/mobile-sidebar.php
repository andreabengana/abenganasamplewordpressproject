<div class="sb-slidebar sb-right sb-style-push" id="sidebar-wrapper">
    <div class="container">
        <div class="row">

            <div class="col-12 sidebar-content">
                <div class="sidebar-logo">
                    <a href="<?php echo get_site_url(); ?>">
                        <img id="side-brand"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/images/MERCK_LOGO_Cyan_RGB.png" /></a>
                </div>
                <a href="#" class="sb-toggle-right side-close"><i class="fa fa-times"></i></a>
                <div class="sidebar-nav">
                    <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'mobile-sidebar', 
                        'container_class' => 'mobile-sidebar' )); 
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="sidebar-socials">
                    <div class="social-links">
                        <a href="https://www.facebook.com/merckph/">
                            <div class="fa-wrapper">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/merck_ph/">
                            <div class="fa-wrapper">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/company/merck-life-science/">
                            <div class="fa-wrapper">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="side-copy">
                    <p>© Copyright 2021 Merck Philippines</p>
                </div>
            </div>
        </div>

    </div>
</div>