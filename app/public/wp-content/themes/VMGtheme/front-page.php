<?php get_header(); ?>

<!-- HERO SECTION -->
<section id="hero bg-white w-full h-full font-dmsans">
        <img class="hero__image w-full" src="<?php echo get_template_directory_uri() . '/images/HERO.png'; ?>" alt="">
        <h1 class="hero__heading text-2xl lg:text-5xl xl:text-7xl text-yellowfont font-medium"><?php bloginfo('name'); ?></h1>
        <p class="hero__description text-sm lg:text-xl text-white opacity-80 font-medium"><?php bloginfo('description') ?></p>
        <a href="<?php echo site_url('/contact-us');?>">
          <button class="hero__button hidden lg:block bg-btnpurple hover:bg-purple-700 text-xl text-white uppercase font-dmsans py-5 px-11 rounded-full tracking-wider">Get in touch</button>
        </a>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="w-screen font-dmsans lg:pb-20 relative">
  <div class="container mx-auto">
    <h1 class="text-servicetitle text-5xl font-medium lg:font-normal text-center lg:text-left lg:text-7xl xl:text-8xl">What we Do</h1>
      <div class="flex justify-center grid lg:grid-cols-3 gap-4 mt-5 lg:mt-16">

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
        $serviceQuery->the_post(); 
        
        $serviceIcon = get_field('service_icon');
        
        ?>

        <div class="max-w-md py-5 lg:py-20 px-8 mx-5 lg:mx-0 bg-white shadow-lg rounded-3xl my-4 mx-auto">
          <div>
            <img class="mx-auto lg:mx-0 service__icon" src="<?php echo $serviceIcon; ?>" alt="">
            <h2 class="text-servicetitle text-center lg:text-left text-2xl font-semibold mt-8"><?php the_title(); ?></h2>
            <div class="mt-4 text-base text-center lg:text-left text-serviceContent"><?php the_content(); ?></div>
          </div>
        </div>



        <?php } 
          wp_reset_postdata();
        ?>
    </div>
  </div>
  <!-- BACKGROUND IMAGE -->
  <div class="frontpage_about__bg">
      <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/aboutBackground.jpg'; ?>" alt="">
  </div>
</section>

<!-- ORU PROCESS SECTION -->
<section id="process" class="w-screen font-dmsans py-20 lg:py-20 relative">
  <div class="container mx-auto">
    <div class="lg:pt-48 text-center">
      <p class="text-xs uppercase text-white tracking-widest opacity-50">How it works</p>
      <h1 class="text-4xl lg:text-5xl text-white mt-3.5">Our Process</h1>
      <p class="text-base lg:text-xl text-white font-thin leading-loose mt-2 lg:mt-6 mb-8">We know the best solution for all of your business ideas and we can help you <br> solve all business problems</p>
    </div>


      <?php 
    
      //query for services post type
      $args = array(
        'post_type' => 'process',
        'orderby' => 'date',
        'order' => 'ASC',      
        'posts_per_page' => 3,  
      );

      $processQuery = new WP_Query($args);

      while($processQuery->have_posts()){
        $processQuery->the_post(); 
        
        //acf field for icon
        $processIcon = get_field('process_icon');

        ?>

        <div class="py-11 px-7 lg:px-20 bg-white rounded-3xl shadow-lg mb-10 w-11/12 mx-auto">
          <div class="grid lg:grid-cols-2 gap-4">
            <!-- IMAGE -->
            <div class="flex justify-start">
              <?php the_post_thumbnail('processThumbnail', array('class' => 'rounded-3xl flex justify-center')); ?>
            </div>
            <!-- CONTENT -->
            <div class="">
              <img class="hidden lg:block process__icon mx-auto lg:mx-0" src="<?php echo $processIcon; ?>" alt="">
              <h2 class="text-servicetitle text-center lg:text-left text-2xl font-semibold mt-8"><?php the_title(); ?></h2>
              <div class="mt-4 text-base text-center lg:text-left text-serviceContent"><?php the_content(); ?></div>
            </div>
          </div>
        </div>


        <?php } 
          wp_reset_postdata();
        ?>
  </div>
  <!-- BACKGROUND IMAGE -->
  <div class="fontpage_process__bg">
      <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/processBackground.jpg'; ?>" alt="">
  </div>
</section>

<!-- OUR CLIENTS SECTION -->
<section id="clients" class="bg-white w-screen font-dmsans">
  <?php get_template_part('partials/our', 'clients'); ?>
</section>

<?php get_footer(); ?>