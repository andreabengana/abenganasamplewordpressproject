<?php
/**
 * Template Name: Landing Page
 * Author: Glimsol
 * Usage: Landing Pages Only
 * Version: 1.0
 * 
 * Template Post Type: page
 * @package Glimsol
 */
?>
<?php 
    get_header();
?>

<div id="landing-page">

    <?php get_template_part('template-parts/page-banner-carousel'); ?>

    <div class="container wow fadeIn" data-wow-duration="1s">
        <?php 
            if(get_field('landing_page_type') == "news"){ 
        ?>
        <div class="row">
            <div class="landing-filter">
                <div class="filter-heading">NEWS FILTER</div>
                <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="news-filter">
                    <?php   
                        $categories = get_categories(array('taxonomy' => 'news_type', 'hide_empty' => false ));
                        $categories2 = get_categories(array('taxonomy' => 'news_topic','hide_empty' => false));
                        
                        $select = "<select name='cat' id='cat' class='postform'>n";
                        $select.= "<option value=''>Select category</option>n";

                        foreach($categories as $category){
                            $select.= "<option value='".$category->slug."'>".$category->name."</option>";
                        }
                        $select.= "</select>";

                        echo $select;

                        $select2 = "<select name='cat' id='topic' class='postform'>n";
                        $select2.= "<option value=''>Select category</option>n";

                        foreach($categories2 as $category){
                            $select2.= "<option value='".$category->slug."'>".$category->name."</option>";
                        }
                        $select2.= "</select>";

                        echo $select2;
                        ?>
                    <div class="cta-style-1">
                        <a href="" id="find-news">Find</a>
                    </div>
                    <div class="cta-style-1">
                        <a href="" name="filter-reset" id="filter-newsreset" value="reset">Reset</a>
                    </div>
                    <input type="hidden" name="action" value="newsFilter">
                </form>
            </div>
        </div>
        <div class="row" id="news-list-wrapper">
            <?php echo do_shortcode('[list_news]'); ?>
        </div>
        <?php
        }
        ?>
        <div class="row">
            <?php
                if(get_field('landing_page_type') == "events"){ 
                    echo do_shortcode('[list_events]'); 
                }
            ?>
            <!-- Row Closer is in Shortcode. Do not add extra div -->
        </div>
    </div>


    <?php get_footer(); ?>