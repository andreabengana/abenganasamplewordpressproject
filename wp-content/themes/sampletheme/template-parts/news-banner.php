<div class="section <?php the_field('banner_css_classes');?>" id="page-banner">
    <div class="desktop-banner-wrapper">
        <img class="desktop-banner desktop-only" src="<?php the_field('desktop_banner'); ?>">
    </div>
    <div class="mobile-banner-wrapper">
        <img class="mobile-banner mobile-only" src="<?php the_field('mobile_banner'); ?>">
    </div>
    <div class="banner-content">

        <div class="container">
            <div class="breadcrumb">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                ?>
            </div>
            <div class="heading-wrapper">
                <div class="banner-subheading"><?php the_field('banner_subheading'); ?></div>
                <h1 class="banner-heading"><?php the_field('banner_heading'); ?></h1>
            </div>
        </div>
    </div>
</div>