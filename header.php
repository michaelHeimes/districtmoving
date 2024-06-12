<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package districtmoving
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    
       
        <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css" type="text/css" media="screen" /> -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/custom.css?ver=<?php echo rand(111, 999) ?>">
    </head>

    <body <?php body_class(); ?>>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF749HD"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'districtmoving'); ?></a>

            <header id="header" class="site-header">
                <div class="top-header">
                    <div class="container">
                        <?php dynamic_sidebar('top-header-left'); ?>
                        <!-- <div class="row">
                            <div class="col-lg-9 col-md-8 col-6"></div>
                            <!-- <div class="col-lg-3 col-md-4 col-6 top-header-right"><?php dynamic_sidebar('top-header-right'); ?></div>
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .top-header -->

                <div class="header-inside">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 logo-self">
                                <div class="site-logo">
<?php
the_custom_logo();
?>
                                </div><!-- .site-logo -->
                            </div>
                            <div class="col-lg-10 align-self-center">
                                <nav id="site-navigation" class="main-navigation">
                                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'menu-1',
                                        'menu_id' => 'primary-menu',
                                        'menu_class' => 'nav-primary',
                                    )); 
                                    ?>  
                                </nav><!-- #site-navigation -->
                            </div>
                            <!-- <div class="col-lg-2 align-self-center">
                            <a href="https://www.districtmoving.com/request-quote/" class="btn btn-primary request-a-quote">REQUEST A QUOTE</a>
                            </div> -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .header-inside -->
            </header><!-- #header -->

            <div id="content" class="site-content">