<?php
/**
 * The template for displaying the footer
 *
 */
?>

<?php if(is_page('fahrzeuge')) : ?>
    <div class="container-fluid w-100 bg-lightgrey  p-0 mb-0">
        <div class="container p-0" id="creditform">   
            <div class="row">
                <div class="col-12">
                    <?php  echo do_shortcode('[creditform id="3"]'); ?>
                </div>
            </div>
        </div>  
       
    </div>
<?php endif; ?>


<?php if(is_page('kontakt')) : ?>
    <div class="container-fluid w-100 bg-lightgrey  p-0 mb-5">
        <div class="container p-0" id="">   
            <div class="row">
                <div class="col-12">
                    <?php  echo do_shortcode('[contactform id="3"]'); ?>
                </div>
            </div>
        </div>  
       
    </div>

     <!-- Kontaktformular -->
     <div class="container-fluid w-100 rowmargin m80">
        <div class="container p-0" id="contactform">   
            <div class="row">
                <div class="col-12">
                    <div class="orange-after mb-5 pb-5 text-center">
                        <h2 class="text-center">So finden Sie uns!</h2>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d134728.19684016018!2d7.740659802688244!3d50.95929574466571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sfahrzeugzentrum%20olpe!5e0!3m2!1sde!2sde!4v1702213853208!5m2!1sde!2sde" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>    
    </div>
<?php endif; ?>


<footer class="container-fluid w-100 bg-1 p-0 mb-0">
    <div class="container p-3 p-lg-0" id="footercontact">   
        <div class="row">
            <div class="col-12">
                <?php  echo do_shortcode('[contactboxes type="footer"]'); ?>
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
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/lottie.js"></script>

</body>
</html>
