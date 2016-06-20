<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo(' name'); wp_title('|',true,RIGHT); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/main.css">
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
        <link href='https://fonts.googleapis.com/css?family=Passion+One|Roboto:400,700,500,900' rel='stylesheet' type='text/css'>

        <script src="<?php bloginfo('template_url')?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
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
              <a class="navbar-brand" href="/"><?php bloginfo('name');?></a>
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

                $args = array(
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
                ); 

             ?>
              <form method="get" id="searchform" action="<?php bloginfo('home'); ?>" class="navbar-form navbar-left" role="search">
                  <div class="form-group col-6-md">
                  <input type="text" class="form-control" placeholder="Ej: Aveo" autofocus name="category" id="s" />
                  <input type="hidden" name="cat" value="<?php echo $id_categoria; ?>" />            
                  <?php wp_dropdown_categories($args); ?>
                  </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>