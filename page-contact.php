<?php
/**
 * @package codearchitect
 *
 * Template Name: contact-template
 */

get_header(); ?>

    <div class="container contact-page">

        <div class="row">

            <div class="col-sm-12">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <div class="container">

                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <h1 class="title"><?php _e(get_the_title(),'codearchitect');?></h1>
                                </div>
                            </div><!--.row-->

                            <div class="row">

                                <div class="col-xs-12 col-sm-6">

                                    <div class="contact-form">
                                        <p><strong><?php echo CA_Inc\modules\contact\ContactSetup::get_contact_module_item('company_name');?></strong></p>
                                        <p><span><?php _e('įmones kodas:','codearchitect');?></span><?php echo CA_Inc\modules\contact\ContactSetup::get_contact_module_item('company_code');?></p>
                                        <p><span><?php _e('PVM kodas:','codearchitect');?></span><?php echo CA_Inc\modules\contact\ContactSetup::get_contact_module_item('company_pvm_code');?></p>
                                        <p><span><?php _e('adresas:','codearchitect');?></span><?php echo CA_Inc\modules\contact\ContactSetup::get_contact_module_item('company_address');?></p>
                                        <p><span><?php _e('telefonas/faksas:','codearchitect');?></span><?php echo CA_Inc\modules\contact\ContactSetup::get_contact_module_item('company_phone_fax');?></p>
                                        <p><span><?php _e('mobilus:','codearchitect');?></span><?php echo CA_Inc\modules\contact\ContactSetup::get_contact_module_item('company_mobile');?></p>
                                        <?php $email=CA_Inc\modules\contact\ContactSetup::get_contact_module_item('company_email');?>
                                        <p><span><?php _e('el. paštas:','codearchitect');?></span><a href="mailto:<?php echo $email?>"><?php echo $email; ?></a></p>
                                        <p><span><?php _e('darbo laikas:','codearchitect');?></span><?php echo CA_Inc\modules\contact\ContactSetup::get_contact_module_item('company_working_hours');?></p>
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="content">
                                        <?php
                                        /* Start the Loop */
                                        while ( have_posts() ) : the_post();

                                            the_content();

                                        endwhile;
                                        ?>
                                    </div><!--.content-->
                                </div>

                            </div><!--.row-->
                        </div><!--.container-->



                    </main><!-- #main -->
                </div><!-- #primary -->

            </div><!-- .col- -->


        </div><!-- .row -->

    </div><!-- .container -->

<?php
get_footer();