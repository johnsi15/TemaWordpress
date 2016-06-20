<?php get_header(); ?>

    <header>
		<?php include (TEMPLATEPATH. '/slideshow.php'); ?>
	</header>
        <?php get_sidebar(); ?>

        <section class="container-fluid articulos">            
            <?php query_posts("paged=$paged");  ?> <!-- Este codigo se usa para la paginacion-->
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
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'img_thumbnail img-thumbnail' ); } ?>
                        </a>
                    </div>
                    <div class="articulo">
                        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                        <p><?php the_excerpt();?></p>
                        <div class="espacio_articulo"><strong class="fecha"><?php print get_the_date();?> - <span class="categorias"><?php the_category(', ');?></span></strong></div>
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
        </section>

        <section class="paginacion">
            <nav>
              <ul class="pager">            
                <li class="previous"><?php previous_posts_link('<span aria-hidden="true">&larr;</span> Anteriores') ?></li>
                <li class="next"><?php next_posts_link('Siguientes <span aria-hidden="true">&rarr;</span>')?> </li>
              </ul>
            </nav>
        </section>
      <section class="container widgets">
            <article class="row">
                <div class="col-sm-4   hidden-md hidden-lg widget well">                    
                    <script src="http://www.dolar-colombia.com/widget.js?t=3"></script>
                </div>
                <div class="col-sm-7  col-sm-offset-1 hidden-md hidden-lg widget well"> 
                      <div class="fb-page" data-height-cover="false" 
                      data-href="https://www.facebook.com/asesorvncucuta/"
                      data-width="380"  
                      data-hide-cover="false" 
                      data-show-facepile="true"
                      data-show-posts="false">
                      </div>
                </div>
            </article>
        </section>

<?php get_footer(); ?>