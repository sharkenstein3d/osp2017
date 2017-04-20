<?php
/*
Template Name: Blog
*/
?>
<?php get_template_part( 'header-inner' ); ?>

	<div id="content">
		<h1 class="header-text-extra-space">The Motherfucking Haps</h1>

		<div id="inner-content" class="row" data-equalizer>
			<?php
				global $query_string;
			  query_posts ('posts_per_page=4');
		    if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive' ); ?>

			<?php endwhile; ?>

				<?php joints_page_navi(); ?>

			<?php else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>


			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
