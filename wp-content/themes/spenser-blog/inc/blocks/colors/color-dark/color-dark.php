<?php

add_action( 'customize_register', 'spenser_blog_dark_color' );

function spenser_blog_dark_color( $wp_customize ) {
    $wp_customize->add_setting( 'dark_color', array(
        'default'     => spenser_blog_get_default_dark_color(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_color', array(
        'label'      => esc_html__( 'Dark Color', 'spenser-blog' ),
        'section'    => 'colors',
        'settings'   => 'dark_color',
        
    ) ) );

}


add_action( 'customize_preview_init', 'spenser_blog_dark_color_enqueue_scripts' );
function spenser_blog_dark_color_enqueue_scripts() {
    wp_enqueue_script( 'graphthemes-dark-customizer', get_template_directory_uri() . '/inc/blocks/colors/color-dark/customizer-color-dark.js', array('jquery'), '', true );
}