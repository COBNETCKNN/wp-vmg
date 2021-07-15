<nav id="navbar" class="py-12 bg-white w-full">
    <div class="container mx-auto">
        <div class="flex justify-between">
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
            <!-- MAIN MENU SECTION -->
            <div class="flex justify-center my-auto font-dmsans text-white font-bold">
            <div class="text-menuitems text-bold">
              <?php wp_nav_menu(array(
                  'theme_location' => 'header-menu',
                  'menu_class'=> 'menu menu-else'
                  )); ?>   
            </div>    
          </div>
          <!-- CONTACT BUTTON -->
          <a href="<?php echo site_url('/contact-us');?>">
            <button class="bg-btnpurple hover:bg-purple-700 text-sm text-white uppercase font-dmsans py-2 px-8 rounded-3xl tracking-wider">Contact</button>
         </a>
        </div>
    </div>
</nav>