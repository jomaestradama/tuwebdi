<?php get_header(); ?>
<div class="container-blog-single">
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
	<div class="sidebar-tag">
				<?php get_sidebar(); ?>
	</div>

</div>
<?php get_footer(); ?>
