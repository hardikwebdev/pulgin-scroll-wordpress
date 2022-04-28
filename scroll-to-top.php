<?php
defined('ABSPATH') or die('No scripts for you');
/*
  Plugin Name: plugin scroll worpdress
  Plugin URI:  http://aipxperts.com
  Description: Plugin applies a back to top element that links back to the previous value
  Version:     1.0.0
  Author:      Aipxperts Themes
  Author URI:  http://aipxperts.com
  Domain Path: /languages
  Text Domain: plugin-scroll-demo
 */

/**
* Plugin Class
*/
if (!class_exists('plu_SCROLL_tt')) {
	class plu_SCROLL_tt
		{
			function __construct()
				{
		            $this->define_constants();
		            $this->includes();
		            
				}

			public function define_constants()
				{
					global $wpdb;
					$this->define('plug_stt_dir_url', plugin_dir_url( __FILE__ ));
					$this->define('plug_stt_dir_path', plugin_dir_path( __FILE__ ));
					$this->define('plug_sttversion', '1.0.0');
					$this->define('plug_sttcss', plug_stt_dir_url . 'assets/css/');
					$this->define('plug_sttjs', plug_stt_dir_url . 'assets/js/');
					$this->define('plug_sttimages', plug_stt_dir_url . 'assets/images/');
					$this->define('plug_stttemplet', plug_stt_dir_path . 'inc/templet/');
					$this->define('plug_sttbackend', plug_stt_dir_path . 'inc/backend');
				}

			/**
			* Define constant if not already set.
			*/
          	private function define( $name, $value ){
		            if ( ! defined( $name ) ) {
						define( $name, $value );
					}
			}

			public function includes(){
					require_once plug_stt_dir_path . 'inc/classes/plug_sttadmin.php';
					require_once plug_stt_dir_path . 'inc/classes/plug_sttfrontend.php';
					require_once plug_stt_dir_path . 'inc/classes/plug_sttenqueues.php';
					require_once plug_stt_dir_path . 'inc/classes/plug_sttactive.php';
				}
		}
}
new plu_SCROLL_tt();