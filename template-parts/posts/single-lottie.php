

<div class="single-post bg-white">
   
    
                <div class="single-post-image d-flex flex-column justify-content-center align-items-cente bg-cover" >

                <lottie-player src="<?php bloginfo('stylesheet_directory'); ?>/animation_lmltvt78.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;margin:auto" loop autoplay></lottie-player>
                </div>

    
    <div class="single-post-content d-flex flex-column justify-content-center align-items-center">
        <?php if(isset($args['headline'])): ?>
            <h2><?php echo $args['headline']; ?></h2>
        <?php endif; ?>    

        <?php if(isset($args['subline'])): ?>
            <p class="single-post-content-p"><?php echo $args['subline']; ?></p>
        <?php endif; ?>    
    </div>
</div>