<?php
/**
 * Plugin Name: WC Add Payment Type to Admin Email
 * Plugin URI: https://github.com/GaganTiwari/WC-Add-Payment-Type-to-Admin-Email
 * Description: Add Payment Type to Admin Email in WooCommerce 
 * Version: 1.0.0
 * Author: Gagan Tiwari
 * Author URI: http://www.gagantiwari.info
 * License: GPL
 */
 
add_action( 'woocommerce_email_after_order_table', 'add_payment_method_to_admin_new_order', 15, 2 );
 
function add_payment_method_to_admin_new_order( $order, $is_admin_email ) {
  if ( $is_admin_email ) {
    echo '<p><strong>Payment Method:</strong> ' . $order->payment_method_title . '</p>';
  }
}
?>
