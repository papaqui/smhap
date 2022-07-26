<form role="search" method="get" class="search-box" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label>
		<span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
		<input type="search" class="search-box-input" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
	</label>
	<button type="submit" class="search-box-submit"><i class="fa fa-search search-target"></i></button>
</form>
