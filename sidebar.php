		<aside>
			<?php get_search_form(); ?>
			<h3>Categorias</h3>					
			<ul>
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
		</aside>