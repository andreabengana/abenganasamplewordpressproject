<div class="section has-background wow fadeIn" data-wow-duration="1s" id="contact-section"
    style="background: url('<?php the_field('c_section_background');?>');">
    <div class="container">
        <!-- Breadcrumb and Heading-->
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb desktop-only">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}?>
                </div>
                <div class="heading-wrapper centered">
                    <div class="subheading-alt"><?php the_field('c_subheading'); ?></div>
                    <h1 class="heading-alt"><?php the_field('c_heading'); ?></h1>
                </div>

                <div class="breadcrumb mobile-only">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}?>
                </div>
            </div>
        </div>
        <!-- End -->

        <!-- Contact Form -->
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo do_shortcode('[contact-form-7 id="137" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->

        <div class="row centered-flex-row mt-3">
            <div class="col-12">
                <h1 class="heading-alt text-center">Contact Information</h1>
            </div>
        </div>

        <div class="row social-links">
            <div class="col-4">
                <a href="https://www.facebook.com/merckph/">
                    <div class="fa-wrapper">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    Merck Life Science Philippines
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.instagram.com/merck_ph/">
                    <div class="fa-wrapper">
                        <i class="fab fa-instagram"></i>
                    </div>
                    @merck_ph
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.linkedin.com/company/merck-life-science/">
                    <div class="fa-wrapper">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    Merck Life Science
                </a>
            </div>
        </div>

        <div class="row centered-flex-row">
            <!-- Gmap -->
            <div class="col-sm-12 col-lg-8 centered-flex-row">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="100%" id="gmap_canvas"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.9107429999726!2d121.04828411483972!3d14.547096589836592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8ee0e49d611%3A0x51e90f996994c38d!2sThe%20Finance%20Centre!5e0!3m2!1sen!2sph!4v1627623160952!5m2!1sen!2sph"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>

                    </div>
                </div>
            </div>
            <!-- End -->

            <!-- Contact Details -->
            <div class="col-sm-12 col-lg-4 contact-details">
                <div class="row">
                    <div class="col-2 contact-logo-wrapper">
                        <div class="fa-wrapper">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="loc-name"><?php the_field('location_name'); ?></div>
                        <div class="loc-address"><?php the_field('address'); ?></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 contact-logo-wrapper">
                        <div class="fa-wrapper">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <ul>
                            <?php
                                if( have_rows('contact_numbers') ):
                                    while( have_rows('contact_numbers') ) : the_row();
                                        $contact = get_sub_field('contact_number');
                                        ?>
                            <li>
                                <div class="phone"><?php echo $contact; ?></div>
                            </li>
                            <?php
                                    endwhile;
                                endif;
                                ?>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 contact-logo-wrapper">
                        <div class="fa-wrapper">
                            <i class="fa fa-at"></i>
                        </div>
                    </div>
                    <div class="col-10">
                        <ul>
                            <?php
                                if( have_rows('email_addresses') ):
                                    while( have_rows('email_addresses') ) : the_row();
                                        $email = get_sub_field('email_address');
                                        ?>
                            <li>
                                <div class="email"><?php echo $email; ?></div>
                            </li>
                            <?php
                                    endwhile;
                                endif;
                                ?>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- End -->
        </div>
    </div>