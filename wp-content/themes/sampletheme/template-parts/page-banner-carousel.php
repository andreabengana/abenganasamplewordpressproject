<div class="section <?php the_field('banner_css_classes');?>" id="page-banner">
    <div class="owl-carousel b-carousel desktop-only">
        <?php
        if( have_rows('banners') ):
        while( have_rows('banners') ) : the_row();
    ?>
        <div class="owl-banner">
            <div class="desktop-banner-wrapper">
                <img class="desktop-banner desktop-only" src="<?php the_sub_field('desktop_banner'); ?>">
            </div>

            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="desktop-only">
                                <div class="breadcrumb">
                                    <?php
                                        if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="heading-wrapper">
                                <div class="banner-subheading"><?php the_sub_field('banner_subheading'); ?></div>
                                <h1 class="banner-heading"><?php the_sub_field('banner_heading'); ?></h1>
                            </div>
                            <?php if( get_sub_field('banner_cta_text') ): ?>
                            <div class="cta-style-1">
                                <a
                                    href="<?php the_sub_field('banner_cta_link'); ?>"><?php the_sub_field('banner_cta_text'); ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            endif;
        ?>
    </div>

    <div class="owl-carousel bm-carousel mobile-only">
        <?php
        if( have_rows('banners') ):
        while( have_rows('banners') ) : the_row();
    ?>
        <div class="owl-banner">
            <div class="mobile-banner-wrapper">
                <img class="mobile-banner mobile-only" src="<?php the_sub_field('mobile_banner'); ?>">
            </div>
            <div class="banner-content">

                <div class="container">

                    <div class="heading-wrapper">
                        <div class="banner-subheading"><?php the_sub_field('banner_subheading'); ?></div>
                        <h1 class="banner-heading"><?php the_sub_field('banner_heading'); ?></h1>
                    </div>

                    <div class="mobile-only">
                        <div class="breadcrumb">
                            <?php
                                if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                            ?>
                        </div>
                    </div>

                    <?php if( get_field('banner_cta_link') ): ?>
                    <div class="cta-style-1">
                        <a
                            href="<?php the_sub_field('banner_cta_link'); ?>"><?php the_sub_field('banner_cta_text'); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            endif;
        ?>
    </div>
</div>