	<aside class="col-md-4 blog-sidebar">
		<div class="p-4 mb-3 bg-light rounded">
			<?php get_search_form(); ?>
		</div>

		<div class="p-4">
        	<h3>Categorias</h3>	
        	<ul class="list-unstyled mb-0">
			    <?php
			    wp_list_categories( 
			     	array(
				        'show_count'		=> false,
				        'title_li' 			=> '',
				        'hierarchical'		=> true,
		    		) 
		    	);
		    	?>
	    	</ul> 
      	</div>

      	<div class="p-4">
        	<h3>Tags</h3>
	        <?php 
				$tags = get_tags();
				$html = '<div class="tags">';
					foreach ( $tags as $tag ) {
					    $tag_link = get_tag_link( $tag->term_id );			             
					    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='tag'>";
					    $html .= "{$tag->name}</a>";
					}
				$html .= '</div>';
				echo $html;
			?>
      	</div>
    </aside>