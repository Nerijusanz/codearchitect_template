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
                                    <div class="gmap" style="width:100%; height: 300px; border:1px solid red;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17888.723600534722!2d21.827534661369665!3d55.91313201014668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e50e054c96d5f3%3A0x400d18c70e9db90!2zUGx1bmfElw!5e0!3m2!1slt!2slt!4v1522414806640" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>

                            </div><!--.row-->

                    </main><!-- #main -->
                </div><!-- #primary -->

            </div><!-- .col- -->


        </div><!-- .row -->

    </div><!-- .container -->

<?php
get_footer();