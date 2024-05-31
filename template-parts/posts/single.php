
<?php
$link = $args['url'];
if( isset($args['link']['url'])):

    $link = $args['link']['url'];
endif;
?>

<div class="single-post cursor-pointer bg-white glide__track" class="" onclick="location.href='<?php echo $link; ?>'">
   
        <?php if(isset($args['bild'])): ?>

            <?php $image = wp_get_attachment_image_src($args['bild'],'full'); ?>
  
            
            <?php if($args['bild_volle_breite']): ?>
                <div class="single-post-image d-flex flex-column justify-content-center align-items-cente bg-cover" style="background-image:url('<?php echo $image[0]; ?>');"></div>
            <?php else: ?>
                <div class="single-post-image d-flex flex-column justify-content-center align-items-center bg-contain" style="background-image:url('<?php echo $image[0]; ?>');"></div>
            <?php endif; ?> 
          
        <?php endif; ?>    
    
    <div class="single-post-content d-flex flex-column justify-content-center align-items-center">
        <?php if(isset($args['headline'])): ?>
            <h2><?php echo $args['headline']; ?></h2>
        <?php endif; ?>    

        <?php if(isset($args['subline'])): ?>
            <p class="single-post-content-p"><?php echo $args['subline']; ?></p>
        <?php endif; ?>    
    </div>
</div>