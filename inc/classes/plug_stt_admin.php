<?php defined('ABSPATH') or die('Scripts for you') ?>
<?php
/**
* 
*/
if (!class_exists('plug_sttadmin')) {
	class plug_sttadmin {
		var $options;
		function __construct(){
			$this->options = get_option('stt_general_options');
			add_action('admin_menu',array($this,'plug_sttmenus'));
			add_action('admin_init',array($this,'plug_sttregister_settings'));
			add_action('admin_init', array($this, 'plug_sttoption_export'));
			add_action('admin_init', array($this, 'plug_sttoption_import'));
			
			add_action( 'admin_notices', array($this, 'plug_sttimport_sucessfull'));
			add_action( 'admin_notices', array($this, 'plug_sttexport_sucessfull'));
			
		}

		public function plug_sttmenus(){
			add_menu_page(esc_attr('Scroll To Top','scroll-to-top') , esc_attr('Scroll to Top','scroll-to-top') ,'manage_options','scroll-to-top',array($this,'main_menu_listing'),'dashicons-arrow-up');
			add_submenu_page('scroll-to-top','Edit STT Setting',esc_attr('Scroll To Top','scroll-to-top'),'manage_options','scroll-to-top',array($this,'main_menu_listing'));
			add_submenu_page('scroll-to-top',esc_html('Import Export Setting','scroll-to-top'),esc_html('Import Export Setting','scroll-to-top'),'manage_options','plug_sttimport_export_settings',array($this,'import_export_setting'));
		}

		public function main_menu_listing(){			
			$get_options = get_option('plug_stt_general');
					
				if(isset($get_options)){
					if(isset($get_options['templet'])){
						$get_templet = $get_options['templet'];
					}
					if(isset($get_options['btn_img'])){
						$get_btn_img = $get_options['btn_img'];
					}
					if(isset($get_options['btn_name'])){
						$get_btn_name = $get_options['btn_name'];
					}
					if(isset($get_options['layout'])){
						$get_layout = $get_options['layout'];
					}
					if(isset($get_options['postion'])){
						$get_postion = $get_options['postion'];
					}
					if(isset($get_options['s_animation'])){
						$get_s_animation = $get_options['s_animation'];
					}
					if(isset($get_options['e_animation'])){
						$get_e_animation = $get_options['e_animation'];
					}
					if(isset($get_options['scroll_speed'])){
						$get_scroll_speed = $get_options['scroll_speed'];
					}
					if(isset($get_options['text_color'])){
						$get_text_color = $get_options['text_color'];
					}
					if(isset($get_options['bg_color'])){
						$get_bg_color = $get_options['bg_color'];
					}
					if(isset($get_options['top_icon'])){
						$get_top_icon = $get_options['top_icon'];
					}
					if(isset($get_options['text_hvr_color'])){
						$get_text_hvr_color = $get_options['text_hvr_color'];	
					}
					if(isset($get_options['bg_hvr_color'])){
						$get_bg_hvr_color = $get_options['bg_hvr_color'];
					}
					if(isset($get_options['bdr_color'])){
						$get_bdr_color = $get_options['bdr_color'];
					}
					if(isset($get_options['bdr_hvr_color'])){
						$get_bdr_hvr_color = $get_options['bdr_hvr_color'];
					}
					if(isset($get_options['hvr_animation'])){
						$get_hvr_animation = $get_options['hvr_animation'];
					}
					if(isset($get_options['hide_mobile'])){
						$get_hide_mobile = $get_options['hide_mobile'];
					}
					if(isset($get_options['auto_hide'])){
						$get_auto_hide = $get_options['auto_hide'];
					}
					if(isset($get_options['auto_hide_speed'])){
						$get_auto_hide_speed = $get_options['auto_hide_speed'];
					}
					if(isset($get_options['offset_option'])){
						$get_offset_option = $get_options['offset_option'];
					}
					if(isset($get_options['scroll_offset'])){
						$get_scroll_offset = $get_options['scroll_offset'];
					}
					if(isset($get_options['scroll_offset_perce'])){
						$get_scroll_offset_perce = $get_options['scroll_offset_perce'];
					}
					if(isset($get_options['display_option'])){
						$get_display_option = $get_options['display_option'];
					}
					if(isset($get_options['anchor_top_option'])){
						$get_anchor_top_option = $get_options['anchor_top_option'];
					}
					if(isset($get_options['element_id'])){
						$get_element_id = $get_options['element_id'];
					}
				}
			?>
			<div class="aip_stt">
				<div class="plug_stttitle_settings">
					<h2><?php _e('General Setting','scroll-to-top'); ?></h2>
				</div>
				
				<form method="post" action="options.php" class="bg-pd">
					<?php 
						settings_fields( 'stt_general_options' );
						
						if(file_exists(plug_sttbackend . '/backend-form.php')){
							require_once  plug_sttbackend . '/backend-form.php';
						}
					?>
					
				</form>
			</div>
			<?php
		}
		
		public function import_export_setting(){	
			if(file_exists(plug_sttbackend . '/plug_sttbackend_import.php')){
				require_once  plug_sttbackend . '/plug_sttbackend_import.php';
			}		
		}


		public function plug_sttoption_export(){
			if( empty( $_POST['plug_sttaction'] ) || 'export_settings' != $_POST['plug_sttaction'] )
					return;

					if( ! wp_verify_nonce( $_POST['plug_sttexport_nonce'], 'plug_sttexport_nonce' ) )
					return;

					// if( ! current_user_can( 'manage_options' ) )
					// return;

					$settings =  get_option('plug_stt_general');

					ignore_user_abort( true );

					nocache_headers();
					header( 'Content-Type: application/json; charset=utf-8' );
					header( 'Content-Disposition: attachment; filename=aip_stt-settings-export-' . date( 'm-d-Y' ) . '.json' );
					header( "Expires: 0" );

					echo json_encode( $settings );
					exit;

		}
		function plug_sttexport_sucessfull() {
			if ( isset($_GET['export']) && $_GET['export'] == 'sucesss' ){
				?>
				<div class="notice notice-success is-dismissible">
					<p><?php _e( 'Export file sucessfully Exported!', 'scroll-to-top' ); ?></p>
				</div>
				<?php
			}
		}
		public function plug_sttoption_import() {
			if( empty( $_POST['plug_sttaction'] ) || 'import_settings' != $_POST['plug_sttaction'] )
				return;
		
			if( ! wp_verify_nonce( $_POST['plug_sttimport_nonce'], 'plug_sttimport_nonce' ) )
				return;
		
			if( ! current_user_can( 'manage_options' ) )
				return;
			if ($_FILES['import_file']['name']) {
				@$extension = end( explode( '.', $_FILES['import_file']['name'] ) );
			}else{
				wp_die( __( 'Please upload a valid .json file' ) );
			}
		
			if( $extension != 'json' ) {
				wp_die( __( 'Please upload a valid .json file' ) );
			}
		
			$import_file = $_FILES['import_file']['tmp_name'];
		
			if( empty( $import_file ) ) {
				wp_die( __( 'Please upload a file to import' ) );
			}
		
			// Retrieve the settings from the file and convert the json object to an array.
			$settings = (array) json_decode( file_get_contents( $import_file ) );
			update_option( 'plug_stt_general', $settings );
			wp_safe_redirect( admin_url( 'admin.php?page=plug_sttimport_export_settings&import=sucesss' ) );
			
			exit;		
		}
		function plug_sttimport_sucessfull() {
			if ( isset($_GET['import']) && $_GET['import'] == 'sucesss' ){
				?>
				<div class="notice notice-success is-dismissible">
					<p><?php _e( 'Import file sucessfully imported!', 'scroll-to-top' ); ?></p>
				</div>
				<?php
			}
		}
		
		public function plug_sttregister_settings() {
			register_setting( 'stt_general_options', 'plug_stt_general' ,'plug_sttcallback_function');
		}

	}
	new plug_sttadmin();
}
