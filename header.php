<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php global $page, $paged; wp_title( '', true, 'right' ); ?> Blog </title>
	<?php wp_head(); ?>
</head>

<body>
	<header>
		<nav>
		  	<div class="nav__header">
			    <div class="nav__title">
					<h1>Blog Theme</h1>
			    </div>
			    <div class="nav__menu">
			      	<div class="nav__btn">
			        	<button id="nav__btn--check">
			          		<span></span>
		          			<span></span>
			          		<span></span>
			        	</button>
			      	</div>
					<div class="nav__links">
						<a href="<?php echo home_url('/') ?>">Home</a>
						<a href="<?php echo home_url('/sobre') ?>">Sobre</a>
						<a href="<?php echo home_url('/blog') ?>">Blog</a>
						<a href="<?php echo home_url('/contato') ?>">Contato</a>
					</div>
		   		</div>
		   	</div>
    	</nav>
	</header>