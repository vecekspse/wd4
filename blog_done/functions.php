<?php
add_theme_support("title-tag");
add_theme_support("post-thumbnails");

function moje_menu() {
    register_nav_menu('moje-menu', __('Moje menu'));
}
add_action('init', 'moje_menu');

function my_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Menu Sidebar', 'blog'),
        'id' => 'menu-sidebar',
        'before_widget' => '<section>',
        'after_widget' => '</section>',
        'before_title' => '<header class="major"><h2>',
        'after_title' => '</h2></header>',
    ) );
}
add_action( 'widgets_init', 'my_widgets_init' );


?>