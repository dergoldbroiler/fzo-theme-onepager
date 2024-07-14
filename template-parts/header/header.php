
<!-- mobile -->

<header class="container-fluid w-100 p-0 d-block d-xl-none position-fixed " id="header-mobile">

    <div class="container py-4 px-4 px-xl-0 " id="header-inner-container">
        <div class="row">
           <div class="col-9 col-xl-3">
                <a href="/" class="d-none d-xl-block">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.webp" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" id="top-logo" />
                </a>
                <a href="/" class="d-block d-xl-none">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/Ceramic-Logo-White.svg" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" id="top-logo"/>
                </a>
            </div>
            <div class="col-3 offset-xxl-3 col-xl-6">
                <?php get_template_part('template-parts/header/contact','',array()) ?>
                <?php get_template_part('template-parts/header/menubars','',array()) ?>
            </div>
        </div>  
    </div>  
    
    <div class="w-100" id="menucontainer">
        
        <div class="container px-0" id="mobmenu">


            <div class="back-mobile d-flex flex-row align-items-center justify-content-center p-3"> 
                <a href="http://www.autohaus-loehr.de/" class="me-4">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/back_arrow.svg" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" id="backto"/>    
                </a>&nbsp;&nbsp;
                <a href="http://www.autohaus-loehr.de/"><img  src="<?php bloginfo('stylesheet_directory'); ?>/images/FZ_Olpe_Logo_mobile.svg" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" /></a>
            </div>
                <?php
                  

                    if(is_front_page()) :
                        wp_nav_menu(array('menu' => 'mainmenu', 'menu_id'=>'mainmenu', 'container' => false, 'menu_class' => 'mleft'));
                        else:
                            wp_nav_menu(array('menu' => 'pages', 'menu_id'=>'mainmenu', 'container' => false, 'menu_class' => 'mleft'));
                        endif;
                      
                ?>    
        </div>
    </div>  
    
    
    

</header>




<header class="container-fluid w-100 p-0 d-none d-xl-block" id="header">



    <div class="container  px-4 px-xl-0" id="header-inner-container">

        <div class="w-100 d-flex flex-row justify-content-between align-items-center">
     
            <div class="firstcol">
                <?php get_template_part('template-parts/header/back','',array()) ?>     
            </div>
            <div class="secondcol ms-4 d-flex flex-row justify-content-between align-items-center">
                <a href="/" class="d-none d-xl-block ms-4">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.webp" alt="CeramicExperts" class="img-fluid" id="top-logo"/>
                </a>
                <div class="contact">
                    <?php get_template_part('template-parts/header/contact','',array()) ?>
                </div> 
            </div> 
            
        </div>
    </div>    
    
    <div class="w-100" id="menucontainer">

        <div class="container px-0">
            


        <div class="w-100 d-flex flex-row justify-content-start align-items-center">
     
            <div class="firstcol">
            
            </div>
            <div class="secondcol ms-4 d-flex flex-row justify-content-start align-items-center">
            <?php if(is_front_page()) :
                  wp_nav_menu(array('menu' => 'mainmenu', 'menu_id'=>'mainmenu', 'container' => false, 'menu_class' => 'px-0'));
                  else:
                  wp_nav_menu(array('menu' => 'pages', 'menu_id'=>'mainmenu', 'container' => false, 'menu_class' => 'px-0'));
                  endif;
                ?>
            </div> 
            
        </div>
        </div>
    </div>    
    

    

</header>