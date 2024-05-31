<?php
   $backgroundimage = wp_get_attachment_image_src( get_post_thumbnail_id(),'full')[0];
   $headercontent = apply_filters('the_content', get_post_meta($post->ID, 'headerinhalt', true)); 
?>



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
            <div class="col-3 offset-xl-3 col-xl-6">
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

    

    <div class="container py-4 px-4 px-xl-0" id="header-inner-container header-inner-desktop">
        <div class="row">

          
         <div class="col-9 col-xl-3">
                <a href="/" class="d-none d-xl-block" style="position:relative;z-index:999">
                    <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/FZ_Olpe_Logo.svg" alt="Autohaus Löhr, Fahrzeugzentrum Olpe" class="img-fluid" id="top-logo"/>
                </a>
                <a href="/" class="d-block d-xl-none" style="position:relative;z-index:999">
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

    <div class="w-100" id="headerbackground" style="background-image:url('<?php echo $backgroundimage; ?>')">
    <div class="overlay"></div>
    </div>
        <div class="headercontent <?php if(get_post_meta($post->ID, 'headerinhalt', true)): ?>more-margin-top<?php endif; ?>">

            <div class="container py-4 px-4 px-xl-0" id="header-inner-content-container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="white fs36 topline"><?php the_title(); ?></h1>
                        <h2 class="white fs36"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></h2>
                    </div>
                </div>

                <?php if(get_post_meta($post->ID, 'headerinhalt', true)): ?>
                

                <div class="row">
                    <div class="col-12 p-0 mt-5">
                        <div class="w-100 bg-white px-5 py-4">
                            <?php if(get_post_meta($post->ID, 'headeruberschrift', true)): ?>
                            <h3 class="fs18 fw500 pt-4"><?php echo get_post_meta($post->ID, 'headeruberschrift', true); ?></h3>
                            <?php endif; ?>
                        </div>
                        <?php echo $headercontent; ?>
                    </div>
                </div>

                <?php endif; ?>
            </div>
        </div>
    
