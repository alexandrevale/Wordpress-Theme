<?php get_header(); ?>
<main>
	<section>
		<h2>Resultado da pesquisa: <?php echo $_GET['s']; ?> </h2>
	</section>
	<section>	
	<?php if ( have_posts() ) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php if ( has_post_thumbnail( $post->ID ) ): ?>
						<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?>
					<?php else: ?>
						
					<?php endif; ?> 
					<div class="post__date"> 
						<p class="text-center date__day"> <?php the_time('d'); ?> </p>
						<p class="text-center date__month"> <?php the_time('M'); ?> </p>
					</div>
					<div class="post__info">
						<h3 class="post__title"> <?php echo $post->post_title;?> </h3>
					</div>	
				</a>
				<div class="post__categories">
				<? 	$categories = get_the_category();
					foreach( $categories as $category ) {
						echo '<div class="post__category"> <p>' . $category->name . '</p> </div>';
					}
				?>
				</div>
			</div>
		<?php endwhile;
		else : ?>

	<?php endif; ?>
					
	<?php get_sidebar(); ?>
	</section>
</main>
<?php get_footer(); ?>