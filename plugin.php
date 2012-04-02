<?php

/**
 *
 * Plugin Name: SupportStation Toolbar 
 * Plugin URI: http://remkusdevries.com/plugins/genesis-translations/
 * Description: This plugin will add a support link to the Toolbar.
 * Author: Remkus de Vries
 * Version: 1.0
 * Author URI: http://remkusdevries.com/
 * License: GPLv2
 * Text Domain: genesis-translations
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
		'href'  	=> 'http://supportstation.org/', 
		)
	);
	$wp_admin_bar->add_menu( array( 
		'parent'	=> 'fst_support_toolbar', 
		'id' 		=> 'fst-support', 
		'title' 	=> __( 'Support site' ), 
		'href' 		=> 'http://supportstation.org/', 
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
		background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzg3ZTBmZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQwJSIgc3RvcC1jb2xvcj0iIzUzY2JmMSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwNWFiZTAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
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