<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package okbetsportslivescore
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

	<div class="full-width-wrap">
		<div class="container">

			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'okbetsportslivescore' ); ?></a>

			<header id="masthead" class="site-header">
				<div class="col">
					<div class="col-1">
						<div class="site-branding">
							<div class="custom-logo">
								<?php the_custom_logo(); ?>
							</div>
							<?php
								/*
								if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
								else :
									?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
								endif;
								$okbetsportslivescore_description = get_bloginfo( 'description', 'display' );
								if ( $okbetsportslivescore_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo $okbetsportslivescore_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
									<?php 
								endif; 
								*/
							?>
						</div>
					</div>
					<!-- .site-branding -->

					<div class="col-9">
						<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'okbetsportslivescore' ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					</div>
					
					<div class="col-2">
						<div class="account">
							
							<div class="inline circle">
								<img src="http://localhost/okbetsportslive/wp-content/uploads/2023/02/Profile.png" title="profile" alt="profile"> 
							</div>

							<div class="inline absolute">
								<?php
								$current_user = wp_get_current_user(); 
								//printf( __( 'User first name: %s', 'okbetsportslivescore' ), esc_html( $current_user->user_firstname ) ) . '<br />';
								//printf( __( 'User last name: %s', 'okbetsportslivescore' ), esc_html( $current_user->user_lastname ) ) . '<br />';
								printf( esc_html( $current_user->display_name ) );
								?>
							</div>
							<!--
							<ul>
								<li>Edit Profile</li>
							</ul>
							-->

						</div>
					</div>
				</div>
			</header><!-- #masthead -->
			
		</div>
	</div>

