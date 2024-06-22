<?php
/**
 * The template for displaying the footer
 *
 */
?>




<footer class="container-fluid w-100 bg-1 p-0 mb-0">
    <div class="container p-3 p-lg-0" id="footercontact">   
        <div class="row">
            <div class="col-12">
            <div class="container contentarea py-5">
                <?php  echo do_shortcode('[contactboxes type="footer"]'); ?>
            </div>    
            </div>
        </div>
    </div>  
    <div class="w-100 bg-darkblue d-flex flex-column-reverse flex-lg-column rowmargin m60 mb-0">
    <div class="menufooter ps-4 d-flex d-lg-none m-0">
                <ul id="footermenu" class="p-0 m-0 mb-5 d-flex" style="list-style:none"><li  class="p-0 m-0 me-5"><a href="/datenschutz" class="text-white" aria-current="page">Datenschutz</a></li><li class=""><a href="/impressum"  class="text-white" aria-current="page">Impressum</a></li>
</ul>
                     
                </div>

        <?php get_template_part('template-parts/footer/firstline'); ?>
        <?php get_template_part('template-parts/footer/secondline'); ?>
        <?php get_template_part('template-parts/footer/thirdline'); ?>


    </div>  
    
</footer>


<?php get_template_part('template-parts/modalcontent'); ?>
<?php wp_footer(); ?>


<script src="<?php bloginfo('stylesheet_directory'); ?>/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/fontawesome/js/all.js"></script>
<script type="module"  src="<?php bloginfo('stylesheet_directory'); ?>/js/myjs.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/slick/slick.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/fslightbox/fslightbox.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/lottie.js"></script>



<script>
    document.addEventListener('DOMContentLoaded', function(){
        var lightbox = new FsLightbox();

        var lightboxlinks = document.querySelectorAll('.lightbox-img');
        var lightboxvideos = document.querySelectorAll('.lightbox-video');

        if(lightboxlinks){
            lightboxlinks.forEach(function(link){
                link.setAttribute('data-fslightbox', '');
                refreshFsLightbox();
                link.addEventListener('click', function(e){
                    e.preventDefault();
                    lightbox.props.sources = [link.querySelector('img').getAttribute('src')]
                    lightbox.open();
                    
                });
            });
        }

        if(lightboxvideos){
            lightboxvideos.forEach(function(video){
                video.setAttribute('data-fslightbox', '');
                refreshFsLightbox();
                video.addEventListener('click', function(e){
                    e.preventDefault();
                    lightbox.props.sources = [video.getAttribute('data-src')]
                    lightbox.open();
                    
                });
            });
        }
    });
</script>
</body>
</html>
