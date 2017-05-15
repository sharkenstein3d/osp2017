<?php get_template_part( 'header-inner' ); ?>

<div id="content">

	<div class="row align-center">

		<div class="small-12 medium-10 columns" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'single' ); ?>

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</div> <!-- end #main -->
		<div class="small-10 medium-7 columns">
			<?php comments_template(); ?>
		</div>
		<div id="sidebar1" class="small-10 large-6 columns">

			<?php get_sidebar(); ?>
		</div>


	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
