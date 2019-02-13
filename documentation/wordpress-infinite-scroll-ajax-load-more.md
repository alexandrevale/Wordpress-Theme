# WordPress Infinite Scroll – Ajax Load More

## Referências
* [GitHub - WordPress infinite scroll with Ajax Load More](https://github.com/dcooney/wordpress-ajax-load-more)
* [WordPress Plugin Page](https://wordpress.org/plugins/ajax-load-more/)
* [Shortcode Parameters](https://connekthq.com/plugins/ajax-load-more/docs/shortcode-parameters/)

## Aplicações

### Repeater Template
```
<div class="post">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<?php if ( has_post_thumbnail( $post->ID ) ): ?>
				<?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?>
			<?php else: ?>
				<img src="<?php bloginfo('template_url') ?>/imgs/blog-img-default.jpg" alt="Imagem do Post" class="img-responsive">
			<?php endif; ?>  
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<p class="post__dia-mes" style="margin-top: 0"> 
				<?php the_time('d'); ?> de <?php the_time('F'); ?> 
			</p>
			<h3 class="post__titulo"> <?php the_title(); ?> </h3>
			<button class="btn btn--post">Leia Mais</button>
		</div>
	</a>
</div>
```

### index.php
```
<?php 

echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="6" progress_bar_color="#245e6" transition="fade"]');

?>
```

### category.php
```
<?php 
					
$cat = get_query_var('cat');
$category = get_category ($cat);
echo do_shortcode('[ajax_load_more post_type="post" category="'.$category->slug.'" repeater="default" posts_per_page="4" transition="fade" button_label="Carregar Mais"]');

?>
```