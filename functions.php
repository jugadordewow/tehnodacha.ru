<?php

$STYLES_DIR = get_template_directory_uri().'/styles';

wp_enqueue_scripts();
wp_enqueue_style('main.css', $STYLES_DIR.'/main.css');
wp_enqueue_style('critical.css', $STYLES_DIR.'/critical.css');
wp_enqueue_style('custom.css', $STYLES_DIR.'/custom.css');


add_action( 'after_setup_theme', function() {
    register_nav_menus( [
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ]);
});


