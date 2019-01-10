<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
			<p class="comment-form-author">  
				<label for="author"></label>
				<input id="author" name="author" type="text" value="" size="30" aria-required="true" placeholder="Seu nome">
			</p>
			<p class="comment-form-email">
				<label for="email"></label>
				<input id="email" name="email" type="email" value="" size="30" aria-required="true" placeholder="Seu e-mail">
			</p>
			<p class="comment-form-comment"> 
				<label for="comment"></label>  
				<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Seu comentário"></textarea>
			</p>
			<p class="form-submit">
				<input name="submit" type="submit" id="submit" value="Enviar">
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				<?php do_action('comment_form', $post->ID); ?>
			</p>
		</form>
	<?php if ( have_comments() ) : ?>
		
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
	<?php endif; ?>

	<?php
		//comment_form( );
	?>


</div><!-- .comments-area -->
