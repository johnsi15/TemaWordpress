<?php get_header(); ?>
	<!--<?php get_sidebar(); ?>-->
	<section class="container categorias_espacio" style="margin-top: 80px;">
		<article class="row">
			<div class="col-sm-12 col-md-8">
				<?php $categoria = single_cat_title("", false); ?>
				<h2>Filtrado por - <?php single_cat_title( $prefix = '', $display = true ); ?></h2>
				<div ><span class="categorias"><?php the_category(' | ', TRUE);?></span></div>
				<hr>
				<div class="lista_categorias well filtros">
					<h2>Filtrar</h2>
					<?php
			            $args = array (
			                'hide_empty' => 0,
			                'title_li' => false,
			                'style' => 'list',
			                'show_count' => false,
			                'hierarchical' => true,
			                'separator' => ' | ',
			                'exclude' => '10,1',
			                'taxonomy' => 'category',
			                'depth' => '0',			                
			                'child_of' => 3
			            );

			            $args2 = array (
			                'hide_empty' => 0,
			                'title_li' => false,
			                'style' => 'list',
			                'show_count' => false,
			                'hierarchical' => true,
			                'separator' => ' | ',
			                'exclude' => '10,1',
			                'taxonomy' => 'category',
			                'depth' => '0',			                
			                'child_of' => 7
			            );
			            ?><article class="row"><h4>Nuevos:</h4><ul class="lista_catego"><?php wp_list_categories($args); ?></ul></article>
			            <article class="row"><h4>Usados:</h4><ul class="lista_catego"><?php wp_list_categories($args2); ?></ul></article> 
			    </div>
				<section class="row">
			<article class="col-sm-12 col-md-12 articulos_archive">
			<h2 id="categori"><?php single_cat_title( $prefix = '', $display = true ); ?></h2>
				<?php $a = 0; if(have_posts()): while (have_posts()): the_post(); ?>
					
					<?php 
						$a++;
						if($a==1){
					?>
							<article class="row">
						<?php
						}
						   	
						?>
						<div class="col-xs-12 col-sm-6 col-md-6">
		                    <div class="mini-portada">
		                        <a href="<?php the_permalink();?>">
		                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' , array( 'class' => 'img_thumbnail img-thumbnail' ) ); } ?>
		                        </a>
		                    </div>
		                    <div class="articulo">
		                        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
		                        <p><?php the_excerpt();?></p>
		                        <div class="espacio_articulo"><strong class="fecha"><?php print get_the_date();?> - <span class="categorias"><?php the_category();?></span></strong></div>
		                    </div>
		                </div>
		                <?php 
							if($a>=2){ 
								?>
								</article>
							<?php
								$a = 0;
							}
						?>
				<?php endwhile; else: ?>
					<h1>No hay articulos.</h1>
				<?php endif; ?>
			</article>
		</section>
			</div>
			<section class="col-md-4 der archive">
				<div class="articulo">
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
					<?php wp_reset_query(); //reseteamos las entradas?>
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
			</section><!-- Fin der-->
			
		</article>

		
	</section>	<!--Fin container-->

	<section class="paginacion">
		<nav>
		  <ul class="pager">		  	
		    <li class="previous"><?php previous_posts_link('<span aria-hidden="true">&larr;</span> Anteriores') ?></li>
		    <li class="next"><?php next_posts_link('Siguientes <span aria-hidden="true">&rarr;</span>')?> </li>
		  </ul>
		</nav>
	</section>
<!--<?php get_sidebar(); ?>-->


<?php get_footer(); ?>