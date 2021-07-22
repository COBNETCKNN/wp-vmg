<?php get_header(); ?>

<section id="post" class="w-full font-dmsans relative">
        <!-- CONTENT -->
        <div class="">
            <div class="container mx-auto">
                <div class="py-10 lg:py-20 px-5 lg:px-11 mb-20 lg:mt-36 w-11/12 bg-white rounded-3xl shadow-xl mx-auto">
                    <h1 class="text-2xl lg:text-4xl text-servicetitle font-bold mb-10"><?php the_title(); ?></h1>
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