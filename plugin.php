<?php
/**
 *
 * Plugin Name: Forsite Media Toolbar
 * Plugin URI: https://project.forsite.media/
 * Description: This plugin will add a support link to the Toolbar.
 * Author: Remkus de Vries, forsitemedia
 * Version: 1.1.1
 * Author URI: https://forsite.media/
 * License: GPLv2
 *
*/

add_action( 'admin_bar_menu', 'fst_support_toolbar_menu', 995 );
/**
 * @desc Create and show toolbar support menu.
 *
 * @author Remkus de Vries
 * @since 1.0
 * @access public
 *
 */
function fst_support_toolbar_menu() {
	global $wp_admin_bar;

	$wp_admin_bar->add_menu( array(
		'id'		=> 'fst_support_toolbar',
		'title' 	=> __( 'Support' ),
		'href'  	=> 'http://project.forsite.media/',
		'meta'        => array( 'target' => '_blank' )
		)
	);
	$wp_admin_bar->add_menu( array(
		'parent'	=> 'fst_support_toolbar',
		'id' 		=> 'fst-support',
		'title' 	=> __( 'Support site' ),
		'href' 		=> 'http://project.forsite.media/',
		'meta' 		=> array( 'target' => '_blank' )
		)
	);
	$wp_admin_bar->add_menu( array(
		'parent' 	=> 'fst_support_toolbar',
		'id' 		=> 'fst-wp-support-forum',
		'title' 	=> __( 'NL WordPress forum' ),
		'href' 		=> 'http://nl.forums.wordpress.org/',
		'meta' 		=> array( 'target' => '_blank' )
		)
	);
}

add_action( 'wp_head', 'fst_genesis_toolbar_style' );
add_action( 'admin_head', 'fst_genesis_toolbar_style' );
/**
 * fst_genesis_toolbar_style function.
 *
 * @access public
 * @return void
 */
function fst_genesis_toolbar_style() {
	if ( ! is_admin_bar_showing() )
		return;

	?><style type="text/css">
	#wp-admin-bar-fst_support_toolbar a {
		color: #fff;
	}
	#wpadminbar #wp-admin-bar-fst_support_toolbar {
		background: #87e0fd; /* Old browsers */
		background: -moz-linear-gradient(top,  #87e0fd 0%, #53cbf1 40%, #05abe0 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#87e0fd), color-stop(40%,#53cbf1), color-stop(100%,#05abe0)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #87e0fd 0%,#53cbf1 40%,#05abe0 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #87e0fd 0%,#53cbf1 40%,#05abe0 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #87e0fd 0%,#53cbf1 40%,#05abe0 100%); /* IE10+ */
		background: linear-gradient(top,  #87e0fd 0%,#53cbf1 40%,#05abe0 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#87e0fd', endColorstr='#05abe0',GradientType=0 ); /* IE6-8 */
	}
	</style>
	<?php
}