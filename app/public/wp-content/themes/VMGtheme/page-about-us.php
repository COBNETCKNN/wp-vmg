<?php get_header(); ?>

<section id="aboutus" class="w-full font-dmsans relative">
    <div class="aboutus__container container mx-auto">
        <!-- GRID FOR HEADING -->
        <div class="lg:grid lg:grid-cols-3 gap-4 py-10">
            <!-- HEADING -->
            <div class="col-span-2">
                <p class="text-yellowbtn text-center lg:text-left uppercase text-xs font-bold tracking-widest">The Experts Behind the Digital Marketing</p>
                <h1 class="pt-8 text-4xl lg:text-7xl text-center lg:text-left text-servicetitle font-medium">About Us</h1>
                <p class="text-bottomclient text-center lg:text-left text-xl mt-4 lg:mt-8">From Establishing an Online Presence or Reinvigorating Your Stale Online Look and Feel – We Use Advanced Techniques to Accelerate Results</p>
            </div>
            <!-- GET IN TOUCH BUTTON -->
            <div class="my-5 lg:my-auto text-center lg:text-right">
                <a href="<?php echo site_url('/contact-us');?>">
                <button class="bg-yellowbtn hover:bg-purple-700 text-base lg:text-xl text-white uppercase font-dmsans py-3 lg:py-5 px-5 lg:px-11 rounded-full tracking-wider">Get in touch</button>
                </a>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="aboutus__content">
        <div class="container mx-auto">
            <div class="aboutus__card py-5 lg:py-20 mb-20 my-5 lg:my-20 px-5 lg:px-11 bg-white rounded-3xl shadow-xl">
                <?php 
                
                //query for about us page

                $args = array(
                    'page_id' => 93,
                );

                $aboutUsQuery = new WP_Query($args);

                while($aboutUsQuery->have_posts()){
                    $aboutUsQuery->the_post(); 
                    
                //acf field for title

                $aboutUsTitle = get_field('title_about_us');
                    
                ?>
                
                <?php the_post_thumbnail('aboutUsThumbnail', array('class' => 'rounded-3xl float-left mr-10 my-10')); ?>
                <h1 class="text-2xl text-servicetitle font-bold mb-10"><?php echo $aboutUsTitle ?></h1>
                <div class="aboutus__paragraph text-lg text-servicetitle"><?php echo the_content(); ?></div>
                
                <?php } 
                wp_reset_postdata();
                ?>
             </div>
        </div>
    </div>
    <!-- BACKGROUND IMAGE -->
    <div class="aboutus_bg">
        <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/aboutusBG.png'; ?>" alt="">
    </div>

    <!-- AD PLACE -->
    <?php get_template_part('partials/ad', 'prospect'); ?>
    
<?php get_footer(); ?>
</section>