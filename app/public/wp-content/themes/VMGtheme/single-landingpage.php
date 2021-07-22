<?php get_header(); ?>

<section id="landingpage" class="w-full font-dmsans">
<div class="landingpage__hero h-auto lg:h-5/6 relative">
    <div class="container mx-auto">

        <?php 
        
        $args = array(
            'post_type' => 'landingpage',
        );

        $landingPageQuery = new WP_Query($args);

        while($landingPageQuery->have_posts()){
            $landingPageQuery->the_post();
        
        $landingPageTextArea = get_field('landing_page_description');
        $landingPageButtonText = get_field('landing_page_button_text');
        $landingPageShortcode = get_field('landing_page_shortcode');
        $landingPageAboutTitle = get_field('landing_page_about_title');
        $landingPageAboutContent = get_field('landing_page_about_content');
        $landingPageAboutImage = get_field('landing_page_about_image');

        ?>
        <!-- LANDING PAGE HERO SECTION -->
        <div class="lg:grid lg:grid-cols-2 gap-4 my-10 xl:my-16">
            <!-- CONTENT AREA -->
            <div class="landingpage__content text-center lg:text-left my-auto xl:my-0">
                <h1 class="text-white text-4xl xl:text-6xl font-medium"><?php the_title(); ?></h1>
                <p class="text-white text-xl font-medium my-10"><?php echo $landingPageTextArea; ?></p>
                <a href="#bottomForm">
                 <button class="bg-yellowbtn hover:bg-yellow-400 text-white font-semibold uppercase py-3 px-4 rounded mb-10 lg:mb-0"><?php echo $landingPageButtonText; ?></button>
                </a>
            </div>
            <!-- FORM AREA -->
            <div class="hidden lg:block landingpage__form ml-20">
                <h2 class="text-white text-4xl xl:text-6xl font-medium mb-5 xl:mb-14"><?php echo $landingPageButtonText; ?></h2>
                <?php            
                echo do_shortcode($landingPageShortcode); 
                ?>
            </div>
        </div>
        <!-- BACKGROUND IMAGE -->
        <div class="landingpage_bg">
            <?php the_post_thumbnail('landingPageHeroBG', array('class' => 'w-full')); ?>
        </div>
    </div>
</div>
<!-- LANDING PAGE ABOUT AREA -->
<div class="container mx-auto">
    <div class="lg:grid lg:grid-cols-2 gap-4 my-10">
        <!-- CONTENT AREA -->
        <div class="text-center lg:text-left">
            <h2 class="text-servicetitle text-4xl xl:text-6xl font-medium"><?php echo $landingPageAboutTitle ?></h2>
            <p class="text-servicecontent text-xl font-light my-10"><?php echo $landingPageAboutContent; ?></p>
        </div>
        <!-- IMAGE -->
        <div class="mx-auto">
            <img src="<?php echo $landingPageAboutImage; ?>" alt="">
        </div>
    </div>

    <!-- TOP BENEFITS REPEATER -->
    <?php
    // Check rows exists.
    if( have_rows('top_benefits') ): ?>

    <div class="text-center xl:text-left lg:flex justify-center my-24">

        <?php  // Loop through rows.
        while( have_rows('top_benefits') ) : the_row(); ?>

        <!-- ADDRESS -->
        <div class="mx-5">
            <img src="<?php echo get_sub_field('top_benefits_icon'); ?>" alt="" class="mx-auto">
            <p class="text-servicecontent text-xl font-light my-4"><?php echo get_sub_field('top_benefits_text'); ?></p>
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
    <!-- BUTTON FOR CONTACT REDIRECT -->
    <div class="flex justify-center mb-10">
        <a href="#bottomForm">
            <button class="bg-yellowbtn hover:bg-yellow-400 text-white font-semibold uppercase py-3 px-4 rounded"><?php echo $landingPageButtonText; ?></button>
        </a>
    </div>
</div>

<?php 

    $ourProcessImage = get_field('landing_page_our_process_image');
    $ourProcessTitle = get_field('landing_pages_our_process_title');
    $ourProcessContent = get_field('landing_pages_our_process_content');

?>

    <!-- WHAT WE OFFER SECTION -->
    <div class="bg-gray-200 py-10 lg:py-20">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-2 gap-14">
                <!-- IMAGE -->
                <div class="xl:my-auto">
                    <img src="<?php echo $ourProcessImage; ?>" alt="">
                </div>
                <!-- CONTENT -->
                <div class="text-center lg:text-left">
                    <h2 class="text-servicetitle text-4xl xl:text-6xl font-medium"><?php echo $ourProcessTitle ?></h2>
                    <p class="text-servicecontent text-xl font-light my-7"><?php echo $ourProcessContent; ?></p>
                    <!-- REPEATER FIELD FOR WHAT WE OFFER ICONS -->
                    <?php
                    // Check rows exists.
                    if( have_rows('landing_pages_our_process_repeater') ): ?>

                    <div class="block">

                      <?php  // Loop through rows.
                        while( have_rows('landing_pages_our_process_repeater') ) : the_row(); ?>

                        <div class="flex justify-start">
                            <img src="<?php echo get_sub_field('landing_pages_our_process_repeater_icon'); ?>" alt="">
                            <p class="text-servicecontent text-lg font-light my-3 ml-4"><?php echo get_sub_field('landing_pages_our_process_repeater_title'); ?></p>
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
                </div>
            </div>
        </div>
    </div>

    <!-- OUR PROCESS IMAGE -->
    <div class="bg-white py-10 lg:py-20">
        <div class="container mx-auto">
            <h2 class="text-servicetitle text-4xl xl:text-6xl font-medium text-center">Our Process</h2>
            <img class="landingpage_ourprocess__image mx-auto my-10 lg:my-20" src="<?php echo get_template_directory_uri() . '/images/ourprocess.jpg'; ?>" alt="">
        </div>
    </div>

    <!-- BOTTOM FORM -->
    <section id="bottomForm"></section>
        <div class="bg-white pt-10 pb-20">
            <div class="container mx-auto">
                <h2 class="text-servicetitle text-4xl xl:text-6xl font-medium text-center mb-10"><?php the_title(); ?></h2>
                <?php     
                $bottomContactFormShortcode = get_field('landing_pages_what_we_offer_shortcode_contact');       
                echo do_shortcode($bottomContactFormShortcode); 
                ?>
            </div>
        </div>
    </section>

    <?php }
    wp_reset_postdata();
    ?>

</section>

<?php get_footer(); ?>