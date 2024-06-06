<?php get_header(); ?>



<div class="container-fluid p-0" id="main">

    <div class="row bg-lightgreen pb-5">
        <div class="col-12">
            <h1 class="text-center m-0 mt-5 m-lg-5 p-5 fs36" id="ceramic-experts-top">Ceramic Experts bietet Produkte und insbesondere <br>deren Dienstleistungen für hochklassige, langhaltende <br>und beständige Keramikbeschichtungen.</h1> 
        </div>
        <div class="col-12 pb-5">
            <div class="container contentarea">

                    <?php echo do_shortcode('[subpages id="leistungen"]'); ?>

                    <?php get_template_part('template-parts/onepager/keramikbschichtung','',array()); ?>  
            </div>   
        </div>
    </div>
    <div class="row bg-lightgray pb-5">
        <div class="col-12">
        <h2 class="content-h2">Keramikbeschichtung</h2>
        </div>
        <div class="col-12 pb-5">
            <div class="container contentarea">

                    

                    <?php get_template_part('template-parts/onepager/keramikbeschichtung','',array()); ?>  
            </div>   
        </div>
    </div>
 
 

    

</div>


<?php get_footer(); ?>