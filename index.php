<?php get_template_part( 'header-inner' ); ?>

	<div id="content">
		<div class="row align-center">
			<div class="small-12 medium-10 large-6 columns">

			<?php
		    if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive' ); ?>

			<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>
			</div>
			<div id="sidebar1" class="small-12 medium-10 large-3 columns">
				<div class="pagination">
					<?php joints_page_navi(); ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
