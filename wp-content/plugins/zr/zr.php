<?php

/**
 * @wordpress-plugin
 * Plugin Name:       ZR - Blocks and Patterns
 * Plugin URI:        https://zacharyrener.com
 * Version:           1.0.0
 * Author:            Zach Rener
 * Author URI:        https://zacharyrener.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       zr
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

register_block_type( __DIR__ . '/build/header' );
register_block_type( __DIR__ . '/build/post-grid' );