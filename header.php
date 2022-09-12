<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novena
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'novena' ); ?></a>
	<?php $options = get_option( 'novena_options' ); ?>
	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">

							<?php
								if($options['header_email']) {
							?>
								<li class="list-inline-item"><a href="mailto:<?php echo $options['header_email'];?>"><i class="icofont-support-faq mr-2"></i><?php echo $options['header_email'];?></a></li>
							<?php } ?>
							<?php
								if($options['header_address']) {
							?>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $options['header_address'];?></li>
							<?php } ?>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
							<?php
								if($options['header_right_number']) {
							?>
								<a href="tel:<?php echo $options['header_right_number'];?>">
								<span><?php echo $options['header_right_text'];?> : </span>
								<span class="h4"><?php echo $options['header_right_number'];?></span></a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation " id="navbar">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="img-fluid">
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
					aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse d-flex justify-content-end" id="navbarmain">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary-menu',
								'menu_class'     => 'navbar-nav ml-auto',
							)
						);
					?>
				</div>
			</div>
		</nav>
	</header>
