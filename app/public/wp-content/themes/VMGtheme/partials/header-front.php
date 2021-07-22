<nav id="navbar" class="absolute py-3 lg:py-12 w-full">
    <div class="container m-auto">   
        <div class="lg:flex">
        <!-- LEFT SECTION -->
        <div class="flex justify-between">
        <div class="">
            <a href="/">
                <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
                    ?>
                    </a>
                </div>
            </a>
        </div>

        <!-- HAMBURGER MENU -->
        <div class="">
            <button class="nav-toggler lg:hidden rounded" data-target="#navigation">
                <i class="fas fa-bars text-3xl px-4 "></i>
            </button>
        </div>

        </div>

        <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto mx-auto mt-5 md:mt-0" id="navigation">
        <!-- MIDDLE MENU SECTION -->
        <div class="header__links flex justify-start lg:justify-center my-auto font-dmsans text-white font-bold lg:mx-auto">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>      
        </div>
        </div>
      </div>
    </div>
</nav>