<?php

add_theme_support ('nav-menus');




if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
    'name' => 'TopNavBar',
    'before_widget' => '<div class = "head_buttons">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
    register_sidebar(array(      
        'name' => 'BottomNavBar',
        'before_widget' => '<div class = "bottom_button">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
  

?>