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
                $socialMediaLinksQuery->the_post();
            
            $facebookLink = get_field('facebook_link');
            $instagramLink = get_field('instagram_link');
            $twitterLink = get_field('twitter_link');
            
            ?>
            <div class="text-gray-300 text-3xl my-auto">
                <a href="<?php echo $facebookLink ?>" target=”_blank”>
                    <i class="fab fa-facebook-square mx-3 hover:text-gray-400"></i>
                </a>
                <a href="<?php echo $instagramLink ?>" target=”_blank”>
                    <i class="fab fa-instagram-square mx-3 hover:text-gray-400"></i>
                </a>
                <a href="<?php echo $twitterLink ?>" target=”_blank”>
                    <i class="fab fa-twitter-square mx-3 hover:text-gray-400"></i>
                </a>       
            </div>
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