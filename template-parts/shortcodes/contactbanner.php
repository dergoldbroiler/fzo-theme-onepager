

<div class="w-100 bg-white mt-5 ps-lg-5" id="contact-banner">
<div class="d-flex flex-column-reverse flex-lg-row h-100">

        <div class="partner-content content-40 h-100 d-flex justify-content-center flex-column px-5 py-5 py-lg-0">
            <div class="badgeline">Ihr Partner wenn’s ums Auto geht</div>

            <?php if(isset($args['headline'])) : ?>
                <h2 class="text-start"><?php echo $args['headline']; ?></h2>
            <?php endif; ?>    


                <p class="banner-paragraph"><?php echo $args['teaser']; ?></p>


            <?php if(isset($args['url'])) : ?>
            <a class="banner-button" href="<?php echo $args['url']; ?>">Mehr über uns</a>
            <?php endif; ?> 

        </div>
        
        <?php if(isset($args['img'])) : ?>
        <div class="partner-content content-60 image-bg p-0" style="background-image:url('<?php echo $args['img']; ?>')"></div>        
        <?php endif; ?>     
    </div>
</div>  