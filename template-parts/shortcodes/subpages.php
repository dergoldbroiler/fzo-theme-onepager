


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


?> 


<div class="w-100  px-0 px-xl-0  m-0" id="subpages">
<div class="container p-0">

    <div class="row">
    <?php 
    
    foreach ($subpages as $subpage) {
       
        get_template_part('template-parts/pages/subpage','', $subpage);
    }
 
    ?>
    </div>
    </div>
</div>


