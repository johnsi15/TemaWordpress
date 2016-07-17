<form role="search" method="get" id="searchform" class="navbar-form navbar-left" action="<?php echo home_url( '/' ); ?>">

	<div class="form-group col-6-md">
		<input type="search" class="form-control search-field" placeholder="Ej: Kia picanto" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</div>
	<select class="form-control" name="category_name">
        <option value="nuevos">Nuevos</option>
        <option value="usados">Usados</option>
    </select>
	<input type="submit" class="btn btn-default search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

<!-- 
<form method="get" id="searchform" action="<?php //bloginfo('home'); ?>" class="navbar-form navbar-left" role="search">
                 <div class="form-group col-6-md">
                 <input type="text" class="form-control" placeholder="Ej: Aveo" autofocus name="/" id="s" />
                 <input type="hidden" name="cat" value="<?php //echo get_query_var('cat'); ?>" />            
                 <?php wp_dropdown_categories($args); ?>
                 </div>
               <button type="submit" class="btn btn-default">Buscar</button>
             </form> -->