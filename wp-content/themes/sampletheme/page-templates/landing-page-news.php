<?php
/**
 * Template Name: News Landing Page
 * Author: Glimsol
 * Usage: Landing Pages Only
 * Version: 1.0
 * 
 * Template Post Type: page, news
 * @package Glimsol
 */
?>

<?php 
    get_header();
?>

<div id="landing-page">

    <?php get_template_part('template-parts/page-banner-carousel'); ?>

    <div class="section container wow fadeIn" data-wow-duration="1s">
        <div class="row">
            <div class="landing-filter">
                <div class="filter-heading">NEWS FILTER</div>
                <form action="" method="POST" id="filter">
                    <?php   
                        $categories = get_categories(array('taxonomy' => 'news_type', 'hide_empty' => false ));
                        $categories2 = get_categories(array('taxonomy' => 'news_topic','hide_empty' => false));

                        $select2 = "<select name='cat' id='topic' class='postform'>n";
                        $select2.= "<option value=''>Topic</option>n";

                        foreach($categories2 as $category2){
                            $select2.= "<option value='".$category2->slug."'>".$category2->name."</option>";
                        }
                        $select2.= "</select>";

                        echo $select2;

                        // $currently_selected = date('Y'); 
                        $earliest_year = 2015; 
                        $latest_year = date('Y'); 

                        print '<select name="yr" id="yr" class="postform">';
                        print '<option value="" selected="selected")>Date</option>';
                        foreach ( range( $latest_year, $earliest_year ) as $i ) {
                            print '<option value="'.$i.'">'.$i.'</option>';
                            //print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
                        }
                        print '</select>';

                        $select = "<select name='type' id='type' class='postform'>n";
                        $select.= "<option value=''>News Type</option>n";

                        foreach($categories as $category){
                            $select.= "<option value='".$category->slug."'>".$category->name."</option>";
                        }
                        $select.= "</select>";

                        echo $select;
                        ?>
                    <div class="cta-style-1">
                        <input type="submit" name="submit" value="Find"/>
                    </div>
                    <div class="cta-style-1">
                        <a href="" name="filter-reset" id="filter-reset" value="reset">Reset</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="row" id="news-list-wrapper">

            <?php 
                if (!empty($_POST['type']) || !empty($_POST['cat']) || !empty($_POST['yr'])):
                    $type = $_POST['type'];
                    $cat = $_POST['cat'];
                    $year = $_POST['yr'];
            ?>
            <div class='filter-notice col-12'>
            <?php
                if(!empty($type) || !empty($cat)){
                    echo "You are looking for articles with the tag(s) <u>".$type. '</u>&nbsp;<u>', $cat,"</u>"; 
                    if(!empty($year)){ echo " posted in the year:", $year; }
                } else {
                    echo "You are looking for articles posted in the year &nbsp;", $year;
                }
            ?>
            </div>
            <?php
                echo do_shortcode('
                    [ajax_load_more 
                    post_type="news-item" 
                    posts_per_page="6"
                    transition_container_classes="row" 
                    taxonomy="news_type:news_topic" 
                    taxonomy_terms="'.$type.':'.$cat.'" 
                    year="'.$year.'"
                    taxonomy_operator="IN:IN"]
                ');
            else:
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $parent = new WP_Query( 
                array(
                    'post_type' => 'news-item',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => '12',
                    'paged' => $paged,
                )
            );

            if ( $parent->have_posts() ) : while ( $parent->have_posts() ) : $parent->the_post(); ?>
            <div class="col-sm-6 col-lg-4">
                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                    <div class="news-item">
                        <div class="thumbnail">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                        </div>
                        <div class="title"><?php echo the_title(); ?></div>
                        <div class="date"><?php echo get_the_date( 'F j, Y' ); ?></div>
                    </div>
                </a>
            </div>

            <?php endwhile; ?>
            </row>
            <?php endif;  
        wp_reset_query();
        ?>

        </div>

        <div class="pagination col-12">
            <?php
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $parent->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( '<i class="fa fa-angle-left"></i>', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( '<i class="fa fa-angle-right"></i>', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
                endif;
            ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>