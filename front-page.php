<?php get_header(); ?>


<?php
$headline = "Ceramic Experts bietet Produkte und insbesondere <br>deren Dienstleistungen für hochklassige, langhaltende <br>und beständige Keramikbeschichtungen.";

if(get_field('headline','options')){
    $headline = get_field('headline','options');
}
?>


<div class="container-fluid p-0" id="main">

    <div class="row bg-lightgreen pb-5">
        <div class="col-12 pt-4">
            <h1 class="text-center m-0 mt-5 m-lg-5 p-0 p-xl-5 fs36 pb-0 pb-xl-0" id="ceramic-experts-top"><?= $headline ?></h1> 
        </div>
        <div class="col-12 pb-5">
            <div class="container  p-0 p-xl-5  contentarea">

                    <?php echo do_shortcode('[subpages id="leistungen"]'); ?>

                    <?php //get_template_part('template-parts/onepager/keramikbeschichtung','',array()); ?>  
            </div>   
        </div>
    </div>




   
    <?php for($i=1;$i<20;$i++): ?>
        <?php if(get_field('content_'.$i,'options')): ?>
        
         <?php if( get_post(get_field('content_'.$i,'options'))->post_status == "publish"): ?>
            <?php 
            $bg = "bg-lightgray";

            if($i % 2 == 0){
                $bg = "bg-lightlightgrey";
            }
            ?>
                <div class="row <?= $bg ?> pb-5" id="<?= get_field('anker_'.$i,'options'); ?>">    
                    <div class="col-12 pb-5">
                        <div class="container p-0 p-xl-5 contentarea">
                                <div class="w-100  px-4 px-xl-0  m-0">
                                    <?php echo apply_filters('the_content', get_post(get_field('content_'.$i,'options'))->post_content);  ?> 
                                </div>  
                        </div>   
                    </div>
                </div>
  <?php endif; ?>
        <?php endif; ?>
    <?php endfor; ?>        


    

</div>


<?php get_footer(); ?>