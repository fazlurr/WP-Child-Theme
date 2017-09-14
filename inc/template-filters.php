<?php

// Change Add to Cart Text
add_filter( 'woocommerce_product_add_to_cart_text', 'aegis_custom_cart_button_text' );
add_filter( 'woocommerce_product_single_add_to_cart_text', 'aegis_custom_cart_button_text' );

function aegis_custom_cart_button_text() {
	return __( 'Add to cart', 'woocommerce' );
}

?>