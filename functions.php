<?php

function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'Main_Menu'=>'منوی اصلی',
        'footer_one'=>'منوس اول فوتر',
        'footer_two'=>'منوی دوم فوتر',
    ));
}

add_action("after_setup_theme", "theme_setup");


?>