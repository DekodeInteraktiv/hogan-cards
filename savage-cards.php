<?php
/**
 * Plugin Name: Savage: Cards
 * Plugin URI: https://github.com/dekodeinteraktiv/savage-cards
 * Description: Card setup plugin
 * Version: 0.1-dev
 * Author: Dekode
 * Author URI: https://dekode.no
 * License: GPL-3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * Text Domain: savage-cards
 * Domain Path: /languages/
 *
 * @package Savage
 * @author Dekode
 */

namespace Dekode\Savage\Cards;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'plugins_loaded', __NAMESPACE__ . '\\savage_load_textdomain' );

/**
 * Register module text domain
 */
function savage_load_textdomain() {
	\load_plugin_textdomain( 'savage-cards', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

//require_once 'includes/class-card.php';
//require_once 'includes/class-custom-card.php';
require_once 'includes/savage-custom-card.php';
