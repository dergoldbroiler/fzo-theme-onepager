


<?php

    $subpages = get_posts(
        array(
            'parent' => url_to_postid($args['id']),
            'posts_per_page' => '-1',
            'order' => 'asc',
            'post_type' => 'page',
            'post_parent' => url_to_postid($args['id']),
            'orderby' => 'date'

        )
    );

$padding = "px-xl-5";
if(isset($args['padding']) && $args['padding'] == "0"){
    $padding = "px-0";
}

?>


<div class="posts-grid px-0 w-100 mt-5 d-xl-none <?= $args['id'] ?>" id="subpages">

    <?php 
    
    foreach ($subpages as $subpage) {
       
        get_template_part('template-parts/pages/subpage','', $subpage);
    }
 
    ?>
</div>



<div class="posts-grid  w-100 mt-5 <?= $args['padding'] ?> d-none d-xl-grid <?= $args['id'] ?>" id="">

    <?php 
    
    foreach ($subpages as $subpage) {
       
        get_template_part('template-parts/pages/subpage','', $subpage);
    }
 
    ?>
</div>