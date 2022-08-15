<?php
/**
 * Plugin Name: Gravity Editor Access
 * Plugin URI: https://blennd.com/plugins/gravity-editor-access/
 * Description: Give editor users access to Gravity Forms.
 * Author: Blennd
 * Author URI: https://blennd.com/
 * Version: 1.0.0
 *
 * @package   Gravity Editor Access
 * @author    Blennd <https://blennd.com>
 * @link      https://blennd.com/plugins/gravity-editor-access/
 * @copyright 2022 Blennd
 * @license   GPL v3 or later
 * @version   1.0.0
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

declare( strict_types = 1 );
namespace blenndiris\gravity_editor_access;

define( 'GRAVITY_EDITOR_ACCESS', __DIR__ );


function activation_hook() {
	$role = get_role( 'editor' );
	$role->add_cap( 'gform_full_access' );
}
register_activation_hook( __FILE__,  __NAMESPACE__ . '\\activation_hook' );


function deactivation_hook() {
	$role = get_role( 'editor' );
	$role->remove_cap( 'gform_full_access' );
}
register_deactivation_hook( __FILE__, __NAMESPACE__ . '\\deactivation_hook' );
