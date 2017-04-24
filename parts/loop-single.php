<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->

		<section class="entry-content-single" itemprop="articleBody">

			<?php the_content(); ?>

	</section> <!-- end article section -->

		<?php the_post_thumbnail('large'); ?>

</article> <!-- end article -->

	<hr class="blog-divider-single" />
