<?php get_header(); ?>

	<main role="main" class="section-blog">
		<!-- section -->
		<section class="grid-blog">
			<div class="item-blog">
			<h1><?php _e( 'Ultimos articulos', 'html5blank' ); ?></h1>

			</div>
		
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
