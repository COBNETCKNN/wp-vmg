<div class="container mx-auto pt-0 lg:pt-28 pb-20 lg:pb-48">
    <!-- HEADING TEXT -->
    <div class="heading text-center">
        <p class="text-brandcontent uppercase text-xs font-bold tracking-widest">brands</p>
        <h1 class="pt-8 text-5xl font-medium">Our Clients</h1>
    </div>

<!-- SLDIER -->
<div class="client__slider my-2 lg:my-12">
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
                <img class="clients__image flex justify-center px-3 lg:px-0 mx-auto" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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