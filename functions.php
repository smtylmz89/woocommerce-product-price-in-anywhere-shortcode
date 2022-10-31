add_shortcode( 'smt_product_price', 'smt_woo_product_price_shortcode' );
/**
 * Shortcode WooCommerce Product Price.
 *
 */
function smt_woo_product_price_shortcode( $atts ) {
	
	$atts = shortcode_atts( array(
		'id' => null
	), $atts, 'smt_product_price' );
 
	if ( empty( $atts[ 'id' ] ) ) {
		return '';
	}
 
	$product = wc_get_product( $atts['id'] );
 
	if ( ! $product ) {
		return '';
	}
 
	return $product->get_price_html();
}

