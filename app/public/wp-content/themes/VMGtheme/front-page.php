<?php get_header(); ?>

<!-- HERO SECTION -->
<section id="hero">
        <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/Intro.png'; ?>" alt="">
        <a href="<?php echo site_url('/contact-us');?>">
          <button class="hero__button bg-btnpurple hover:bg-purple-700 text-xl text-white uppercase font-dmsans py-5 px-11 rounded-full tracking-wider">Get in touch</button>
        </a>
        <img class="hero__vector" src="<?php echo get_template_directory_uri() . '/images/vector.png';?>" alt="">
        <img class="hero__stats" src="<?php echo get_template_directory_uri() . '/images/stats.png';?>" alt="">
        <img class="hero__messages" src="<?php echo get_template_directory_uri() . '/images/messages.png';?>" alt="">
        <img class="hero__card" src="<?php echo get_template_directory_uri() . '/images/card.png';?>" alt="">
</section>

<!-- ABOUT SECTION -->
<section id="about" class="h-full w-screen font-dmsans mb-24">
  <div class="container mx-auto">
    <h1 class="text-servicetitle text-8xl">What we Do</h1>
      <div class="flex justify-center grid grid-cols-3 gap-0 mt-16">

    <?php 
    
      //query for services post type
      $args = array(
        'post_type' => 'service',
        'orderby' => 'date',
        'order' => 'ASC',      
        'posts_per_page' => 6,  
      );

      $serviceQuery = new WP_Query($args);

      while($serviceQuery->have_posts()){
        $serviceQuery->the_post(); ?>


        <div class="max-w-md py-20 px-8 bg-white shadow-lg rounded-3xl my-4 mx-auto">
          <div>
            <?php the_post_thumbnail('servicesIcon'); ?>
            <h2 class="text-servicetitle text-2xl font-semibold mt-8"><?php the_title(); ?></h2>
            <p class="mt-4 text-base text-serviceContent"><?php the_content(); ?></p>
          </div>
        </div>



        <?php } 
          wp_reset_postdata();
        ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>