<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <?php if(is_single() || is_page()) { ?>
          <title><?php bloginfo(' name'); wp_title('|',true,RIGHT); ?></title>
          <meta name="description" content="<?php 
            while(have_posts()):the_post();
            $out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt());
            echo apply_filters('the_excerpt_rss', $out_excerpt);
            endwhile;   ?>">
        <?php  } else { ?>
          <title><?php bloginfo(' name'); wp_title('|',true,RIGHT); ?></title>
          <meta name="description" content="Asesorar en la Venta de vehiculos Nuevos y Usados todas las marcas, Financiamiento por medio de Banco servicio responsable agil honestidad.">
        <?php  }  ?>
        <meta name="author" content="Alvaro Serrano">
        <meta name="generator" content="Wordpress">
        <meta name="robots" content="index, follow">
        <!-- <meta name="robots" content="NoIndex, follow"> -->
        <!-- Inicio compartir en FB  -->
        <?php
          $thumb = get_post_meta($post->ID,'_thumbnail_id',false);
          $thumb = wp_get_attachment_image_src($thumb[0], false);
          $thumb = $thumb[0];
          $default_img = get_bloginfo('stylesheet_directory').'/img/asesorvncucuta.png';
         
          ?>         
        <?php if(is_single() || is_page()) { ?>
          <meta property="og:type" content="article" />
          <meta property="og:title" content="<?php single_post_title(''); ?>" />
          <meta property="og:description" content="<?php 
          while(have_posts()):the_post();
          $out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt());
          echo apply_filters('the_excerpt_rss', $out_excerpt);
          endwhile;   ?>" />
          <meta property="og:url" content="<?php the_permalink(); ?>"/>
          <meta property="og:image" content="<?php if ( $thumb[0] != null ) { echo $thumb; } ?>" />
        <?php  } else { ?>
          <meta property="og:type" content="article" />
           <meta property="og:title" content="<?php bloginfo('name'); ?>" />
          <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
          <meta property="og:description" content="<?php bloginfo('description'); ?>" />
          <meta property="og:image" content="<?php  if ( $thumb[0] !== null ) { echo $default_img;  } ?>" />
        <?php  }  ?>
        <!-- Fin compartir en FB -->
        <!-- Compartir Twitter -->
        <?php if(is_single() || is_page()) { ?>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@asesorvncucuta"/>
        <meta name="twitter:creator" content="@Jandrey15"/>
        <meta name="twitter:title" content="<?php single_post_title(''); ?>">
        <meta name="twitter:description" content="<?php 
          while(have_posts()):the_post();
          $out_excerpt = str_replace(array("\r\n", "\r", "\n"), "", get_the_excerpt());
          echo apply_filters('the_excerpt_rss', $out_excerpt);
          endwhile;   ?>"/>
        <meta name="twitter:image:src" content="<?php if ( $thumb[0] !== null ) { echo $thumb; } ?>">
        <?php  } else { ?>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@asesorvncucuta"/>
        <meta name="twitter:creator" content="@Jandrey15"/>
        <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
        <meta name="twitter:description"content="<?php bloginfo('description'); ?>" />
        <meta name="twitter:image:src" content="<?php  if ( $thumb[0] !== null ) { echo $default_img; } ?>" />
        <?php  }  ?>
        <!-- Fin compartir Twitter -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url')?>/img/icono/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/icono/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/icono/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php bloginfo('template_url')?>/img/icono/manifest.json">
        <link rel="mask-icon" href="<?php bloginfo('template_url')?>/img/icono/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/main.min.css">
        <!-- <link rel="stylesheet" href="<?php //bloginfo('template_url')?>/css/main.css"> -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
<!-- <link href='https://fonts.googleapis.com/css?family=Passion+One|Roboto:400,700,500,900' rel='stylesheet' type='text/css'>
 -->    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="/"><img src="<?php bloginfo('template_url')?>/img/logo.png" width="180"><?php //bloginfo('name');?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <?php
              /* con esto le creamos una clase al nuevo sub-menu*/
                class My_Walker_Nav_Menu extends Walker_Nav_Menu {
                function start_lvl(&$output, $depth) {
                  $indent = str_repeat("\t", $depth);
                  $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
                }
              }
            /*Aqui creamos el menu*/
                     wp_nav_menu(
               array(
               'container' => false,
               'items_wrap' => '<ul class="nav navbar-nav app_menu">%3$s</ul>',
               'theme_location' => 'menu',
               'walker' => new My_Walker_Nav_Menu()
               )); 

                // $args = array(
                //   'show_option_all'    => '',
                //   'show_option_none'   => '',
                //   'option_none_value'  => '-1',
                //   'orderby'            => 'ID', 
                //   'order'              => 'ASC',
                //   'show_count'         => 0,
                //   'hide_empty'         => 1, 
                //   'child_of'           => 0,
                //   'exclude'            => '',
                //   'include'            => '3,7',
                //   'echo'               => 1,
                //   'selected'           => 0,
                //   'hierarchical'       => 0, 
                //   'name'               => 'cat',
                //   'id'                 => '',
                //   'class'              => 'postform',
                //   'depth'              => 0,
                //   'tab_index'          => 0,
                //   'taxonomy'           => 'category',
                //   'hide_if_empty'      => false,
                //   'value_field'      => 'term_id',  
                // ); 
             ?>
             <?php get_search_form(); ?>
             <!--  <form method="get" id="searchform" action="<?php //bloginfo('home'); ?>" class="navbar-form navbar-left" role="search">
                 <div class="form-group col-6-md">
                 <input type="text" class="form-control" placeholder="Ej: Aveo" autofocus name="/" id="s" />
                 <input type="hidden" name="cat" value="<?php //echo get_query_var('cat'); ?>" />            
                 <?php wp_dropdown_categories($args); ?>
                 </div>
               <button type="submit" class="btn btn-default">Buscar</button>
             </form> -->
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>