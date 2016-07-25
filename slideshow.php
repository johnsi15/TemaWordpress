        <section id="slides">
                            <!-- data-interval="false" pausar el carousel-->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <?php query_posts('category_name=portadas'); ?>
                        <?php $a = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php 
                            if($a == 0){
                              ?>
                                <li data-target="#carousel-example-generic" data-slide-to="$a" class="active"></li>
                              <?php
                               $a++;
                            }else{
                              ?>
                                <li data-target="#carousel-example-generic" data-slide-to="$a"></li>
                               <?php
                               $a++;
                            }
                          ?>
                            
                          <?php endwhile; else: ?>
                          <h1>No se encontraron articulos</h1>
                        <?php endif; ?>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <?php query_posts('category_name=portadas'); ?>
                        <?php $a = 0; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <?php 
                            if($a == 0){
                              $a++;
                              ?>
                                <div class="item active">
                                  <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large', array( 'class' => 'slider_thumbs' ) ); } ?></a>
                                  <div class="carousel-caption">
                                    <h1><?php //the_title();?></h1>
                                    <p><?php the_excerpt();?></p>
                                  </div>
                               </div>
                              <?php
                            }else{
                              ?>
                               <div class="item">
                                  <a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large', array( 'class' => 'slider_thumbs' ) ); } ?></a>
                                  <div class="carousel-caption">
                                    <h1><?php //the_title();?></h1>
                                    <p><?php the_excerpt();?></p>
                                  </div>
                               </div>
                               <?php
                            }
                          ?>
                        <?php endwhile; else: ?>
                          <h1>No se encontraron articulos</h1>
                        <?php endif; ?>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
            </section>

            <?php

              /*$args = array(
                  'show_option_all'    => '',
                  'show_option_none'   => '',
                  'option_none_value'  => '-1',
                  'orderby'            => 'ID', 
                  'order'              => 'ASC',
                  'show_count'         => 0,
                  'hide_empty'         => 1, 
                  'child_of'           => 0,
                  'exclude'            => '',
                  'include'            => '3,7',
                  'echo'               => 1,
                  'selected'           => 0,
                  'hierarchical'       => 0, 
                  'name'               => 'cat',
                  'id'                 => '',
                  'class'              => 'postform',
                  'depth'              => 0,
                  'tab_index'          => 0,
                  'taxonomy'           => 'category',
                  'hide_if_empty'      => false,
                  'value_field'      => 'term_id',  
                ); */

            ?>

           <!--  <section class="container buscador">
                <article class="row">
                    <div class="col-xs-12 hidden-sm hidden-md hidden-lg well">
                        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>" class="form-inline">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ej: Aveo" autofocus name="category" id="s" />
                            <input type="hidden" name="cat" value="<?php echo $id_categoria; ?>" />            
                            <br>
                            <?php wp_dropdown_categories($args); ?>
                          </div>
                            <button type="submit" class="btn btn-primary btn-md">Buscar</button>
                        </form>
                    </div>
                </article>
            </section> -->
