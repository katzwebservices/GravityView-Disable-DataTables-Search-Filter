<?php
/*
* Plugin Name:       	GravityView - Disable DataTables Search Filter
* Plugin URI:        	http://gravityview.co/extensions/datatables/
* Description:       	Disable the DataTables search filter input.
* Version:          	1.0
* Author:            	Katz Web Services, Inc.
* Author URI:        	http://www.katzwebservices.com
* License:           	GPLv2 or later
* License URI: 			http://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter( 'gravityview_datatables_js_options', 'disable_gravityview_datatables_search', 10, 3 );

/**
 * Disable the DataTables search filter
 * @param  [type] $dt_config [description]
 * @param  [type] $view_id   [description]
 * @param  [type] $post      [description]
 * @return [type]            [description]
 */
function disable_gravityview_datatables_search( $dt_config, $view_id, $post ) {

	$return_config = $dt_config;

	$return_config['searching'] = false;

	return $return_config;
}