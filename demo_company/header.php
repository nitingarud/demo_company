<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo_company
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/jquery-ui.css">
	<script src="<?php echo get_template_directory_uri(); ?>/lib/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/js/bootstrap.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/js/jquery-ui.js"></script>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="col-xs-12" style="background:url('<?php echo get_template_directory_uri(); ?>/images/header-bg.jpg') !important;background-repeat: no-repeat !important;background-size:100% 100% !important;height:99px !important">
                <div class="col-xs-4">
                    <?php if (get_header_image()) : ?>
                        <div id="site-header">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <img src="<?php echo get_theme_mod('m1_logo'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="img-responsive" style="padding: 8px 0px;">
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xs-8">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle right" aria-controls="primary-menu" aria-expanded="false"><img src="http://localhost/wordpress/wp-content/themes/demo_company/images/icon-bar.png"></button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                            'depth' => '2',
                        ));
                        ?>
                    </nav><!-- #site-navigation -->
                    
                </div>
            </div>
        </div>
    </header>
<div id="page" class="site">
	<div id="content" class="site-content">