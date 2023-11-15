<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inav
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'inav' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="header-dark"></div>
        <div class="menu-container">
            <div class="content-box">
                <div class="menu-box">
                    <div class="brands">
                        <div class="logo-brands logo-roscosmos"></div>
                        <div class="logo-brands logo-glonass"></div>
                        <div class="logo-brands logo-inav"></div>
                    </div>
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'inav' ); ?></button>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                        ?>
                    </nav><!-- #site-navigation -->
                    
                    <div class="lang-btn-box">
                        <div class="lang-btn_ru">ru</div>
                        <div class="lang-btn_en">en</div>
                    </div>
                </div>		
            </div>
        </div>
        
        <div class="content-box branding-content">
            <div class="site-branding-home" style="background-image: url(<?php header_image() ?>);">
                <div class="site-logo-big">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="site-description-box">
                    <div class="description-label">Наша миссия:</div>

                    <?php
                    $inav_description = get_bloginfo( 'description', 'display' );
			        if ( $inav_description || is_customize_preview() ) :
				    ?>
				        <div class="site-description">
                            <?php echo $inav_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>
			        <?php endif; ?>
                </div>
            </div>
        </div>		
	</header><!-- #masthead -->