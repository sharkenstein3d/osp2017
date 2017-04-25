		<article class="card" id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?> role="article">
		  <div class="card-divider">
		    <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
				<?php get_template_part( 'parts/content', 'byline' ); ?>
		  </div>

				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-image', array('class' => 'featured-image')); ?></a>

			<div class="card-section">
		    	<p class="blog-post"><?php the_excerpt('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?></p>
		  	</div>
		</article>
