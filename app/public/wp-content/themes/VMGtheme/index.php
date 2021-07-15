<?php get_header(); ?>

<section id="caseStudies" class="w-screen font-dmsans">
    <div class="container mx-auto">
        <!-- GRID FOR HEADING -->
        <div class="grid grid-cols-3 gap-4 py-10">
            <!-- HEADING -->
            <div class="col-span-2">
                <p class="text-brandcontent uppercase text-xs font-bold tracking-widest">Venerate Media Group</p>
                <h1 class="pt-8 text-7xl text-servicetitle font-medium">Blog</h1>
                <p class="text-bottomclient text-xl mt-8">This is where we keep you updated on what is going on in our world.</p>
            </div>
            <!-- GET IN TOUCH BUTTON -->
            <div class="my-auto text-right">
                <a href="<?php echo site_url('/contact-us');?>">
                <button class="bg-brandcontent hover:bg-purple-700 text-xl text-white uppercase font-dmsans py-5 px-11 rounded-full tracking-wider">Get in touch</button>
                </a>
            </div>
        </div>
    </div>

    <!-- CONTENT AREA -->
    <div class="container mx-auto my-20">
        <?php 
        
        $args = array(
            'page_id' => 146
        );

        $blogQuery = new WP_Query($args);

        while($blogQuery->have_posts()){
            $blogQuery->the_post(); ?>

            <div class="py-10 px-10 bg-white rounded-3xl shadow-xl w-11/12 mx-auto mt-20">
                <div class="grid grid-cols-2 gap-4">
                    <!-- FEATURES IMAGE -->
                    <div class="flex justify-center">
                        <?php the_post_thumbnail('processThumbnail', array('class' => 'rounded-3xl flex justify-center')); ?>
                    </div>
                    <!-- CONTENT -->
                    <div class="casestudies_card__content relative">
                        <p class="text-brandcontent uppercase text-xs font-bold tracking-widest opcaity-50">
                        <?php                                       
                        $categories = get_the_category();

                        foreach ($categories as $category){
                        echo  $category->cat_name;
                        } ?>
                        </p>
                        <h2 class="text-2xl text-servicetitle font-bold mt-6"><?php the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>">
                    <button class="bg-brandcontent hover:bg-purple-700 text-sm text-white uppercase font-dmsans py-3 px-8 rounded-3xl tracking-wider absolute bottom-0 right-0">Read More</button>
                    </a>
                    </div>

                </div>
            </div>
        <?php  } 
        wp_reset_postdata();?>
    </div>

    <div class="blog__bg">
        <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/casestudiesBG.jpg'; ?>" alt="">
    </div>

</section>


<?php get_footer(); ?>