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
	.aip_stt-templet-7 .plug_sttbtn {
		border-color: <?php echo $get_bdr_color; ?>;
		background-color:  <?php echo $get_bg_color; ?>;
	}
	.aip_stt-templet-7 .plug_sttbtn:hover{
		border-color: <?php echo $get_bg_hvr_color; ?>;
	}
	.aip_stt-templet-7 .plug_sttbtn:before{
		background-color: <?php echo $get_bg_hvr_color; ?>;
	}
	.aip_stt-templet-7 .aip_stt-hvr-effect .plug_stticon{
		color: <?php echo $get_text_color; ?> ;
	}
	.aip_stt-templet-7 .plug_sttbtn:hover .aip_stt-hvr-effect .plug_stticon{
		color: <?php echo $get_text_hvr_color; ?> ;
	}
	.aip_stt-templet-7 .plug_sttbtn:hover{
		border-color: <?php echo $get_bdr_hvr_color; ?>;
	}
	</style>
	<?php 
