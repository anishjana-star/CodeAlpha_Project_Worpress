<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spenser-blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'spenser-blog' ); ?></a>


    <?php $sticky_menu = get_theme_mod( 'spenser_blog_sticky_menu_option', spenser_blog_get_default_sticky_menu() ); ?>
    <header id="masthead" class="site-header<?php echo $sticky_menu ? esc_attr( ' sticky-header' ) : ''; ?>">

        <div class="header-wrapper">
            <div class="container">
                <div class="site-header-wrapper">
                    <div class="site-branding">

                        <?php the_custom_logo(); ?>

                        <div class="site-identity">

                            <?php if( get_theme_mod( 'show_hide_site_title', spenser_blog_get_default_site_title_show_hide() ) ) { ?>
                            <div class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
                                    class="logo"><?php bloginfo( 'name' ); ?></a>
                            </div>
                            <?php } ?>


                            <?php $spenser_blog_description = get_bloginfo( 'description' ); ?>
                            <?php if( get_theme_mod( 'show_hide_site_tagline', spenser_blog_get_default_site_tagline_show_hide() ) ) { ?>
                            <div class="site-description"><?php echo $spenser_blog_description; ?></div>
                            <?php } ?>
                        </div>

                    </div><!-- .site-branding -->

                    <nav id="site-navigation" class="main-navigation">
                        <button id="nav-icon3" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">

                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
                    </nav><!-- #site-navigation -->

                    <?php get_template_part( 'template-parts/social', 'links' ); ?>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <?php
		if( get_theme_mod( 'spenser_blog_breadcrumbs_option', spenser_blog_get_default_breadcrumbs() ) ) {
			if( function_exists( 'spenser_blog_get_breadcrumbs' ) ) {
				spenser_blog_get_breadcrumbs();
			}
		}