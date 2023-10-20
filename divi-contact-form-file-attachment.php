<?php
/*
Plugin Name: Divi Contact Form File Attachment
Plugin URI:  https://tech.ronizongor.com
Description: Adds file attachment functionality to Divi Contact Form module
Version:     1.0.0
Author:      I. Finta @ Roni Zongor & Co / TECH
Author URI:  https://tech.ronizongor.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dbrz-divi-contact-form-file-attachment
Domain Path: /languages

Divi Contact Form File Attachment is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Contact Form File Attachment is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Contact Form File Attachment. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'dbrz_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function dbrz_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviContactFormFileAttachment.php';
}
add_action( 'divi_extensions_init', 'dbrz_initialize_extension' );
endif;
