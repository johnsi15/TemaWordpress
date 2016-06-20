<?php

register_nav_menus( array(
'menu' => 'Menu superior',
'menu2' => 'Menu footer'
));


add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 940, 600, true );
add_image_size( 'img_thumbnail', 490, 220, true );

//Widgets laterales
register_sidebar(array(
 'name' => 'Sidebar',
 'before_widget' => '<section class="widgets_lateral"> <div class="hidden-xs hidden-sm widget well well-sm app_nav"> <ul class=" app_nav_lateral app_nav_lateral_2">',
 'after_widget' => ' </ul> </div> </section>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
 ));



?>