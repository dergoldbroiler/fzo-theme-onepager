<?php /** Template Name: Contact */ ?>

<?php get_header(); ?>


<div class="container p-0 mainpage rowmargin <?php echo $post->post_name; ?>" id="main">

    <div class="row">
        <div class="col-12 p-5">
            <?php the_content(); ?>
        </div>
    </div>


    

</div>

<?php get_footer(); ?>