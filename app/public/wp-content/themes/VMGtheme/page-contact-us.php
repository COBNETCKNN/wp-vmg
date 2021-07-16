<?php get_header(); ?>

<section id="contactus" class="w-full font-dmsans">
    <div class="container mx-auto">
        <!-- GRID FOR HEADING -->
        <div class="grid grid-cols-3 gap-4 py-10">
            <!-- HEADING -->
            <div class="col-span-2">
                <p class="text-brandcontent uppercase text-xs font-bold tracking-widest">business objectives</p>
                <h1 class="pt-8 text-7xl text-servicetitle font-medium">Contact Us</h1>
                <p class="text-bottomclient text-xl mt-8">Thank You In-Advance For Giving Us The Opportunity To Serve Your Marketing <br> Needs!</p>
            </div>
            <!-- GET IN TOUCH BUTTON -->
            <div class="my-auto text-right">
                <a href="<?php echo site_url('/contact-us');?>">
                <button class="bg-brandcontent hover:bg-purple-700 text-xl text-white uppercase font-dmsans py-5 px-11 rounded-full tracking-wider">Get in touch</button>
                </a>
            </div>
        </div>

        <!-- CONTENT AREA -->
        <div class="contactus__card py-20 my-20 px-11 bg-white rounded-3xl shadow-xl">
            <div class="grid grid-cols-2 gap-4">
                <!-- INFO AREA -->
                 <?php 
                    
                $args = array(
                    'page_id' => 33
                );

                $contactUsQuery = new WP_Query($args);

                while($contactUsQuery->have_posts()){
                    $contactUsQuery->the_post(); ?>
                <div class="contactus_card__info mx-10">
                    <h2 class="text-servicetitle text-5xl font-bold">Get in Touch</h2>
                    <p class="text-servicecontent text-base font-light my-5"><?php the_content(); ?></p>
                   

                    <!-- REPEATER FIELD FOR ADDRESSES -->
                    <?php
                    // Check rows exists.
                    if( have_rows('contact_us_addresses') ): ?>

                    <div class="grid grid-cols-2 gap-0 mt-14">

                      <?php  // Loop through rows.
                        while( have_rows('contact_us_addresses') ) : the_row(); ?>

                        <!-- ADDRESS -->
                        <div class="block">
                            <p class="text-servicetitle text-lg font-bold my-10"><?php echo get_sub_field('contactus_state'); ?></p>
                            <p class="text-servicecontent text-lg font-light mb-2"><?php echo get_sub_field('contactus_street') ?></p>
                            <p class="text-servicecontent text-lg font-light mb-2"><?php echo get_sub_field('contactus_address') ?></p>
                            <p class="text-servicecontent text-lg font-light mb-2">Phone: <?php echo get_sub_field('contactus_phone_number') ?></p>
                            <p class="text-servicecontent text-lg font-light mb-2">Email: <?php echo get_sub_field('contactus_email') ?></p>
                        </div>

                        <?php
                        // End loop.
                        endwhile; ?>
                        </div>

                        <?php
                    // No value.
                    else :
                        // Do something...
                    endif;
                    ?>

                    <!-- YOUTUBE VIDEO -->
                    <div class="mt-10">
                        <?php the_field('contact_us_video'); ?>
                    </div>

                </div>
                <!-- CONTACT FORM -->

                <div class="contactus_card__form mx-10">
                    <h2 class="text-servicetitle text-5xl font-bold">How Can We Help?</h2>
                    <p class="text-servicecontent text-base font-light my-5">We offer a spectrum of services to help your company reach its marketing & sales goals. Tell us what you’re looking to achieve, and we’ll be in touch to schedule a time that works best for you.</p>
                    <div class="contatus__contactform mt-14">
                        <?php            
                        $contactUsShortcode = get_field('shortcode_for_form');
                        echo do_shortcode($contactUsShortcode); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
            wp_reset_postdata();
        ?>
    </div>
    <!-- BACKGROUND IMAGE -->
    <div class="contactus__bg">
        <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/casestudiesBG.jpg'; ?>" alt="">
    </div>
</section>


<?php get_footer(); ?>