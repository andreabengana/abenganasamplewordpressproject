<?php
/**
 * Template Name: Home Page
 * Author: Glimsol
 * Usage: Homepage Only
 * Version: 1.0
 * 
 * Template Post Type: page
 * @package Glimsol
 */
?>
<?php 
    get_header();
    global $post;
?>

<div id="homepage">

    <?php get_template_part('template-parts/page-banner-carousel'); ?>

    <div class="section wow fadeIn" data-wow-duration="1s" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-col order-sm-2 order-lg-1">
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
                <div class="col-md-4 image-col order-sm-1 order-lg-2">
                    <div class="image-wrapper">
                        <img src="<?php the_field('r_image'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section has-background wow fadeIn" data-wow-duration="1s" id="home-products"
        style="background: url('<?php the_field('p_desktop_banner');?>');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper centered">
                        <div class="subheading"><?php the_field('p_subheading'); ?></div>
                        <h1 class="heading"><?php the_field('p_heading'); ?></h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tabs-wrapper container">
                        <ul class="nav nav-tabs" id="productTabs" role="tablist">

                            <?php
                        if( have_rows('products_carousel') ):
                            while( have_rows('products_carousel') ) : the_row();
                                $tabLabel = get_sub_field('tab_label');
                                $tabID = get_sub_field('tab_id');
                            ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="<?php echo $tabID; ?>-tab" data-toggle="tab"
                                    href="#<?php echo $tabID; ?>" role="tab" type="button" role="tab"
                                    aria-controls="<?php echo $tabID; ?>">
                                    <?php echo $tabLabel; ?>
                                </button>
                            </li>
                            <?php
                            endwhile;
                            endif;
                        ?>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <?php                      
                if( have_rows('products_carousel') ):
                    while( have_rows('products_carousel') ) : the_row(); 
                    $tabID = get_sub_field('tab_id'); ?>
                        <div class="tab-pane fade" id="<?php echo $tabID; ?>" role="tabpanel"
                            aria-labelledby="<?php echo $tabID; ?>-tab">
                            <div class="owl-carousel">
                                <?php 
    
                        if( have_rows('tab_contents') ):
                            while( have_rows('tab_contents') ) : the_row();
                                $cat_id = get_sub_field('category_id');     
                                $cat_link = get_term_link ($cat_id, 'product_cat');
                                $thumbnail_id =  get_term_meta( $cat_id, 'thumbnail_id', true );  
                                $thumbnail = wp_get_attachment_url( $thumbnail_id );
                                $cat_name = get_the_category_by_ID( $cat_id );
                                    
                                ?>
                                <a href="<?php echo $cat_link; ?>">
                                    <div class="owl-link">
                                        <div class="tab-img"><img src="<?php echo $thumbnail;?>"></div>
                                        <div class="tab-lbl"><?php echo $cat_name; ?></div>
                                    </div>
                                </a>
                                <?php
                                    endwhile;
                                endif;
                                ?>
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

    <div class="section wow fadeIn" data-wow-duration="1s" id="home-news">
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
                        <a href="<?php the_field('l_cta_link'); ?>"><?php the_field('l_cta'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section wow fadeIn" data-wow-duration="1s" id="home-news-events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tabs-wrapper">
                        <ul class="nav nav-tabs" id="neTabs" role="tablist">
                            <?php
                        if( have_rows('news_events_slider') ):
                            while( have_rows('news_events_slider') ) : the_row();
                                $neTabLabel = get_sub_field('ne_tab_label');
                                $neTabID = get_sub_field('ne_tab_id');
                            ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="<?php echo $neTabID; ?>-tab" data-toggle="tab"
                                    href="#<?php echo $neTabID; ?>" role="tab" type="button" role="tab"
                                    aria-controls="<?php echo $neTabID; ?>">
                                    <?php echo $neTabLabel; ?>
                                </button>
                            </li>
                            <?php
                            endwhile;
                            endif;
                        ?>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <?php                      
                            if( have_rows('news_events_slider') ):
                                while( have_rows('news_events_slider') ) : the_row(); 
                                $neTabID = get_sub_field('ne_tab_id'); ?>
                                    <div class="tab-pane fade" id="<?php echo $neTabID; ?>" role="tabpanel"
                                        aria-labelledby="<?php echo $neTabID; ?>-tab">
                                        <div class="owl-carousel ne-carousel">
                                            <?php 
                
                                    if( have_rows('ne_tab_contents') ):
                                        while( have_rows('ne_tab_contents') ) : the_row();
                                            $catLink = get_sub_field('ne_category_link');  
                                            ?>
                                            <a href="<?php echo get_the_permalink($catLink->ID); ?>">
                                                <div class="owl-link">
                                                    <div class="tab-img">
                                                        <img src="<?php echo get_the_post_thumbnail_url($catLink->ID); ?>">
                                                    </div>
                                                    <div class="tab-lbl"><?php echo get_the_title($catLink->ID); ?></div>
                                                    <div class="tab-date"><?php echo get_the_date( 'F j, Y', $catLink->ID ); ?>
                                                    </div>
                                                </div>
                                            </a>
                                            <?php
                                            endwhile;
                                            wp_reset_postdata();
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            else:
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/contact-form'); ?>

</div>

<?php get_footer(); ?>