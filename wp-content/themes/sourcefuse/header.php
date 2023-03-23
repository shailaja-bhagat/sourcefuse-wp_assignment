<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */

?>
<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js">
		</script>

		<?php wp_head(); ?>
	</head>

	<body>
		<div id="page" class="site">
			
			<?php get_template_part( 'template-parts/header/site-header' ); ?>

			<div id="content" class="site-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
