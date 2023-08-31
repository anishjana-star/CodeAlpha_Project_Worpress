<?php

add_action( 'customize_register', 'spenser_blog_post_detail_author' );
function spenser_blog_post_detail_author( $wp_customize ) {

	$wp_customize->add_setting( 'post_detail_hide_show_author', array(
        'sanitize_callback'     =>  'spenser_blog_sanitize_checkbox',
        'default'               =>  spenser_blog_get_default_post_detail_author()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_detail_hide_show_author', array(
        'label' => esc_html__( 'Show/Hide Author','spenser-blog' ),
        'section' => 'spenser_blog_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_author',
        'type'=> 'toggle',
    ) ) );

}