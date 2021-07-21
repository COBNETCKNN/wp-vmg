<?php wp_footer(); ?>

<footer id="footer" class="bg-footer pt-24 pb-14 font-dmsans">
    <div class="container mx-auto">
        <div class="flex justify-between">
            <!-- LOGO SECTION -->
            <div class="flex justify-start">
                <a href="<?php echo home_url(); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
                    ?>
                </a>

                <!-- MAIN MENU SECTION -->
                <div class="flex my-auto ml-28 font-dmsans text-gray-300 font-light">
                <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>      
                </div>
            </div>
            <!-- SOCIAL MEDIA ICONS -->

            <?php 
            
            $args = array(
                'page_id' => 115,
            );

            $socialMediaLinksQuery = new WP_Query($args);

            while($socialMediaLinksQuery->have_posts()){
                $socialMediaLinksQuery->the_post(); ?>

            <!-- TOP BENEFITS REPEATER -->
            <?php
            // Check rows exists.
            if( have_rows('social_media_icons_and_links') ): ?>

            <div class="flex justify-center">

                <?php  // Loop through rows.
                while( have_rows('social_media_icons_and_links') ) : the_row(); ?>

                
                    <a href="<?php echo get_sub_field('social_media_link'); ?>" target=”_blank”>
                    <img class="h-9 w-9 mx-2"src="<?php echo get_sub_field('social_media_icon');?>" alt="">
                    </a>
                

                <?php
                // End loop.
                endwhile; ?>
            </div>

            <?php
            // No value.
            else :
            // Do something...
            endif;
            ?>
            <?php }
                wp_reset_postdata();
            ?>
        </div>

        <!-- FOOTER GREY LINE -->
        <div class="footer-line bg-gray-400 mt-7"></div>

        <!-- BOTTOM SECTION -->
        <div class="flex justify-between mt-10">
            <div class="">
                <p class="text-gray-400 text-lg"><?php echo bloginfo('name'); ?> @<?php echo date("Y"); ?>.  All rights reserved.</p>
            </div>
            <div class="text-gray-400">
                <?php wp_nav_menu(array('theme_location' => 'footer-extra-menu')); ?> 
            </div>
            
        </div>
    </div>
</footer>

    </body>
</html>