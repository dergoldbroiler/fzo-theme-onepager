
<?php if (isset($args)): ?>
<div class="single-post bg-white p-3 p-lg-5">
    <h2 class="kunde"><?php echo $args->post_title; ?></h2>
    <div class="w-100 d-flex justify-content-start">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/star-solid.svg" class="staricon">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/star-solid.svg" class="staricon">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/star-solid.svg" class="staricon">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/star-solid.svg" class="staricon">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/star-solid.svg" class="staricon">
    </div>
    <div class="mb-1 mt-5 kunde fs16">    
       <?php echo apply_filters('the_content', $args->post_content); ?>
    </div>
</div> 
<?php endif; ?>