<?php
    $imageposition = "right";
    $flex = "flex-lg-row";
    $first = "content-55";
    $second = "content-45";
    $padding = "p43";

    if(isset($args['imageposition'])) : 
        $imageposition = $args['imageposition'];
        $flex = "flex-lg-row-reverse";
        $first = "content-45";
        $second = "content-55";
        $padding = "p43";
    endif;    

?>
<style>
    .p43{
        padding-left: 43px !important
    
    }

    @media(max-width:992px){
        .p43{
            padding-left: 0px !important
        }
    }
</style>    



<div class="w-100 bg-white mt-5 ps-lg-5 <?= $padding ?>" id="partner-banner">
    <div class="d-flex flex-column-reverse <?= $flex ?> h-100">

        <div class="partner-content <?= $first ?> h-100 d-flex justify-content-center flex-column px-5 py-5 py-lg-0">

        <?php 
            $subline = "Ihr Partner wenn’s ums Auto geht";
            if(isset($args['subline'])) : 
                $subline = $args['subline'];
             endif; ?>   
            <div class="badgeline"><?php echo $subline; ?></div>

            <?php if(isset($args['headline'])) : ?>
                <h2 class="text-start"><?php echo $args['headline']; ?></h2>
            <?php endif; ?>    

            <?php if(isset($args['teaser'])) : ?>
                <p class="banner-paragraph fs15"><?php echo $args['teaser']; ?></p>
            <?php endif; ?> 
            
            <?php if(isset($args['list'])) : ?>
                <ul class="banner-list fs15"><?php 
                    $elms = explode("#",$args['list']);
                    foreach($elms as $elm) : ?>
                        <li><?= $elm ?></li>
                    <?php endforeach; ?>
                    </ul>
            <?php endif; ?>    

            <?php $urltext = "Mehr über uns";
            if(isset($args['urltext'])) : 
                $urltext = $args['urltext'];
             endif; ?> 
            <?php if(isset($args['url'])) : ?>
            <a class="banner-button" href="<?php echo $args['url']; ?>"><?= $urltext ?></a>
            <?php endif; ?> 

            <?php if(isset($args['buttonurl'])) : ?>
            <a class="banner-button" href="<?php echo $args['buttonurl']; ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/arrow_yellow.svg"></a>
            <?php endif; ?> 

        </div>
        
        <?php if(isset($args['img'])) : ?>
        <div class="partner-content <?= $second ?> image-bg p-0" style="background-image:url('<?php echo $args['img']; ?>')"></div>        
        <?php endif; ?>     

        <?php if(isset($args['video'])) : ?>
            <?php //print_r($args);?>
       
        <div data-src="<?php echo $args['video']; ?>" class="partner-content lightbox-video <?= $second ?> image-bg p-0" style="background-image:url('<?php echo $args['thumbnail']; ?>')">
            <div class="playbutton h-100 d-flex flex-column justify-content-center align-items-center">

                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/play.svg" alt="playbutton" class="playbtn" />
                <h3 class="text-center text-white">Video abspielen</h3>
            </div>
        </div> 
        <?php endif; ?>  
    </div>
</div>  