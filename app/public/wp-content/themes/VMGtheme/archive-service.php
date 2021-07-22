<?php get_header(); ?>

<section id="service" class="w-screen font-dmsans">
    <div class="container mx-auto">
        <!-- GRID FOR HEADING -->
        <div class="lg:grid lg:grid-cols-3 gap-4 py-10">
            <!-- HEADING -->
            <div class="col-span-2">
                <p class="text-btnpurple text-center lg:text-left uppercase text-xs font-bold tracking-widest">How it works</p>
                <h1 class="pt-8 text-4xl lg:text-7xl text-center lg:text-left text-servicetitle font-medium">What We Do</h1>
                <p class="text-bottomclient text-center lg:text-left text-xl mt-4 lg:mt-8">We know the best solution for all of your business ideas and we can help you<br> solve all business problems</p>
            </div>
            <!-- GET IN TOUCH BUTTON -->
            <div class="my-5 lg:my-auto text-center lg:text-right">
                <a href="<?php echo site_url('/contact-us');?>">
                <button class="bg-btnpurple hover:bg-purple-700 text-base lg:text-xl text-white uppercase font-dmsans py-3 lg:py-5 px-5 lg:px-11 rounded-full tracking-wider">Get in touch</button>
                </a>
            </div>
        </div>
    </div>
    <!-- MAIN CONTENT -->
    <div class="service__content">
        <div class="container mx-auto pt-14">
            <?php 
        
            $args = array(
                'post_type' => 'service',
                'orderby' => 'date',
                'order' => 'ASC',
                'posts_per_page' => 999,
            );

            $serviceQuery = new WP_Query($args);

            while($serviceQuery->have_posts()){
                $serviceQuery->the_post(); 
                
            $serviceIcon = get_field('service_icon');
                
            ?>

        <div class="py-5 lg:py-11 px-5 lg:px-20 bg-white rounded-3xl shadow-xl mb-10 w-11/12 mx-auto">
            <div class="grid lg:grid-cols-2 gap-4">
                <!-- IMAGE -->
                <div class="flex justify-start">
                <?php the_post_thumbnail('processThumbnail', array('class' => 'rounded-3xl flex justify-center')); ?>
                </div>
                <!-- CONTENT -->
                <div class="">
                <img class="hidden lg:block process__icon" src="<?php echo $serviceIcon; ?>" alt="">
                <h2 class="text-center lg:text-left text-servicetitle text-2xl font-semibold mt-8"><?php the_title(); ?></h2>
                <div class="text-center lg:text-left mt-4 text-base text-serviceContent"><?php the_content(); ?></div>
                </div>
            </div>
        </div>

             <?php } ?>
        </div>
    </div>
    <!-- BACKGROUND IMAGE -->
    <div class="whatwedo__bg">
        <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/whatwedoBG.png'; ?>" alt="">
    </div>
</section>


<?php get_footer(); ?>