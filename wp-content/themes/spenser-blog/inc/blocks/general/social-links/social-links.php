<?php

function graphthemes_get_social_links() {
    $social_links = array(
        esc_html__( 'Facebook', 'spenser-blog' ),
        esc_html__( 'Instagram', 'spenser-blog' ),
        esc_html__( 'Youtube', 'spenser-blog' ),
        esc_html__( 'LinkedIn', 'spenser-blog' ),
        esc_html__( 'Twitter', 'spenser-blog' ),
        esc_html__( 'Pinterest', 'spenser-blog' ),
        esc_html__( 'TikTok', 'spenser-blog' )
    );

    return $social_links;
}

add_action( 'customize_register', 'spenser_blog_social_links' );
function spenser_blog_social_links( $wp_customize ) {

    $social_links = graphthemes_get_social_links();

    $social_links_title = "<hr/><h2>".esc_html__( "Social Links:", 'spenser-blog' )."</h2>";

    $wp_customize->add_setting( 'social_links_title', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );

    $wp_customize->add_control( new Spenser_Blog_Custom_Text( $wp_customize ,'social_links_title',array(
        'section' => 'spenser_blog_general_customization_section',
        'label' => $social_links_title
    ) ) );


    if( $social_links ) {
        foreach( $social_links as $social_link ) {

            $wp_customize->add_setting( 'social_links_' . strtolower( $social_link ), array(
                'sanitize_callback' => 'esc_url_raw',
            ) );

            $wp_customize->add_control( 'social_links_' . strtolower( $social_link ), array(
                'label'       => $social_link,
                'section'     => 'spenser_blog_general_customization_section',
                'type'        => 'text'
            ) );

        }
    }

}