<?php defined('ABSPATH') or die('No scripts for you') ;?>
<?php 


if (!class_exists('aip_scroll_active_plugin')) {
	class aip_scroll_active_plugin
		{
			function __construct()
				{
                    register_activation_hook( plug_stt_dir_path . 'scroll-to-top.php' , array( $this , 'plug_sttactive_hook' ) );
				}

			public function plug_sttactive_hook(){   
                         global $wpdb;
                         $update_option =  array(
                         'btn_img' => '1',
                         'image_upload' => '',
                         'templet' => '1',
                         'btn_name' => 'Top',
                         'top_icon' => 'dashicons|dashicons-arrow-up-alt2',
                         'layout' => '2',
                         'postion' => '6',
                         's_animation' => '1',
                         'e_animation' => '1',
                         'hvr_animation' => '7',
                         'offset_option' => '1',
                         'scroll_offset' => '200',
                         'scroll_offset_perce' => '10',
                         'scroll_speed' => '2000',
                         'auto_hide_speed' => '4000',
                         'anchor_top_option' => '1',
                         'element_id' => '',
                         'display_option' => '1',
                         'text_color' => '#ffffff',
                         'bg_color' => '#1e73be',
                         'bdr_color' => 'rgba(30,115,190,0.87)',
                         'text_hvr_color' => '#1e73be',
                         'bg_hvr_color' => '#ffffff',
                         'bdr_hvr_color' => '#1e73be',
                         );
                         add_option('plug_stt_general', $update_option);
				}
        }
}
new aip_scroll_active_plugin();