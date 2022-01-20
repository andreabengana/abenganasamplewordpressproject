<?php
/**
 * Template Name: Products Index
 * Author: Glimsol
 * Usage: Products Index Page
 * Version: 1.0
 * 
 * @package Glimsol
 */
?>

<?php 
    get_header();
?>

<div id="product-index-page">

    <div class="section desktop-only" id="default-page-breadcrumb">
        <div class="container">
            <div class="breadcrumb pt-3">
                <?php
					if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
				?>
            </div>
        </div>
    </div>

    <div class="section wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading">All Products</h2>
                </div>
            </div>

            <div class="section mobile-only" id="default-page-breadcrumb">
                <div class="container">
                    <div class="breadcrumb pt-3">
                        <?php
					        if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
				        ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                $taxonomy     = 'product_cat';
                $orderby      = 'menu_order';  
                $empty        = 0;

                $args = array(
                        'taxonomy'     => $taxonomy,
                        'orderby'      => $orderby,
                        'hide_empty'   => $empty
                );
                $all_categories = get_categories( $args );

                foreach ($all_categories as $cat) {
                    if($cat->category_parent == 0) {
                        $cat_id = $cat->term_id;  
                        $cat_slug = $cat->slug;     
                        $cat_href = get_term_link($cat->slug, 'product_cat');
                        $label = $cat->name;
                        $thumbnail_id =  get_term_meta( $cat_id, 'thumbnail_id', true );  
                        $thumbnail = wp_get_attachment_url( $thumbnail_id );
                ?>
                <div id="section-<?php echo $cat_slug; ?>" class="col-12 category-section wow fadeIn">
                    <div class="row">
                        <div class="product-cat-icon main-cat">
                            <a class="product-nav-item" href="<?php echo $cat_href;?>">
                                <div class="icon-wrapper">
                                    <img class="process-img" src="<?php echo $thumbnail; ?>">
                                </div>
                                <div class="label"><?php echo $label; ?></div>
                            </a>
                        </div>
                    </div>
                    <div class="row category-children">
                        <?php
                            $args = array('taxonomy'=> 'product_cat' ,'parent' => $cat_id, 'hide_empty'  => false,);
                            $cats = get_categories( $args );
                            foreach( $cats as $cat ) {
                                $cat_id = $cat->term_id;       
                                $cat_href = get_term_link($cat->slug, 'product_cat');
                                $label = $cat->name;
                                $thumbnail_id =  get_term_meta( $cat_id, 'thumbnail_id', true );  
                                $thumbnail = wp_get_attachment_url( $thumbnail_id );
                            ?>
                        <div class="col-lg-3 col-sm-12 product-cat-icon">
                            <a class="product-nav-item row" href="<?php echo $cat_href;?>">
                                <div class="col-12"><img src="<?php echo $thumbnail; ?>">
                                </div>
                                <div class="label col-12"><?php echo $label; ?></div>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>

    <div class="section wow fadeIn has-background alt" id="au-banner-bottom">
        <div class="desktop-banner-wrapper">
            <img class="desktop-banner desktop-only"
                src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/images/Mask-Group-50@2x.png">
        </div>
        <div class="mobile-banner-wrapper">
            <img class="mobile-banner mobile-only"
                src="<?php echo get_stylesheet_directory_uri(); ?>/inc/assets/images/Mask-Group-135.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-wrapper centered">
                        <div class="subheading-merck">We are here</div>
                        <h1 class="heading-merck">TO HELP YOU</h1>
                        <div class="cta-style-1">
                            <a href="<?php echo get_site_url(); ?>/contact-us">Reach Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>