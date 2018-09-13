
<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<div class="site-header-main">
				<!--<div class="languages">
					<ul>
						<li><a href="">FR</a></li>
						<li> - </li>
						<li><a href="">NL</a></li>
						<li> - </li>
						<li><a href="">EN</a></li>
					</ul>
				</div><!-- .languages -->

				<div class="container-fluid site-branding" id="site-branding-header">
					<div class="row-branding">
						<div class="col-md-4 site-logo">
							<?php twentysixteen_the_custom_logo(); ?>
						</div><!-- .col-md-4 site-logo -->

						<div class="col-md-6 main-title">
							<?php if ( is_front_page() && is_home() ) : ?>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif;			
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) :
							?>

							<div class="main-description">
								<p class="site-description"><?php echo $description; ?></p>
							</div><!-- .main-description -->
						</div><!-- .col-md-6 main-title -->

						<?php endif; ?>

						<!-- Menu Sarah -->
						<div class="col-md-2" id="menu-wrapper">
							<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>

							<!--<button id="menu-toggle" class="menu-toggle"><?php // _e( 'Menu', 'twentysixteen' ); ?></button> -->
							<div id="site-header-menu" class="site-header-menu">
								<?php if ( has_nav_menu( 'primary' ) ) : ?>

							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class' => 'primary-menu',
										)
									);
								?>
							</nav><!-- .main-navigation -->
							<?php endif; ?>
							</div><!-- .site-header-menu -->
						</div><!-- .col-md-2 #menu-wrapper -->
					</div><!-- .row-branding -->
				</div><!-- .container-fluid site-branding -->

				<div class="row-menu-ECA">
					<div class="col-md-2" id="empty-col"></div>
					<div class="col-md-8 central-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
					</div><!-- .col-md-8 central-menu -->
					<div class="col-md-2" id="empty-col-bis"></div>
				</div><!-- .row-menu-ECA -->

					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
