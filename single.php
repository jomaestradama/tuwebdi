<?php get_header(); ?>
	<div class="container-blog-single">

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" class="imagen-blog" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" class="titulo-blog" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('d - F - Y'); ?> </span>
			<span class="author"><?php _e( 'Autor: ', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			
			<!-- /post details -->
		
			<div class="contenido-post">

			<?php the_content(); // Dynamic Content ?>
			
			
			

			</div>
			<br>
			<?php the_tags( __( 'Etiquetas: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			<div class="categoria-tag">

			
			<p><?php _e( 'Categoria: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			</div>
			

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
	<div class="sidebar-tag">
				<?php get_sidebar(); ?>
	</div>
	</div>

<?php get_footer(); ?>
