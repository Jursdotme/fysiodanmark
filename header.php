<!doctype html>

<html <?php language_attributes(); ?> class="no-js" data-logo-width="<?php echo get_theme_mod('logo_width'); ?>";>
	<head>

		<?php if (is_singular( 'medarbejder' ) || is_singular('imm_members') ): ?>
			<meta name="robots" content="noindex nofollow">
		<?php endif; ?>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#71bf44">
		<meta name="apple-mobile-web-app-title" content="Fysiodanmark">
		<meta name="application-name" content="Fysiodanmark">
		<meta name="msapplication-TileColor" content="#71bf44">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class( (! is_front_page() ? "not-home scale-font-size" : "scale-font-size") . ' ' . (get_field('legacy', 'option') ? 'legacy' : '') . '' . (get_field('no_pagetitle') ? 'no_pagetitle' : '') ); ?>>
		<div class="wrapper">
			<?php get_template_part('partials/page_header'); ?>
			<?php // get_template_part('partials/customizer_page_header'); ?>
