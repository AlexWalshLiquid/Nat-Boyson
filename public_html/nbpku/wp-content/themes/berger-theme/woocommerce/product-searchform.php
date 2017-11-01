<?php $default_search = __("Search and type enter...", THEME_LANGUAGE_DOMAIN);  ?>
<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div id="search-margin">
    	<input type="text" value="<?php $search = get_search_query(); if( $search ) echo $search; else echo $default_search; ?>" onblur="if(this.value == '') { this.value = '<?php echo $default_search; ?>'; }" onfocus="if(this.value == '<?php echo $default_search; ?>') { this.value = ''; }" size="30" id="search-shop" name="s">
    </div>
	<input type="hidden" name="post_type" value="product" />
</form>
