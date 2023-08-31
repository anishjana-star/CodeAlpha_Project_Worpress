<?php

add_action( 'customize_register', 'spenser_blog_customizer_theme_info' );

function spenser_blog_customizer_theme_info( $wp_customize ) {
	
    $wp_customize->add_section( 'spenser_blog_theme_info_section' , array(
		'title'       => esc_html__( '❂ Theme Info' , 'spenser-blog' ),
		'priority' => 2
	) );
    

	$wp_customize->add_setting( 'theme_info', array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
	) );
    
    $theme_info = '';
	
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Theme Details', 'spenser-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/spenser-blog/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'spenser-blog' ) . '</a></span><hr>';

	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'How to use', 'spenser-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/theme-docs/spenser-blog/' ) . '" target="_blank">' . esc_html__( 'Click Here', 'spenser-blog' ) . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'View Demo', 'spenser-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://graphthemes.com/preview/?product_id=spenser-blog' ) . '" target="_blank">' . esc_html__( 'Click Here', 'spenser-blog' ) . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__( 'Support Forum', 'spenser-blog' ) . ': </label><a class="button alignright" href="' . esc_url( 'https://wordpress.org/support/theme/spenser-blog' ) . '" target="_blank">' . esc_html__( 'Click Here', 'spenser-blog' ) . '</a></span><hr>';

	$wp_customize->add_control( new Spenser_Blog_Custom_Text( $wp_customize ,'theme_info',array(
		'section' => 'spenser_blog_theme_info_section',
		'label' => $theme_info
	) ) );

}