<?php get_header(); ?>

<section id="industries" class="w-screen font-dmsans relative">
    <img class="industries__bg" src="<?php echo get_template_directory_uri() . '/images/industriesBG.jpg'; ?>" alt="">

    <div class="industries__container container mx-auto">
        <!-- GRID FOR HEADING -->
        <div class="grid grid-cols-3 gap-4 py-10">
            <!-- HEADING -->
            <div class="col-span-2">
                <p class="text-industriestitle uppercase text-xs font-bold tracking-widest">The Experts Behind the Digital Marketing</p>
                <h1 class="pt-8 text-7xl text-servicetitle font-medium">Industries We Serve</h1>
                <p class="text-bottomclient text-xl mt-8">Since our early begining we have worked in multiple industries with clients <br>and these are our areas of expertise: </p>
            </div>
            <!-- GET IN TOUCH BUTTON -->
            <div class="my-auto text-right">
                <a href="<?php echo site_url('/contact-us');?>">
                <button class="bg-redbutton hover:bg-purple-700 text-xl text-white uppercase font-dmsans py-5 px-11 rounded-full tracking-wider">Get in touch</button>
                </a>
            </div>
        </div>

        <!-- CARDS WITH CONTENT -->
        <div class="flex justify-center grid grid-cols-3 gap-4 mt-16 mb-16">
        <?php 
        
        $args = array(
            'post_type' => 'industries',
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => 999,
        );

        $industriesQuery = new WP_Query($args);

        while($industriesQuery->have_posts()){
            $industriesQuery->the_post(); 
            
        //acf field for icon
        $industriesIcon = get_field('industrie_icon'); ?>

        <div class="max-w-md py-20 px-8 bg-white shadow-lg rounded-3xl my-4 mx-auto">
          <div>
            <img class="service__icon" src="<?php echo $industriesIcon; ?>" alt="">
            <h2 class="text-servicetitle text-2xl font-semibold mt-8"><?php the_title(); ?></h2>
            <p class="mt-4 text-base text-serviceContent"><?php the_content(); ?></p>
          </div>
        </div>


        <?php } 
            wp_reset_postdata();
        ?>
        </div>

    <!-- OUR CLIENTS SECTION -->
    <?php get_template_part('partials/our', 'clients'); ?>
    </div>
</section>



<?php get_footer(); ?>