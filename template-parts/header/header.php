
<!-- mobile -->

<header class="container-fluid w-100 p-0 d-block d-xl-none position-fixed " id="header-mobile">

    <div class="container py-4 px-4 px-xl-0 " id="header-inner-container">
        <div class="row">
           <div class="col-9 col-xl-3">
                <a href="/" class="d-none d-xl-block">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/FZ_Olpe_Logo.svg" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" id="top-logo"/>
                </a>
                <a href="/" class="d-block d-xl-none">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/FZ_Olpe_Logo_mobile.svg" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" id="top-logo"/>
                </a>
            </div>
            <div class="col-3 offset-xxl-3 col-xl-6">
                <?php get_template_part('template-parts/header/contact','',array()) ?>
                <?php get_template_part('template-parts/header/menubars','',array()) ?>
            </div>
        </div>  
    </div>  
    
    <div class="w-100" id="menucontainer">
        <div class="container px-0">
                <?php
                    wp_nav_menu(array('menu' => 'mainmenu', 'menu_id'=>'mainmenu', 'container' => false, 'menu_class' => 'mleft'));
                ?>    
        </div>
    </div>  
    
    
    

</header>




<header class="container-fluid w-100 p-0 d-none d-xl-block" id="header">

    

    <div class="container py-4 px-4 px-xl-0" id="header-inner-container">
        <div class="row">

          
        <div class="col-9 col-xl-3">
                <a href="/" class="d-none d-xl-block">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/FZ_Olpe_Logo.svg" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" id="top-logo"/>
                </a>
                <a href="/" class="d-block d-xl-none">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/FZ_Olpe_Logo_mobile.svg" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" id="top-logo"/>
                </a>
            </div>
            <div class="col-3 offset-xxl-3 col-xl-9 col-xxl-6">
                <?php get_template_part('template-parts/header/contact','',array()) ?>
                <?php get_template_part('template-parts/header/menubars','',array()) ?>
            </div>
        </div>
    </div>    
    
    <div class="w-100" id="menucontainer">

        <div class="container px-0">
        

                    <?php
                        wp_nav_menu(array('menu' => 'mainmenu', 'menu_id'=>'mainmenu', 'container' => false, 'menu_class' => 'mleft'));
                    ?>
            
        </div>
    </div>    
    

    

</header>