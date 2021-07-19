<nav id="navbar" class="py-12 bg-white w-full">
    <div class="container mx-auto">
        <div class="flex justify-between">
            <!-- LOGO SECTION -->
            <div class="logo flex justify-start">
                <a href="<?php echo home_url(); ?>">
                    <img class="w-full" src="<?php echo get_template_directory_uri() . '/images/VMG-Logo-Dark.png'; ?>" alt="">
                </a>
            </div>
            <!-- MAIN MENU SECTION -->
            <div class="flex justify-center my-auto font-dmsans text-white font-bold mx-auto">
            <div class="text-menuitems text-bold">
              <?php wp_nav_menu(array(
                  'theme_location' => 'header-menu',
                  'menu_class'=> 'menu menu-else'
                  )); ?>   
            </div>    
          </div>
        </div>
    </div>
</nav>