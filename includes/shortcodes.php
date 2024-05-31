<?php 
function getServiceBar($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/servicebar');
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'servicebar', 'getServiceBar' );


function getPartnerBanner($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/partnerbanner','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'partnerbanner', 'getPartnerBanner' );


function getContactBanner($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/contactbanner','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'contactbanner', 'getContactBanner' );

function getKunden($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/kunden','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'kunden', 'getKunden' );



function getPostTypeGrid($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/grid','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'grid', 'getPostTypeGrid' );



function getSubpages($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/grid','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'subpages', 'getSubpages' );


function getTeamMembers($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/team','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'team', 'getTeamMembers' );


function getContactBoxes($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/contactboxes','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'contactboxes', 'getContactBoxes' );


function getNotFoundBanner($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/notfound','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'notfound', 'getNotFoundBanner' );



function getCreditForm($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/creditform','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'creditform', 'getCreditForm' );

function getContactForm($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/contactform','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'contactform', 'getContactForm' );



function getInfoRow($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/inforow','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'inforow', 'getInfoRow' );



function getMap($atts){
    ob_start();
    $content .= get_template_part('template-parts/shortcodes/map','',$atts);
    $content .= ob_get_clean(); 
    return $content;  
}

add_shortcode( 'gmap', 'getMap' );