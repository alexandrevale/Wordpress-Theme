<?php get_header(); ?>
<main>
	<section id="titulo-interno">
		<div class="container-fluid">
			<div class="row wrapper">
				<h2 class="text-center">Meu Blog</h2>
			</div>
		</div>
	</section>
	<section>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post__info">
			<h3 class="post__title"> <?php the_title(); ?> </h3>
		</div>
		<?php if ( has_post_thumbnail( $post->ID ) ): ?>
			<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?>
		<?php else: ?>
			
		<?php endif; ?> 
		<div class="post__date"> 
				<p class="text-center date__day"> <?php the_time('d'); ?> </p>
				<p class="text-center date__month"> <?php the_time('M'); ?> </p>
			</div>
		<div class="post__content">
			<?php the_content(); ?>
		</div>
		<div class="post__categories">
		<? 	$categories = get_the_category();
			foreach( $categories as $category ) {
				echo '<div class="post__category"> <p>' . $category->name . '</p> </div>';
			}
		?>
		</div>
	<?php endwhile; ?>
	<?php get_sidebar(); ?>
	</section>
</main>
<?php get_footer(); ?>