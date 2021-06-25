<?php get_header(); ?>

<section id="hero">
        <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/Intro.png'; ?>" alt="">
        <a href="<?php echo site_url('/contact-us');?>">
          <button class="hero__button bg-btnpurple hover:bg-purple-700 text-xl text-white uppercase font-dmsans py-6 px-11 rounded-full tracking-wider">Get in touch</button>
        </a>
        <img class="hero__vector" src="<?php echo get_template_directory_uri() . '/images/vector.png';?>" alt="">
        <img class="hero__stats" src="<?php echo get_template_directory_uri() . '/images/stats.png';?>" alt="">
        <img class="hero__messages" src="<?php echo get_template_directory_uri() . '/images/messages.png';?>" alt="">
        <img class="hero__card" src="<?php echo get_template_directory_uri() . '/images/card.png';?>" alt="">
</section>

<?php get_footer(); ?>