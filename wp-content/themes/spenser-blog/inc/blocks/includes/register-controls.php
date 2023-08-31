<?php

add_action( 'customize_register', 'spenser_blog_register_custom_controls' );
function spenser_blog_register_custom_controls( $wp_customize ) {

    require_once SPENSER_BLOG_BLOCKS_DIR_PATH . '/includes/button/class-button-control.php';
    $wp_customize->register_control_type( 'Spenser_Blog_Button_Control' );

    require_once SPENSER_BLOG_BLOCKS_DIR_PATH . '/includes//custom-html/class-custom-html.php';

    require_once SPENSER_BLOG_BLOCKS_DIR_PATH . '/includes/toggle/class-toggle-control.php';
    $wp_customize->register_control_type( 'Graphthemes_Toggle_Control' );

    require_once SPENSER_BLOG_BLOCKS_DIR_PATH . '/includes//multicheck/class-multi-check-control.php';
    $wp_customize->register_control_type( 'Graphthemes_Multi_Check_Control' );

}