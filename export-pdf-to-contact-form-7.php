<?php 
/**
 * Plugin Name: Export PDF to Contact Form 7 [beta]
 * Plugin URI: http://arnaim.me/plugins/export-pdf-to-contact-form-7
 * Description: This plugin will export contact form 7 result as PDF.
 * Version: 1.0.0
 * Author: A R Naim
 * Author URI: http://arnaim.me
 * License: GPL2
 */

// Define 'PLUGIN_ROOT'
define( 'PLUGIN_ROOT', dirname( dirname(__FILE__) ) . '/export-pdf-to-contact-form-7');
define( 'FPDF', PLUGIN_ROOT . '/FPDF');

// Load customized hooks
require_once( PLUGIN_ROOT . '/hooks.php');


/**
 * Admin enqueue
 */
function expdf_enqueue_admin_styles() {
	wp_register_style (  'fpdf', FPDF . '/fpdf.css', false, '1.0.0' ); 
}
add_action( 'admin_enqueue_scripts', 'expdf_enqueue_admin_styles');
