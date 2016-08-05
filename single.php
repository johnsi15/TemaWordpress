<?php get_header(); ?>
	<style>.media-portada{max-width: 100%; height: auto;}</style>	
	<section class="container articulo">
		<section class="row">
			<div class="col-md-8">
			<?php if(have_posts()): the_post(); ?>
					<!-- <div class="mini-portada">
						<a href="<?php the_permalink();?>">
						</a>
					</div> -->
					<div class="articulo art">
						<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
						<div><strong class="fecha"><?php print get_the_date();?> - <span class="categorias"><?php the_category();?></span></strong></div>
						<!-- <hr> -->
					<div>
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' , array( 'class' => 'media-portada' ) ); } ?>
                    </div>
					<section class="botones_facebook">
						<h2>Sígueme</h2>
						<div class="fb-like" data-href="https://www.facebook.com/asesorvncucuta/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
						<div class="fb-send" data-href="https://www.facebook.com/asesorvncucuta/"></div>
					</section>
						<p><?php the_content();?></p>
					</div>
					<hr>
				<section class="comentarios">
					<div class="fb-comments" 
							data-href="<?php the_permalink(); ?>" 
							data-mobile="1"  data-numposts="5">
					</div> 
				</section>
			<?php else:?>
				<h1>No hay Vehículos.</h1>
			<?php endif?>
			
			</div>

			<section class="col-md-4 der single">
				<div class="articulo art">
					<?php query_posts('showposts=2&cat=-10&order=ASC');	?>
					<?php if(have_posts()): while (have_posts()): the_post(); ?>
						<article class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
			                    <div class="mini-portada">
			                        <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
			                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' , array( 'class' => 'img_thumbnail img-thumbnail' ) ); } ?>
			                        </a>
			                    </div>
			                    <div class="articulo">
			                        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			                        <p><?php //the_excerpt();?></p>
			                        <div class="espacio_articulo"><strong class="fecha"><?php print get_the_date();?> - <span class="categorias"><?php the_category();?></span></strong></div>
			                    </div>
			                </div>
						</article>								
					<?php endwhile; else: ?>
						<h1>No hay articulos.</h1>
					<?php endif; ?>
					<article class="row">
						<div class="col-md-12">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Anuncios_1 -->
							<ins class="adsbygoogle"
							     style="display:block"
							     data-ad-client="ca-pub-3083367533294626"
							     data-ad-slot="9717777394"
							     data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					</article>
				</div>
			</section>
		</section>

		<section class="row">
			<hr>
			<section class="container-fluid">
				<section style="margin-bottom: 30px">
					<h2 style="margin-top: 0">Mas Publicaciónes</h2>
				</section>
				<article class="row articulos_principales">
					<?php query_posts('showposts=2&cat=-10');	?>
					<?php if(have_posts()): while (have_posts()): the_post(); ?>
							<div class="col-xs-12 col-sm-6 col-md-4">
			                    <div class="mini-portada">
			                        <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
			                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' , array( 'class' => 'img_thumbnail img-thumbnail' ) ); } ?>
			                        </a>
			                    </div>
			                    <div class="articulo">
			                        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
			                        <p><?php the_excerpt();?></p>
			                        <div class="espacio_articulo"><strong class="fecha"><?php print get_the_date();?> - <span class="categorias"><?php the_category();?></span></strong></div>
			                    </div>
			                </div>								
					<?php endwhile; else: ?>
						<h1>No hay Vehículos.</h1>
					<?php endif; ?>
				</article>
			</section>
		</section>
	</section><!--Fin container-->

<?php get_footer(); ?>