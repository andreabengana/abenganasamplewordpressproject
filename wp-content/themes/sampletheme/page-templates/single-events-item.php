<?php
/**
 * Template Name: Event Item
 * Author: Glimsol
 * Usage: Homepage Only
 * Version: 1.0
 * 
 * Template Post Type: events-item
 * @package Glimsol
 */
?>
<?php 
    get_header();  
?>

<div id="events-inner">

    <?php get_template_part('template-parts/page-banner'); ?>

    <div class="section wow fadeIn" data-wow-duration="1s" id="events-body">
        <div class="container">
            <div class="row">
                <div class="col-12 content-col">
                    <div class="image-wrapper">
                        <img src="<?php the_field('event_banner'); ?>">
                    </div>
                </div>
                <div class="col-lg-8 content-col order-lg-1 order-sm-2">
                    <div class="event-heading">EVENT DETAILS</div>
                    <hr>
                    <div class="body">
                        <p><?php the_field('event_body'); ?></p>
                    </div>
                </div>
                <?php //if (the_field('event_speaker') || the_field('event_speaker_position') || the_field('event_speaker_affiliation')): ?>
                <div class="col-lg-4 col-sm-12 order-sm-1 order-lg-2">
                    <div class="row">
                        <div class="col-2"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <div class="col-8 content-fields">
                            <div class="speaker"><?php the_field('event_speaker'); ?></div>
                            <div class="speaker-position"><?php the_field('event_speaker_position'); ?></div>
                            <div class="speaker-affiliation"><?php the_field('event_speaker_affiliation'); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="fa fa-clock"></i></div>
                        <div class="col-8 content-fields"><?php the_field('event_time'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-2"><i class="fa fa-paper-plane"></i></div>
                        <div class="col-8 content-fields"><a href="" data-toggle="modal"
                                data-target="#formModal">Registration Form</a></div>
                    </div>
                </div>
                <?php //endif;?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="<?php the_field('google_forms_embed_url'); ?>" width="900" height="1122"
                        frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>