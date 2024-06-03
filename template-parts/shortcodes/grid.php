


<?php

    $subpages = get_posts(
        array(
            'parent' => url_to_postid($args['id']),
            'posts_per_page' => '-1',
            'order' => 'DESC',
            'post_type' => 'page',
            'post_parent' => url_to_postid($args['id']),
            'orderby' => 'date'

        )
    );




?>


<div class="posts-grid p-0 w-100 mt-5 d-xl-none" id="subpages">

    <?php 
    
    foreach ($subpages as $subpage) {
       
        get_template_part('template-parts/pages/subpage','', $subpage);
    }
 
    ?>
</div>

<div class="posts-grid p-0 w-100 mt-5 d-none d-xl-grid" id="">

    <?php 
    
    foreach ($subpages as $subpage) {
       
        get_template_part('template-parts/pages/subpage','', $subpage);
    }
 
    ?>
</div>