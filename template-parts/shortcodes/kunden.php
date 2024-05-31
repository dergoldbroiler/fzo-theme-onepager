
<div class="posts-grid grid-four px-4 p-lg-0 w-100">

    <?php $kunden = get_posts(array('post_type'=>'kunde','post_status' => 'publish', 'posts_per_page' => 4)); ?>
    <?php foreach($kunden as $kunde): ?>
        <?php get_template_part('template-parts/shortcodes/kunde','',$kunde); ?>
    <?php endforeach; ?>
</div>