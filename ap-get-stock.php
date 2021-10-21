<?php

/**
 * Plugin Name:       adrianpajares.com
 * Plugin URI:        https://github.com/adrianpajarescom/ap-get-stock
 * Description:       Plugin to get the product stock.
 * Version:           1.0
 * Author:            adrianpajares.com
 * License:           MIT
 * Domain Path:       /languages
 * Text Domain:       ap-get-stock
 * GitHub Plugin URI: https://github.com/adrianpajarescom/ap-get-stock
 * GitHub Languages:  https://github.com/adrianpajarescom/ap-get-stock
 */



function shortcode_ap_get_stock() {
return '<p>¡Gracias por leer mi blog!</p>';
}
add_shortcode('ap_get_stock', 'shortcode_ap_get_stock');
