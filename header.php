<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package terrace
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="animsition">
	<div class="wrapper">