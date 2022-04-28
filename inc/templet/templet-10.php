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
                $aip_front_end .= '<span class="circle"><span><em></em></span><span><em></em></span></span>';
			$aip_front_end .= '</div>';
		$aip_front_end .= '</div>';
	$aip_front_end .= '</div>';
	?>
    <style type="text/css">
	.aip_stt-templet-10 .plug_sttbtn .plug_stticon{
		color: <?php echo $get_text_color; ?>;
	}
	.aip_stt-templet-10 .plug_sttbtn:hover .plug_stticon{
		color: <?php echo $get_text_hvr_color; ?>;	
    }
    .aip_stt-templet-10 .plug_sttbtn .aip_stt-hvr-effect:before{
        background: <?php echo $get_bg_color; ?>;
    }
    .aip_stt-templet-10 .plug_sttbtn .aip_stt-hvr-effect .circle{
        background: <?php echo $get_bdr_color; ?>;
    }
    .aip_stt-templet-10 .plug_sttbtn .aip_stt-hvr-effect .circle span em{
        background: <?php echo $get_bdr_hvr_color; ?>;
    }
	</style>
	<?php 