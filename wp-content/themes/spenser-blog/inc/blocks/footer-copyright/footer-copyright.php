<?php

/* Add Default Copyright Text */
require dirname( __FILE__ ) . '/default-footer-copyright.php';

add_action( 'customize_register', 'spenser_blog_customize_register_footer_copyright' );
function spenser_blog_customize_register_footer_copyright( $wp_customize ) {

    $wp_customize->add_section( 'spenser_blog_footer_copyright_section', array(
        'title'          => esc_html__( 'Footer Copyright', 'spenser-blog' ),
        'priority'  => 24
    ) );

    $wp_customize->add_setting( 'footer_copyright_text', array(
        'sanitize_callback'     =>  'wp_kses_post',
        'default'               =>  spenser_blog_get_default_footer_copyright()
    ) );

    $wp_customize->add_control( 'footer_copyright_text', array(
        'label' => esc_html__( 'Copyright Text', 'spenser-blog' ),
        'section' => 'spenser_blog_footer_copyright_section',
        'settings' => 'footer_copyright_text',
        'type'=> 'textarea',
    ) );

}