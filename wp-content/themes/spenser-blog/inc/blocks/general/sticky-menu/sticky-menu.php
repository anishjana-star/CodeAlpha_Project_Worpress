<?php

add_action( 'customize_register', 'spenser_blog_sticky_menu' );
function spenser_blog_sticky_menu( $wp_customize ) {

	$wp_customize->add_setting('spenser_blog_sticky_menu_option', array(
        'sanitize_callback'     =>  'spenser_blog_sanitize_checkbox',
        'default'               =>  spenser_blog_get_default_sticky_menu(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'spenser_blog_sticky_menu_option', array(
        'label' => esc_html__('Enable Sticky Menu', 'spenser-blog'),
        'section' => 'spenser_blog_general_customization_section',
        'settings' => 'spenser_blog_sticky_menu_option',
        'type' => 'toggle',
    )));

}