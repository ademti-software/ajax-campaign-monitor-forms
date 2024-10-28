<?php
/*
Plugin Name: Campaign Monitor Ajax Forms
Plugin URI: https://www.ademti-software.co.uk
Description: Ajax shortcodes and widgets to allow visitors to sign up to Campaign Monitor (http://www.campaignmonitor.com) lists
Author: Ademti Software
Version: 1.5.0
Author URI: https://www.ademti-software.co.uk
License: GPLv3
Text Domain: cm_ajax
Domain Path: /languages
*/

/**
 * Copyright (c) 2011-2015 Lee Willis. All rights reserved.
 * Copyright (c) 2015-2024 Ademti Software. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

if ( ! class_exists ( 'CS_REST_Subscribers' ) )
	require_once ( 'createsend-php/csrest_subscribers.php' );

if ( ! class_exists ( 'CS_REST_Lists' ) )
	require_once ( 'createsend-php/csrest_lists.php' );

require_once ( 'cm-ajax-widget.php' );
require_once ( 'cm-ajax-shortcode.php' );

function cm_ajax_init(){
	load_plugin_textdomain('cm_ajax', false, plugin_basename(dirname(__FILE__).'/languages'));
}
add_action('init', 'cm_ajax_init');
