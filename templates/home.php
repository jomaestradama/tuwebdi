<?php /* Template Name:Home Template */ get_header(); ?>
    
	<main role="main">
        <section class="slider">
            <div class="item-slider"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/compu.svg" alt=""> <h4>Crea un sitio web <span> para tu negocio</span></h4> </div>
                <div class="item-slider"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/seofocus.svg" alt=""> <h4>Optimización <span>SEO </span></h4></div>
                <div class="item-slider"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/asesoria-vector.svg" alt=""> <h4>Asesoria <span>profesional</span></h4></div>
                <div class="item-slider"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/disenografico.svg" alt=""> <h4>Diseño de logo <span>landings y Apps </span></h4></div>
        </section>
         <section id="webdi-body">
            <div class="webdi-container">
                    <div class="item level-1"><h2> Le damos una personalidad Digital a tu Negocio</h2></div>
                
                    <div class="item level-2">
                          
                                    <img src="https://picsum.photos/400/80" alt="The Pulpit Rock" >
                           
                    </div>
                    <div class="item level-3 title">
                        <h3>Portafolio</h3>

                    </div>
                    <div class="item level-3">
                            <img src="https://picsum.photos/400/200" alt="The Pulpit Rock" >
                    </div>
                    <div class="item level-3">
                            <img src="https://picsum.photos/400/200" alt="The Pulpit Rock" >
                    </div>
                    <div class="item level-4"> <img src="https://picsum.photos/400/300" alt="The Pulpit Rock" ></div>
                    <div class="item level-5"> <img src="https://picsum.photos/400/300" alt="The Pulpit Rock" ></div>
                    <div class="item level-5 last"></div>
                  
                    
            </div>
            
        </section>
		<!-- section -->
         <section id="mentory-body">
                <div class="title">
                       <img src="./img/lineswebdi.svg" alt="" width="100px"> <h2>   Mentoria Profesional</h2>
                </div>
                <div class="contents">
                    <div class="item"><img src="https://picsum.photos/200/400" alt="The Pulpit Rock" ></div>
                    <div class="item"><img src="https://picsum.photos/200/400" alt="The Pulpit Rock" ></div>
                    <div class="item"><div class="siluet" style="background-image: url(./img/peoplerefract.svg)"></div><span><i class="fa fa-info"></i></span></div>
                    
                </div> 
            
        </section>
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>