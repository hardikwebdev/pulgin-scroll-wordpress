<?php defined('ABSPATH') or die('No scripts for you') ?>
<?php


if (!class_exists('plug_sttenqueue')) {
	/**
	* This class apply ui and ux related assets
	*/
	class plug_sttenqueue{
		function __construct(){
			add_action( 'admin_enqueue_scripts' , array($this,'plug_sttregister_admin'));
			add_action( 'wp_enqueue_scripts' , array($this,'plug_sttregister_frontend'));
		}
		public function plug_sttregister_admin(){
					wp_enqueue_media();
				   	wp_enqueue_style( 'wp-color-picker' );
				    wp_enqueue_style( 'cs-wp-color-picker', plug_sttcss . 'cs-wp-color-picker.min.css' , array( 'wp-color-picker' ), plug_sttversion, 'all' );
				    wp_enqueue_script( 'wp-color-picker' );
				    wp_enqueue_script( 'cs-wp-color-picker', plug_sttjs . 'cs-wp-color-picker.min.js' , array( 'wp-color-picker' ), plug_sttversion, true );
			     	wp_enqueue_style( 'dashicons-picker', plug_sttcss . 'aip-stt-icon-picker.css' ,  array( 'dashicons' ), plug_sttversion ); 
				    wp_enqueue_style( 'font-awesome', plug_sttcss . 'font-awesome.min.css' ,'',plug_sttversion);
					wp_enqueue_script( 'dashicons-picker_js', plug_sttjs . 'aip-stt-icon-picker.js', array( 'jquery' ), plug_sttversion );
					wp_register_script( 'admin_custom', plug_sttjs . 'admin_custom.js' );
					$admin_custom_path = array(
						'image_path' => plug_sttimages,
					);
					wp_localize_script( 'admin_custom', 'custom_path', $admin_custom_path );
					wp_enqueue_script( 'admin_custom' );
				    if(!empty($_GET['page']) == 'scroll-to-top'){
					    wp_enqueue_style( 'bootstrap-css', plug_sttcss . 'bootstrap.min.css' ,  '', plug_sttversion );
					    wp_enqueue_style( 'admin-custom-css', plug_sttcss . 'admin-custom.css' ,  '', plug_sttversion );
					    wp_enqueue_script( 'bootstrap-js', plug_sttjs . 'bootstrap.min.js', array( 'jquery' ), plug_sttversion );
					}			
		}

		public function plug_sttregister_frontend(){
				wp_enqueue_style( 'font-awesome', plug_sttcss . 'font-awesome.min.css' ,'',plug_sttversion);
				wp_enqueue_style( 'style-css', plug_sttcss . 'style.css' ,'',plug_sttversion);
				wp_enqueue_style( 'hover-css', plug_sttcss . 'hover-css.css' ,'',plug_sttversion);
				wp_enqueue_style( 'dashicons-picker', plug_sttcss . 'aip-stt-icon-picker.css' ,  array( 'dashicons' ), plug_sttversion );
				wp_enqueue_style( 'animate-min', plug_sttcss . 'animate.min.css' ,  '' , plug_sttversion );
				global $wpdb;
				$get_options = get_option('plug_stt_general');
				if(isset($get_options)){
				
					$array_hvr_type = array(
						'1' => __('default','scroll-to-top'),
						'2' => __('hvr-grow','scroll-to-top'),
						'3' => __('hvr-pulse','scroll-to-top'),
						'4' => __('hvr-pop','scroll-to-top'),
						'5' => __('hvr-bounce-in','scroll-to-top'),
						'6' => __('hvr-bounce-out','scroll-to-top'),
						'7' => __('hvr-float','scroll-to-top'),
						'8' => __('hvr-bob','scroll-to-top'),
						'9' => __('hvr-wobble-horizontal','scroll-to-top'),
						'10' => __('hvr-wobble-vertical','scroll-to-top'),
						'11' => __('hvr-buzz-out','scroll-to-top'),
					);
					
					if (isset($get_hvr_animation)){
						if (array_key_exists($get_hvr_animation ,$array_hvr_type)){
							$array_hvr_type = $array_hvr_type[$get_hvr_animation];
						}
					}else{
						$array_hvr_type = "";
					}
					
					if(isset($get_options['s_animation'])){
						$get_s_animation = $get_options['s_animation'];
					}
					$array_s_animation = array(
						'1' => __('default','scroll-to-top'),
						'2' => __('bounceIn','scroll-to-top'),
						'3' => __('fadeIn','scroll-to-top'),
						'4' => __('rotateIn','scroll-to-top'),
						'5' => __('slideInUp','scroll-to-top'),
						'6' => __('zoomIn','scroll-to-top'),
					);
					
				
					if(isset($get_options['e_animation'])){
						$get_e_animation = $get_options['e_animation'];
					}
					
					$array_e_animation = array(
						'1' => __('default','scroll-to-top'),
						'2' => __('bounceOut','scroll-to-top'),
						'3' => __('fadeOut','scroll-to-top'),
						'4' => __('rotateOut','scroll-to-top'),
						'5' => __('slideOutUp','scroll-to-top'),
						'6' => __('zoomOut','scroll-to-top'),
					);
					
					if (isset($get_s_animation)){
						if (array_key_exists($get_e_animation ,$array_e_animation)){
							$array_e_animation = $array_e_animation[$get_e_animation];
						}
					}else{
						$array_e_animation = "";
					}

				}
				$dynamic_value_js = array(
					'scroll_speed' => $get_scroll_speed,
					'templet' => $get_templet,					
					'auto_hide' => $get_auto_hide,
					'auto_hide_speed' => $get_auto_hide_speed,
					'offset_option' => $get_offset_option,
					'scroll_offset' => $get_scroll_offset,
					'scroll_offset_perce' => $get_scroll_offset_perce,
					'scroll_to_position' => $get_anchor_top_option,
					'element_id' => $get_element_id,
				);
				wp_register_script( 'custom_js', plug_sttjs . 'front-end-custom.js' , array('jquery') ,plug_sttversion, true );
				wp_localize_script( 'custom_js', 'daynimic_value', $dynamic_value_js );
				wp_enqueue_script( 'custom_js' );
		}

	}
	new plug_sttenqueue();
}