<?php
/**
 * Template Name: About Us Landing Page
 * Author: Glimsol
 * Usage: About Us Only
 * Version: 1.0
 * 
 * Template Post Type: page
 * @package Glimsol
 */
?>
<?php 
    get_header();
?>

<div id="about-us">

    <?php get_template_part('template-parts/page-banner'); ?>

    <div class="section wow fadeIn" data-wow-duration="1s" id="offset-section">
        <div class="desktop-banner-wrapper">
            <img class="desktop-banner desktop-only" src="<?php the_field('ho_desktop_background'); ?>">
        </div>
        <div class="mobile-banner-wrapper">
            <img class="mobile-banner mobile-only" src="<?php the_field('ho_mobile_background'); ?>">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 section-heading">
                    <div class="subheading"><?php the_field('ho_subheading'); ?></div>
                    <h1 class="heading"><?php the_field('ho_heading'); ?></h1>

                    <div class="body">
                        <p><?php the_field('ho_section_body'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section wow fadeIn" data-wow-duration="1s" id="expertise">
        <div class="container">
            <div class="row">
                <div class="col-12 banner-col">
                    <div class="heading-wrapper centered">
                        <div class="subheading"><?php the_field('si_subheading'); ?></div>
                        <h1 class="heading"><?php the_field('si_heading'); ?></h1>
                    </div>
                    <div class="body">
                        <p><?php the_field('si_body'); ?></p>
                    </div>
                </div>
                <div class="col-12 body-col">
                    <div class="row">
                        <?php
                        if( have_rows('icons') ):
                            while( have_rows('icons') ) : the_row();
                                $icon = get_sub_field('si_icon');
                                $iconlabel = get_sub_field('si_icon_label');
                            ?>
                        <div class="col-sm-12 col-lg-4">
                            <div class="expertise-icon">
                                <div class="icon-wrapper">
                                    <img src="<?php echo $icon;?>">
                                </div>
                                <?php echo $iconlabel;?>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        endif;
                      ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section wow fadeIn" data-wow-duration="1s" id="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-col">
                    <div class="heading-wrapper">
                        <div class="subheading"><?php the_field('r_subheading'); ?></div>
                        <h1 class="heading"><?php the_field('r_heading'); ?></h1>
                    </div>
                    <div class="body">
                        <p><?php the_field('r_body'); ?></p>
                    </div>

                    <div class="cta-style-2">
                        <a href="<?php the_field('r_cta_link'); ?>"><?php the_field('r_cta_text'); ?></a>
                    </div>
                </div>
                <div class="col-md-4 image-col">
                    <div class="image-wrapper">
                        <img src="<?php the_field('r_image'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section wow fadeIn" data-wow-duration="1s" id="response">
        <div class="desktop-banner-wrapper">
            <img class="desktop-banner desktop-only" src="<?php the_field('l_section_background'); ?>">
        </div>
        <div class="mobile-banner-wrapper">
            <img class="mobile-banner mobile-only" src="<?php the_field('l_section_background_mobile'); ?>">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 image-col">
                    <div class="image-wrapper">
                        <img src="<?php the_field('l_image'); ?>">
                    </div>
                </div>
                <div class="col-md-8 content-col">
                    <div class="heading-wrapper">
                        <div class="subheading"><?php the_field('l_subheading'); ?></div>
                        <h1 class="heading"><?php the_field('l_heading'); ?></h1>
                    </div>

                    <div class="body">
                        <p><?php the_field('l_body'); ?></p>
                    </div>

                    <div class="cta-style-2">
                        <a href="<?php the_field('l_cta_link'); ?>"><?php the_field('l_cta_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section wow fadeIn" data-wow-duration="1s" id="touch-lives">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content-col order-sm-2 order-lg-1">
                    <div class="heading-wrapper">
                        <div class="subheading"><?php the_field('rv_subheading'); ?></div>
                        <h1 class="heading"><?php the_field('rv_heading'); ?></h1>
                    </div>
                    <div class="body">
                        <p><?php the_field('rv_body'); ?></p>
                    </div>

                </div>
                <div class="col-md-6 image-col order-sm-1 order-lg-2">
                    <div class="video-wrapper">
                        <?php the_field('rv_video'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section alt wow fadeIn" data-wow-duration="1s" id="au-banner-bottom">
        <div class="desktop-banner-wrapper">
            <img class="desktop-banner desktop-only" src="<?php the_field('bb_banner'); ?>">
        </div>
        <div class="mobile-banner-wrapper">
            <img class="mobile-banner mobile-only" src="<?php the_field('bb_banner_mobile'); ?>">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-wrapper centered">
                        <div class="subheading-merck"><?php the_field('bb_subheading'); ?></div>
                        <h1 class="heading-merck"><?php the_field('bb_heading'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>