<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php global $page, $paged; wp_title( '', true, 'right' ); ?> Blog </title>
	<?php wp_head(); ?>
</head>
<body>