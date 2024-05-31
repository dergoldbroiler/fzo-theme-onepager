<?php if( isset ($args['headline'])): ?>
<?php endif; ?>

<?php

    $subpages = get_posts(
        array(
            'post_type' => 'mitarbeiter',
            'posts_per_page' => '-1',
            'order' => 'ASC'
        )
    );


?>


<div class="posts-grid grid-four w-auto p-0 mx-4 mx-lg-0 mt-5 d-xl-none" id="team" style="width:unset !important">

    <?php 
    
    foreach ($subpages as $subpage) {
        
        get_template_part('template-parts/posts/member','', $subpage);
    }
 
    ?>
</div>

<div class="posts-grid grid-four p-0 w-100 mt-5 d-none d-xl-grid">

    <?php 
    
    foreach ($subpages as $subpage) {
        
        get_template_part('template-parts/posts/member','', $subpage);
    }
 
    ?>
</div>