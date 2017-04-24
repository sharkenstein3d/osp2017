		<article class="card" id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?> role="article">
		  <div class="card-divider">
		    <h4 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
				<?php get_template_part( 'parts/content', 'byline' ); ?>
		  </div>

				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium_large', array('class' => 'featured-image')); ?></a>



			  	<div class="card-section">
			    	<p class="blog-post"><?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?></p>
			  	</div>
			</article>
