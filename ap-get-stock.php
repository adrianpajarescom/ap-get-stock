<?php

/**
 * Plugin Name:       adrianpajares.com - Get Stock
 * Plugin URI:        https://adrianpajares.com/
 * Description:       Plugin to get the product stock. Shotcode: [ap_get_stock]
 * Version:           1.0
 * Author:            adrianpajares.com
 * License:           MIT
 */

function shortcode_ap_get_stock() {
    
    global $product; 
    $stock  = $product->get_stock_quantity();

    return $stock;
}
add_shortcode('ap_get_stock', 'shortcode_ap_get_stock');