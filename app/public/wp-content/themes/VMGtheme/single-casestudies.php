<?php get_header(); ?>

<section id="post" class="w-full font-dmsans relative">
    <div class="post__container container mx-auto">
        <!-- GRID FOR HEADING -->
        <div class="grid grid-cols-3 gap-4 py-10">
            <!-- HEADING -->
            <div class="col-span-2">
                <a href="<?php echo site_url('/casestudies');?>">
                <p class="text-brandcontent uppercase text-xs font-bold tracking-widest">BUSINESS OBJECTIVES</p>      
                <h1 class="pt-8 text-7xl text-servicetitle font-medium">Case Studies</h1>
                <p class="text-bottomclient text-xl mt-8">With all of our clients, we focus on what really matters: their business <br> objectives and how we can best meet them.</p>
                </a>
            </div>
            <!-- GET IN TOUCH BUTTON -->
            <div class="my-auto text-right">
                <a href="<?php echo site_url('/contact-us');?>">
                <button class="bg-yellowbtn hover:bg-purple-700 text-xl text-white uppercase font-dmsans py-5 px-11 rounded-full tracking-wider">Get in touch</button>
                </a>
            </div>
        </div>
    </div>

        <!-- CONTENT -->
        <div class="">
            <div class="container mx-auto">
                <div class="py-20 px-11 mb-20 mt-36 w-11/12 bg-white rounded-3xl shadow-xl mx-auto">
                    <div class="">
                    <?php the_post_thumbnail('aboutUsThumbnail', array('class' => 'rounded-3xl float-left mr-10')); ?>
                    </div>
                    <h1 class="text-2xl text-servicetitle font-bold mb-10"><?php the_title(); ?></h1>
                    <div class="aboutus__paragraph text-lg text-servicetitle"><?php echo the_content(); ?></div>
                    
                </div>
            </div>
        </div>

        <!-- BACGROUND IMAGE -->
        <div class="post__bg">
         <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/aboutusBG.png'; ?>" alt="">
        </div>

        <!-- AD PLACE -->
        <?php get_template_part('partials/ad', 'prospect'); ?>
    
<?php get_footer(); ?>
</section>