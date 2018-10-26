<?php get_header(); ?>
	<div class="titulo-blog-loop">	
		<h1><?php _e( 'Ultimos articulos', 'html5blank' ); ?></h1>
	</div>
	<main role="main" class="section-blog">
		<!-- section -->
	
		<section class="grid-blog">
			
		

		
		
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
