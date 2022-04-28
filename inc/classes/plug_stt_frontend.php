<?php defined('ABSPATH') or die('Scripts for you') ?>
<?php
/**
* 
*/
if (!class_exists('plug_sttfrontend')) {
	class plug_sttfrontend {
		
		function __construct(){
			add_action('wp_footer',array($this,'aip_front_end_display'));
		}


		public function aip_front_end_display(){
			
			$get_options = get_option('plug_stt_general');
			if($get_options){
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
					if(isset($get_options['display_option'])){
						$get_display_option = $get_options['display_option'];
					}
			}
			
			$array_postion_type = array(
	            '1' => __('plug_stttop_left','scroll-to-top'),
	            '2' => __('plug_stttop_middle','scroll-to-top'),
	            '3' => __('plug_stttop_right','scroll-to-top'),
	            '4' => __('plug_sttbottom_left','scroll-to-top'),
	            '5' => __('plug_sttbottom_middle','scroll-to-top'),
	            '6' => __('plug_sttbottom_right','scroll-to-top'),
	            '7' => __('plug_sttmiddle_left','scroll-to-top'),
	            '8' => __('plug_sttmiddle_right','scroll-to-top'),
	        );
			if (isset($get_postion)){
				if (array_key_exists($get_postion ,$array_postion_type)){
					$plug_sttpostion = $array_postion_type[$get_postion];
				}
			}

			$array_layout_type = array(
				'1' => __('plug_sttsquare','scroll-to-top'),
				'2' => __('plug_sttround_square','scroll-to-top'),
				'3' => __('plug_sttcircle','scroll-to-top'),
				'4' => __('plug_sttpill','scroll-to-top'),
			);
			if (isset($get_layout)){
				if (array_key_exists($get_layout ,$array_layout_type)){
					$plug_sttlayout = $array_layout_type[$get_layout];
				}
			}
			
			$array_hvr_type = array(
				'1' => __('hvr-bounce-in','scroll-to-top'),
				'2' => __('hvr-float','scroll-to-top'),
				'3' => __('hvr-bob','scroll-to-top'),
			);
			
			if (isset($get_hvr_animation)){
				if (array_key_exists($get_hvr_animation ,$array_hvr_type)){
					$array_hvr_type = $array_hvr_type[$get_hvr_animation];
				}
			}

			if(isset($get_hide_mobile) && $get_hide_mobile == "1"){
				 $get_hide_mobile =  __('plug_sttmobile_hide','scroll-to-top');
			}else{
				$get_hide_mobile = '';
			}
			
			if(isset($get_display_option) && !empty($get_display_option)){
				if($get_display_option == "2"){
					if(is_home()){
						if(isset($get_templet)){
							$aip_front_end = '<div class="plug_stttop_scroll_btn  '.esc_attr($get_hide_mobile).'">';
								if($get_btn_img == "1" && file_exists(plug_stttemplet . '/templet-'.esc_attr($get_templet).'.php')){
									require_once  plug_stttemplet . '/templet-'.esc_attr($get_templet).'.php';
								}else if($get_btn_img == "2" && file_exists(plug_stttemplet . '/template-img.php')){
									require_once  plug_stttemplet . '/template-img.php';
								}else{
									$aip_front_end .= '<div class="plug_sttpostion '. $plug_sttpostion.'">';
										$aip_front_end .= '<div class="plug_sttbtn " >';
										$aip_front_end .=  __e('Please select template!','scroll-to-top');
										$aip_front_end .= '</div>';
									$aip_front_end .= '</div>';
								}
							$aip_front_end .= '</div>';
							echo $aip_front_end;
						}
					}
				}else{
					if(isset($get_templet)){
						$aip_front_end = '<div class="plug_stttop_scroll_btn  '.esc_attr($get_hide_mobile).'">';
							if($get_btn_img == "1" && file_exists(plug_stttemplet . '/templet-'.esc_attr($get_templet).'.php')){
								require_once  plug_stttemplet . '/templet-'.esc_attr($get_templet).'.php';
							}else if($get_btn_img == "2" && file_exists(plug_stttemplet . '/template-img.php')){
								require_once  plug_stttemplet . '/template-img.php';
							}else{
								$aip_front_end .= '<div class="plug_sttpostion '. $plug_sttpostion.'">';
									$aip_front_end .= '<div class="plug_sttbtn " >';
									$aip_front_end .= "Please select template!";
									$aip_front_end .= '</div>';
								$aip_front_end .= '</div>';
							}
						$aip_front_end .= '</div>';
						echo $aip_front_end;
					}
				}
			}
		}
	}
	new plug_sttfrontend();
}