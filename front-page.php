<?php get_header(); ?>

<style>
    /* wehiko stuff mobile.de */
    #wehiko-app{
        display: none !important;
    }
    .ad {
            display: none !important;

            &:nth-child(1) {
                display: inherit !important;
            }
            &:nth-child(2) {
                display: inherit !important;
            }
            &:nth-child(3) {
                display: inherit !important;
            }
        }
    </style>

<div class="container p-0" id="main">

    <div class="row">
        <div class="col-12">
            <?php get_template_part('template-parts/posts/postgrid'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>

    

    

</div>


<?php get_footer(); ?>