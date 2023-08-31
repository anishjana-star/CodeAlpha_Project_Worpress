<?php

add_action( 'customize_register', 'spenser_blog_post_snippet_comment' );
function spenser_blog_post_snippet_comment( $wp_customize ) {

	$wp_customize->add_setting( 'post_snippet_hide_show_comment', array(
        'sanitize_callback'     =>  'spenser_blog_sanitize_checkbox',
        'default'               =>  spenser_blog_get_default_post_snippet_comment()
    ) );

    $wp_customize->add_control( new Graphthemes_Toggle_Control( $wp_customize, 'post_snippet_hide_show_comment', array(
        'label' => esc_html__( 'Show/Hide Number of Comments','spenser-blog' ),
        'section' => 'spenser_blog_post_snippet_customization_section',
        'settings' => 'post_snippet_hide_show_comment',
        'type'=> 'toggle',
    ) ) );

}