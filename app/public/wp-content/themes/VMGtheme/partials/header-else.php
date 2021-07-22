<nav id="navbar" class="py-3 lg:py-12 bg-white w-full">
    <div class="container mx-auto">
        <div class="lg:flex lg:justify-between">
            <!-- LOGO SECTION -->
            <div class="logo flex justify-start">
                <a href="<?php echo home_url(); ?>">
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                    echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
                ?>
                </a>
            </div>

            <!-- HAMBURGER MENU -->
            <div class="flex justify-end -mt-8">
                <button class="nav-toggler lg:hidden rounded" data-target="#navigation">
                    <i class="fas fa-bars text-3xl px-4 "></i>
                </button>
            </div>
            <!-- MAIN MENU SECTION -->
            <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto mx-auto mt-9 md:mt-0" id="navigation">
            <div class="flex justify-start lg:justify-center my-auto font-dmsans text-white font-bold mx-auto">
            <div class="text-menuitems text-bold">
              <?php wp_nav_menu(array(
                  'theme_location' => 'header-menu',
                  'menu_class'=> 'menu menu-else'
                  )); ?>   
            </div>    
          </div>
        </div>
        </div>
    </div>
</nav>