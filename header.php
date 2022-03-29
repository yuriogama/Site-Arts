<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style-arts.css?v=202202121250" />

	<?php wp_head(); ?>
	<link rel="preload" as="style" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="preload" as="style" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" type="text/css" xmlns="http://www.w3.org/1999/xhtml" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" xmlns="http://www.w3.org/1999/xhtml" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body <?php body_class(); ?>>
	<header id="header">
		<section class="box-header">
		<div class="open-menu-mb only-mobile" id="open-mn-mb">
				<i class="fa fa-bars"></i>
			</div>

			<div class="logo">
				<?php dynamic_sidebar('logo-arts'); ?>
			</div>

			<div class="menu only-desk">
				<?php dynamic_sidebar('menu-header'); ?>
			</div>

			<div class="menu-mobile only-mobile">
				<div class="text-open">
					<p> Navegue pelo nosso site! </p>
				</div>

				<div class="menu-list">
					<?php dynamic_sidebar('menu-header'); ?>
				</div>

				<div class="close-menu-mb" id="close-mn-mb">
					x
				</div>
			</div>
		</section>
	</header>