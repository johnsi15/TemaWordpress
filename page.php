<?php get_header(); ?>
	<section class="imagen_encabezado">
		<?php if(have_posts()): while (have_posts()): the_post(); ?>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?>
		<?php endwhile; else: ?>
			<h1>No hay articulos.</h1>
		<?php endif; ?>
	</section>
	<section class="container" style="margin-top: 50px">
		<article class="articulos_principales">
			<article class="row">
				<div class="col-md-8">
				<?php if(have_posts()): the_post(); ?>
						<div id="contacto">
							<h1><?php the_title();?></h1>
							<hr>
							<p><?php the_content();?></p>
						</div>
				<?php else:?>
					<h1>No hay articulos.</h1>
				<?php endif?>
					<!-- <section class="mas_articulos">
						<h2>Mas Articulos</h2>
					</section> -->
					<?php //get_sidebar(); ?> <!-- Mas Articulos para ver-->
				</div>
			</article>
		</article>
	</section>



<?php get_footer(); ?>