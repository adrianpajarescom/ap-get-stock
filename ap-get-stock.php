<?php

/**
 * Plugin Name:       adrianpajares.com - Get Stock
 * Plugin URI:        https://github.com/adrianpajarescom/ap-get-stock
 * Description:       Plugin to get the product stock. Shotcode: [ap_get_stock]
 * Version:           1.0
 * Author:            adrianpajares.com
 * License:           MIT
 * Domain Path:       /languages
 * Text Domain:       ap-get-stock
 */



function shortcode_ap_get_stock() {
    
    global $product; 
    $stock  = $product->get_stock_quantity();
    $id = get_the_ID();

    return $stock;
}
add_shortcode('ap_get_stock', 'shortcode_ap_get_stock');