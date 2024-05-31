<div class="container m-auto p-0 m-0 footer-menu-row">
    <div class="row">
        <div class="col-12">

            <div class="d-flex w-100 flex-column flex-lg-row justify-content-start align-items-center py-5">

                <div class="logofooter pe-5 pe-lg-0">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/FZ_Olpe_Logo_mobile.svg" alt="Logo" class="img-fluid">
                    </a>
                </div>      
                <div class="menufooter d-flex">
                   <div class="adresse text-white me-5">
                        <?php the_field('adresse','options') ?>
                   </div>
                   <div class="adresse text-white me-5">
                        T &nbsp; <a class="text-decoration-none text-white" href="tel://<?php the_field('telefon','options') ?>"><?php the_field('telefon','options') ?></a> <br>
                        E &nbsp; <a class="text-decoration-none text-white" href="mailto:<?php the_field('e-mail','options') ?>"><?php the_field('e-mail','options') ?></a>
                   </div>
                   <div class="adresse text-white d-none d-lg-flex">
                       <a class="text-decoration-none text-white me-2" href="<?php the_field('instagram','options') ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/insta_white.svg" alt="Instagram-Seite des Fahrzeugzentrums Olpe" class="footer-sm-icon"></a>
                       <a class="text-decoration-none text-white" href="<?php the_field('facebook','options') ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/facebook_white.svg" alt="Facebook-Seite des Fahrzeugzentrums Olpe" class="footer-sm-icon"></a>
                   </div>
                </div>

            </div>

        </div>
    </div>
    </div>