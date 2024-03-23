<?php 
/*

	Plugin Name: Amorebed Survey
	Plugin URI: 
	Description: Allows Amorebeds to conduct a mattress surveys.
	Author: Todd Summerville
	Version: 1.0.4
	Author URI: https://www.amorebeds.com/

*/

define( 'AMORESURVEY__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( AMORESURVEY__PLUGIN_DIR.'class.amoresurvey.php' );

function amore_survey_admin_page() {
	add_submenu_page( 'plugins.php', 'Amorebed Mattress Survey', 'Amorebed Survey', 'manage_options', 'amore-beds-survey', 'admin_amoresurvey');
}

if (is_admin()) {
	require_once(AMORESURVEY__PLUGIN_DIR.'class.admin.amoresurvey.php');
	add_action('admin_menu', 'amore_survey_admin_page');
	//add_action( 'init', 'admin_amoresurvey' );
}

function amore_survey_front_page() {
	add_links_page('amoresurvey','Amore Mattress Survey', 'manage_options', 'amore-survey','amoresurvey');
}
// add_shortcode('amoresurvey', 'amoresurvey') ;

if ( !isset( $_POST['user_data_s_r1'] ) ) {
	add_shortcode('amoresurvey', 'amoresurvey') ;
}
else{
	add_action( 'template_redirect', 'amoresurvey' );
}

function foot_include_amore(){

	//wp_register_script( 'amoresurvey-form', AMORESURVEY__PLUGIN_DIR . 'jquery.js', array(), 1.0, true ) ;
	wp_enqueue_script( 'jquery' ) ;
	wp_enqueue_script( 'amoresurvey-form',  plugins_url( basename( dirname( __FILE__ ) ) .'/assets/js/bedsurvey.js' , 'jquery' ) ) ;

}

if (!isset($_POST['user_data_s_r'])) {
	//add_action( 'wp_footer','foot_include_amore' );
}

add_action( 'wp_enqueue_scripts','foot_include_amore' );


function install_survey_plugin(){

	global $wpdb;

	$table_name = $wpdb->prefix.'survey';

	// next line will insert the data
	$query = "CREATE TABLE IF NOT EXISTS `$table_name` (`value` varchar(5) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;"  ;

	$wpdb->query($query);

}


add_action( 'init','install_survey_plugin');

