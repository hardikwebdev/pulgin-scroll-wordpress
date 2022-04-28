<?php

global $wpdb;
	$aip_front_end .= '<div class="plug_sttpostion '. esc_attr($plug_sttpostion).'">';
		$aip_front_end .= '<div class="plug_sttbtn aip_stt-templet-'.esc_attr($get_templet).' '.esc_attr($plug_sttlayout).'" >';
			$aip_front_end .= '<div class="aip_stt-hvr-effect">';
				if( isset( $get_top_icon ) )  {
					$aip_icon_show = explode('|',$get_top_icon);
					$aip_icon_get = $aip_icon_show[0].' '.$aip_icon_show[1]; 
				}
				$aip_front_end .= '<span class="plug_stticon  fa fa-caret-up "></span>';
			$aip_front_end .= '</div>';
		$aip_front_end .= '</div>';
	$aip_front_end .= '</div>';
	?>
	<style type="text/css">
		.aip_stt-templet-5{
			background-color : <?php echo $get_bg_color; ?>;
		}
		.aip_stt-templet-5:before{
			    box-shadow: 0 0 0 6px <?php echo $get_bdr_hvr_color; ?>;
		}
		.aip_stt-templet-5 .aip_stt-hvr-effect .plug_stticon:after, .aip_stt-templet-5 .aip_stt-hvr-effect:before, .aip_stt-templet-5 .aip_stt-hvr-effect:after {
			color : <?php echo $get_text_color; ?> !important;
			background: <?php echo $get_text_color; ?> !important;
		}
		.aip_stt-templet-5 .plug_stticon{
			color : <?php echo $get_text_color; ?> !important;
		}
		.aip_stt-templet-5:hover .aip_stt-hvr-effect .plug_stticon:after, .aip_stt-templet-5:hover .aip_stt-hvr-effect:before, .aip_stt-templet-5:hover .aip_stt-hvr-effect:after {
    		color : <?php echo $get_text_hvr_color; ?> !important;
    		background-color : <?php echo $get_text_hvr_color; ?> !important;
		}
		.aip_stt-templet-5:hover .plug_stticon{
			color : <?php echo $get_text_hvr_color; ?> !important;
		}
		.aip_stt-templet-5:hover{
			background-color: <?php echo $get_bg_hvr_color; ?>;
		}
	</style>
	<?php 
