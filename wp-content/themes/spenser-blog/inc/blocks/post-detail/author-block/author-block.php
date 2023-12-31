<?php

add_action( 'customize_register', 'spenser_blog_post_detail_author_block' );
function spenser_blog_post_detail_author_block( $wp_customize ) {

	$wp_customize->add_setting( 'post_detail_hide_show_author_block', array(
        'sanitize_callback'     =>  'spenser_blog_sanitize_checkbox',
        'default'               =>  spenser_blog_get_default_post_detail_author_block()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_detail_hide_show_author_block', array(
        'label' => esc_html__( 'Show/Hide Author Block','spenser-blog' ),
        'section' => 'spenser_blog_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_author_block',
        'type'=> 'toggle',
    ) ) );

}