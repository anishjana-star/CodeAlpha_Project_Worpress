<?php

function spenser_blog_customizer_upgrade_to_pro( $wp_customize ) {

	$wp_customize->add_section( new Spenser_Blog_Button_Control( $wp_customize, 'upgrade-to-pro',	array(
		'title'    => esc_html__( '★ Spenser Blog Pro ', 'spenser-blog' ),
		'type'	=> 'button',
		'pro_text' => esc_html__( 'Upgrade to Pro', 'spenser-blog' ),
		'pro_url'  => esc_url( 'https://graphthemes.com/spenser-blog/' ),
		'priority' => 1
	) )	);

	
}
add_action( 'customize_register', 'spenser_blog_customizer_upgrade_to_pro' );


function spenser_blog_enqueue_custom_admin_style() {
        wp_register_style( 'spenser-blog-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.css', false );
        wp_enqueue_style( 'spenser-blog-button' );

        wp_enqueue_script( 'spenser-blog-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.js', array( 'jquery' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'spenser_blog_enqueue_custom_admin_style' );