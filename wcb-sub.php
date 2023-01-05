<?php

/**
 * Plugin Name:       wcb-sub
 * Description:       only use to customize for site https://woostifyblocks.com/
 * Requires at least: 5.8
 * Requires PHP:      7.3
 * Version:           0.1.0
 * Author:            woostify-conversion-blocks
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wcbs
 *
 * @package           create-block
 */

//  WCB as Woostify-Conversion-Blocks ...
defined('ABSPATH') || exit;

// Define Constants.
define('WCBS_VERSION', '0.1.0');

require plugin_dir_path(__FILE__) . 'inc/wcbs-custom-wpgraphql.php';
