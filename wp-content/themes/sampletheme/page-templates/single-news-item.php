<?php
/**
 * Template Name: News Item
 * Author: Glimsol
 * Usage: Homepage Only
 * Version: 1.0
 * 
 * Template Post Type: news-item
 * @package Glimsol
 */
?>
<?php 
    get_header();
?>

<div id="news-inner">

    <?php get_template_part('template-parts/page-banner'); ?>

    <div class="section wow fadeIn" data-wow-duration="1s" id="news-body">
        <div class="container">
            <div class="row">
                <div class="col-12 content-col">
                    <div class="image-wrapper">
                        <img src="<?php the_field('nws_image'); ?>">
                    </div>
                </div>
                <div class="col-12 content-col">
                    <div class="body">
                        <p><?php the_field('nws_body'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>