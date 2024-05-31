

<div class="single-post bg-white modal-trigger sub-page-element">
    <?php if( has_post_thumbnail( $args->ID )): 
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $args->ID ), 'full' )[0];    
    ?>
        <div class="w-100 imagecontainer bg-gray" style="background-image:url('<?php echo $image; ?>')"></div>
    <?php else: ?>
        <div class="w-100 imagecontainer bg-gray"></div>
    <?php endif; ?>

    <div class="single-post-content subpage-content d-flex flex-column p-5">
        <h2 class="fs23 mb-3"><?php echo $args->post_title; ?></h2>
        <p class="teaser"><?php echo get_post_meta($args->ID,'teaser',true); ?></p>
        <a href="<?php echo get_permalink($args->ID); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/arrow_yellow.svg"></a>
    </div>
</div>