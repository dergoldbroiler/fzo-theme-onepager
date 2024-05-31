<?php /** Template Name: Contact */ ?>

<?php get_header('pages'); ?>


<div class="container p-0 rowmargin <?php echo $post->post_name; ?>" id="main">

    <div class="row">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>


    

</div>

<?php get_footer(); ?>