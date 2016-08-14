<?php get_header(); ?>

    
        <?php get_sidebar(); ?>

        <section class="container-fluid articulos">            
            <header class="container-fluid" style="padding: 0; margin-top: 70px;">
                <?php include (TEMPLATEPATH. '/slideshow.php'); ?>
            </header>
            <?php query_posts("paged=$paged");  ?> <!-- Este codigo se usa para la paginacion-->
            <?php $a = 0; if(have_posts()): query_posts($query_string .'&cat=-10'); while (have_posts()): the_post(); ?>
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
                        <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' , array( 'class' => 'img_thumbnail img-thumbnail' ) ); } ?>
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
            <iframe class="desktop" src="//rcm-eu.amazon-adsystem.com/e/cm?t=asesorvncucut-21&o=30&p=48&l=ur1&category=electronica&banner=1ZFFFVGD3JXYV7FSVA02&f=ifr" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;max-width:800px;max-height:600px;" frameborder="0"></iframe>
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
            <!-- <article class="row">
                <div class="col-sm-7  col-sm-offset-1 hidden-md hidden-lg widget well"> 
                      <div class="fb-page" data-height-cover="false" 
                      data-href="https://www.facebook.com/asesorvncucuta/"
                      data-width="380"  
                      data-hide-cover="false" 
                      data-show-facepile="true"
                      data-show-posts="false">
                      </div>
                </div>
            </article> -->
        </section>

<?php get_footer(); ?>