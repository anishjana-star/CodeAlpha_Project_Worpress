<?php

add_action( 'customize_register', 'spenser_blog_logo_size' );
function spenser_blog_logo_size( $wp_customize ) {

    $wp_customize->add_setting( 'logo_size', array(
        'default'     => spenser_blog_get_default_logo_size(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'logo_size', array(
        'type'        => 'number',
        'settings'    => 'logo_size',
        'priority'  => 8,
        'label'       =>  esc_html__( 'Logo Size', 'spenser-blog' ),
        'section'     => 'title_tagline',
        'input_attrs' => array(
            'min' => 10,
            'max' => 100
        )
    ) );

}

add_action( 'customize_preview_init', 'spenser_blog_logo_size_enqueue_scripts' );
function spenser_blog_logo_size_enqueue_scripts() {
    wp_enqueue_script( 'graphthemes-logo-size-customizer', get_template_directory_uri() . '/inc/blocks/font-customization/logo-size/customizer-logo-size.js', array('jquery'), '', true );
}


add_action( 'wp_enqueue_scripts', 'spenser_blog_logo_size_dynamic_css' );
function spenser_blog_logo_size_dynamic_css() {

    $logo_size = esc_attr( get_theme_mod( 'logo_size', spenser_blog_get_default_logo_size() ) );
    $logo_size .= 'px';

    $dynamic_css = ":root { --logo-size: $logo_size; }";

    wp_add_inline_style( 'spenser-blog', $dynamic_css );
}