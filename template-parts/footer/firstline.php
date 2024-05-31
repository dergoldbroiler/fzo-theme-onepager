<div class="container m-auto p-0 m-0 footer-menu-row footer-menu-row-items">
    <div class="row">
        <div class="col-12">

            <div class="d-flex w-100 flex-column flex-lg-row justify-content-start align-items-center py-5">

                <div class="logofooter pe-5 pe-lg-0">
                
                </div>      
                <div class="menufooter">
                <?php
                         wp_nav_menu(array('menu' => 'mainmenu', 'menu_id'=>'mainmenu', 'container' => false, 'menu_class' => 'mleft ps-0 ms-0'));
                        ?>
                  <div class="adresse text-white d-flex d-lg-none" style="padding-left:20px">
                       <a class="text-decoration-none text-white me-2" href="<?php the_field('instagram','options') ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/insta_white.svg" alt="Instagram-Seite des Fahrzeugzentrums Olpe" class="footer-sm-icon"></a>
                       <a class="text-decoration-none text-white" href="<?php the_field('facebook','options') ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/facebook_white.svg" alt="Facebook-Seite des Fahrzeugzentrums Olpe" class="footer-sm-icon"></a>
                   </div>     
                </div>

            </div>

        </div>
    </div>
    </div>