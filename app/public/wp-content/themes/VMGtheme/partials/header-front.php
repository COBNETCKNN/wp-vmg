<nav id="navbar" class="absolute py-12 w-full">
    <div class="container mx-auto">
        <div class="flex justify-start">
            <!-- LOGO SECTION -->
            <div class="logo flex justify-start">
                <a href="<?php echo home_url(); ?>">
                    <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/VMG-Logo-Light.png'; ?>" alt="">
                </a>
            </div>
            <!-- MAIN MENU SECTION -->
            <div class="flex justify-center my-auto font-dmsans text-white font-bold mx-auto">
              <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>      
          </div>
        </div>
    </div>
</nav>