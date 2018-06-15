<?php
//Soporte para thumbnails
add_theme_support('post-thumbnails');

//Tamaño de imagen y que se corte si se rebasa
add_image_size('homepage', 200, 100, true);

//Menus
register_nav_menus( array(

    'menu-top' => 'Menu principal',
    'menu-footer' => 'Menu footer'

));

register_sidebar(array(
    'name'=>'aside',
    'before_widget'=>'',
    'after_widget'=>'',
    'before_title'=>'<h4 class="card-title">',
    'after_title'=>'<h/4>'
))

?>  