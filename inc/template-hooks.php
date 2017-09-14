<?php
/**
 * Aegis hooks
 *
 * @package aegis
 */

/**
 * Posts
 *
 * @see  aegis_post_image()
 * @see  aegis_post_content()
 * @see  aegis_post_header()
 */
// add_action( 'aegis_loop_post', 'aegis_post_image', 10 );
add_action( 'aegis_loop_post', 'aegis_post_header', 20 );
add_action( 'aegis_loop_post', 'aegis_post_content', 30 );
add_action( 'aegis_loop_post', 'aegis_post_date', 40 );

add_action( 'aegis_single_post', 'aegis_post_image', 10 );
add_action( 'aegis_single_post', 'aegis_post_header', 20 );
add_action( 'aegis_single_post', 'aegis_post_content', 30 );

add_action( 'aegis_header', 'storefront_primary_navigation_wrapper',		20 );
add_action( 'aegis_header', 'storefront_site_branding',						40 );
add_action( 'aegis_header', 'storefront_primary_navigation',				50 );
add_action( 'aegis_header', 'aegis_menu_right',								60 );
add_action( 'aegis_header', 'storefront_header_cart',						70 );
add_action( 'aegis_header', 'storefront_primary_navigation_wrapper_close',	80 );
// add_action( 'storefront_header', 'aegis_switch_languages', 41 );

/**
 * Confirmation
 *
 * @see aegis_confirmation_notification()
 */
add_action( 'woocommerce_order_details_after_order_table', 'aegis_confirmation_notification', 10 );

/**
 * Order Email - Confirmation
 *
 * @see aegis_confirmation_notification_email()
 */
add_action( 'woocommerce_email_after_order_table', 'aegis_confirmation_notification_email', 10 );

/**
 * Payment Confirmation Form
 *
 * @see aegis_confirmation_form()
 */
add_action( 'aegis_page_confirmation', 'aegis_confirmation_form', 10 );

/**
 * Re-arrange single product summary 
 **/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
