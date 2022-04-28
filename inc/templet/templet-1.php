<?php

	$aip_front_end .= '<div class="plug_sttpostion aip_stt-templet-'.$get_templet .' '. $plug_sttpostion.'">';
		$aip_front_end .= '<div class="plug_sttbtn '.esc_attr($plug_sttlayout).'" style="background-color: '.esc_attr($get_bg_color).' ; color : '.esc_attr($get_text_color).'" >';
			if( isset( $get_top_icon ) )  {
				$aip_icon_show = explode('|',$get_top_icon);
				$aip_icon_get = $aip_icon_show[0].' '.$aip_icon_show[1]; 
				$aip_front_end .= '<div class="plug_stticon '.$aip_icon_get.'"></div>';
			}
		$aip_front_end .= '</div>';
	$aip_front_end .= '</div>';
	?>
	<style type="text/css">
		.plug_sttpostion .plug_sttbtn:hover{
			background-color: <?php echo $get_bg_hvr_color; ?> !important;
			color: <?php echo $get_text_hvr_color; ?> !important;
		}
	</style>
	<?php 
