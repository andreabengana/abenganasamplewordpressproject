<?php $pst_type = get_post_type(); ?>

<div class="section <?php the_field('banner_css_classes');?>" id="page-banner">
    <div class="desktop-banner-wrapper">
        <img class="desktop-banner desktop-only" src="<?php the_field('desktop_banner'); ?>">
    </div>
    <div class="mobile-banner-wrapper">
        <img class="mobile-banner mobile-only" src="<?php the_field('mobile_banner'); ?>">
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

                <div class="col-12 bc">
                    <div class="heading-wrapper">
                        <div class="banner-subheading"><?php the_field('banner_subheading'); ?></div>
                        <h1 class="banner-heading"><?php the_field('banner_heading'); ?></h1>
                        <div class="banner-date"><?php if($pst_type == 'news-item'): echo get_the_date( 'F j, Y' ); endif;?></div>
                    </div>

                    <?php if( get_field('banner_cta_link') ): ?>
                    <div class="cta-style-1">
                        <a href="<?php the_field('banner_cta_link'); ?>"><?php the_field('banner_cta_text'); ?></a>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="col-12">
                    <div class="mobile-only">
                        <div class="breadcrumb">
                            <?php
                                if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>