<?php

global $wpdb;
	$aip_front_end .= '<div class="plug_sttpostion aip_stt-templet-'.$get_templet .' '. $plug_sttpostion.'">';
		$aip_front_end .= '<div class="plug_sttbtn '.esc_attr($plug_sttlayout).'" >';
			$aip_front_end .= '<div class="aip_stt-hvr-effect">';
				if( isset( $get_top_icon ) )  {
					$aip_icon_show = explode('|',$get_top_icon);
					$aip_icon_get = $aip_icon_show[0].' '.$aip_icon_show[1]; 
				}
				$aip_front_end .= '<span class="plug_stticon  '.$aip_icon_get.'"></span>';
			$aip_front_end .= '</div>';
		$aip_front_end .= '</div>';
	$aip_front_end .= '</div>';
	?>
	<style type="text/css">
	.aip_stt-templet-6 .plug_sttbtn {
		    -webkit-box-shadow: 0 0 0 3px <?php echo $get_bdr_color; ?>;
   			 box-shadow: 0 0 0 3px <?php echo $get_bdr_color; ?>;
   			 color: <?php echo $get_text_color; ?> 
	}
	.aip_stt-templet-6 .plug_sttbtn:after{
		background: <?php echo $get_bg_color; ?>;
	}
	.aip_stt-templet-6 .plug_sttbtn:hover:after{
		background: <?php echo $get_bg_hvr_color; ?>;
	}
	.aip_stt-templet-6 .plug_sttbtn:hover {
   			 color: <?php echo $get_text_hvr_color; ?>;
   			 -webkit-box-shadow: 0 0 0 3px <?php echo $get_bdr_hvr_color; ?>;
   			 box-shadow: 0 0 0 3px <?php echo $get_bdr_hvr_color; ?>;
	}

	</style>
	<?php 
