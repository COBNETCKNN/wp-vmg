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
        $serviceQuery->the_post(); 
        
        $serviceIcon = get_field('service_icon');
        
        ?>

        <div class="max-w-md py-20 px-8 bg-white shadow-lg rounded-3xl my-4 mx-auto">
          <div>
            <img class="service__icon" src="<?php echo $serviceIcon; ?>" alt="">
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

<!-- ORU PROCESS SECTION -->
<section id="process" class="w-screen font-dmsans">
  <div class="container mx-auto">
    <div class="pt-48 text-center">
      <p class="text-xs uppercase text-white tracking-widest opacity-50">How it works</p>
      <h1 class="text-5xl text-white mt-3.5">Our Process</h1>
      <p class="text-xl text-white font-thin leading-loose mt-6 mb-8">We know the best solution for all of your business ideas and we can help you <br> solve all business problems</p>
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

        <div class="py-11 px-20 bg-white rounded-3xl mb-10 w-11/12 mx-auto">
          <div class="grid grid-cols-2 gap-4">
            <!-- IMAGE -->
            <div class="flex justify-start">
              <?php the_post_thumbnail('processThumbnail', array('class' => 'rounded-3xl flex justify-center')); ?>
            </div>
            <!-- CONTENT -->
            <div class="">
              <img class="process__icon" src="<?php echo $processIcon; ?>" alt="">
              <h2 class="text-servicetitle text-2xl font-semibold mt-8"><?php the_title(); ?></h2>
              <p class="mt-4 text-base text-serviceContent"><?php the_content(); ?></p>
            </div>
          </div>
        </div>


        <?php } 
          wp_reset_postdata();
        ?>
  </div>
</section>

<!-- OUR CLIENTS SECTION -->
<section id="clients" class="w-screen font-dmsans">
		<div class="container mx-auto pt-28 pb-48">
			<!-- HEADING TEXT -->
			<div class="heading text-center">
				<p class="text-brandcontent uppercase text-xs font-bold tracking-widest">brands</p>
				<h1 class="pt-8 text-5xl font-medium">Our Clients</h1>
			</div>

      <!-- SLDIER -->
      <div class="client__slider my-12">
      <?php 
      
        $args = array(
          'page_id' => 62
        );

        $clientsQuery = new WP_Query($args);

        while($clientsQuery->have_posts()){
          $clientsQuery->the_post();
        
          $images = get_field('clients_gallery');
          if( $images ): ?>
              <ul class="slick">
                  <?php foreach( $images as $image ): ?>
                      <li class="">                 
                              <img class="clients__image flex justify-center mx-auto" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </li>
                  <?php endforeach; ?>
              </ul>
          <?php endif; 
            } //end of the while loop

            wp_reset_postdata();
          ?>
        </div>

			<!-- BOTTOM TEXT -->
			<div class="text-center">
				<p class="text-bottomclient text-base">You're going to be in good company. We work with amazing brands.</p>
			</div>
		</div>
</section>

<?php get_footer(); ?>