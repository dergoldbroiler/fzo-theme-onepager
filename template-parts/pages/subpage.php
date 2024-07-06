<div class="col-12 col-lg-4 single-post-parent mb-3 pb-5">

<div class="single-post bg-white modal-trigger sub-page-element subpage-<?= get_post($args->ID)->post_name; ?>">

    <?php if( has_post_thumbnail( $args->ID )): 
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $args->ID ), 'full' )[0];    
    ?>
        <div class="w-100 imagecontainer bg-gray bg-cover" style="background-image:url('<?php echo $image; ?>')"></div>
    <?php else: ?>
        <div class="w-100 imagecontainer bg-gray bg-cover"></div>
    <?php endif; ?>

    <div class="single-post-content subpage-content d-flex flex-column p-5">
        <h2 class="fs23 mb-3"><?php echo $args->post_title; ?></h2>
        <?php if(get_post_meta($args->ID,'teaser',true)): ?>
            <p class="teaser mb-4"><?php echo get_post_meta($args->ID,'teaser',true); ?></p>
        <?php endif; ?>    

        <?php if(get_post_meta($args->ID,'fullteaser',true)): ?>
            <?php echo apply_filters('the_content',get_post_meta($args->ID,'fullteaser',true)); ?>
        <?php endif; ?>   
        <?php 
      $anker = "#";
      $modal = "";
      if(get_post_meta($args->ID,'anker',true)): ?>
            <?php $anker = get_post_meta($args->ID,'anker',true); ?>
      
        <?php else: $modal="modale"; endif; 
      
      if(get_post_meta($args->ID,'modal',true)): ?>
            <?php $modal = get_post_meta($args->ID,'modal',true); ?>
        <?php endif; ?>   
      
        <a href="#<?= $anker ?>" class="arrowbtn <?= $modal ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/arrow_yellow.svg"></a>
    </div>
</div></div>