<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LG6KV2');</script>
<!-- End Google Tag Manager -->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LG6KV2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<?php get_sidebar( 'off-canvas'); ?>
	<?php do_action( 'layers_before_site_wrapper' ); ?>
	<div <?php layer_site_wrapper_class(); ?>>

		<?php do_action( 'layers_before_header' ); ?>

		<?php get_template_part( 'partials/header' , 'secondary' ); ?>

		<?php if ( 'header-sidebar' == layers_get_theme_mod( 'header-menu-layout' ) ) { ?>
			<div class="header-side-wrapper"><!-- header side wrapper -->

		<?php } ?>

		<section <?php layers_header_class(); ?> >
			<?php do_action( 'layers_before_header_inner' ); ?>
			<div class="<?php if( 'layout-fullwidth' != layers_get_theme_mod( 'header-width' ) ) echo 'container'; ?> header-block">
				<?php if( 'header-logo-center' == layers_get_theme_mod( 'header-menu-layout' ) ) {
					get_template_part( 'partials/header' , 'centered' );
				} else {
					get_template_part( 'partials/header' , 'standard' );
				} // if centered header ?>
			</div>
			<?php do_action( 'layers_after_header_inner' ); ?>
		</section>

		<?php do_action( 'layers_after_header' ); ?>

		<section id="wrapper-content" <?php layers_wrapper_class( 'wrapper_content', 'wrapper-content' ); ?>>