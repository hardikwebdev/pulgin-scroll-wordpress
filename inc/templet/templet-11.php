<?php
global $wpdb;
	$aip_front_end .= '<div class="plug_sttpostion aip_stt-templet-'.$get_templet .' '. $plug_sttpostion.'">';
		$aip_front_end .= '<div class="plug_sttbtn '.esc_attr($plug_sttlayout).'" >';
            $aip_front_end .= '<div class="aip_stt-hvr-effect">';
                $aip_front_end .= '<div class="plug_stticon_wrap">';
                    if( isset( $get_top_icon ) )  {
                        $aip_icon_show = explode('|',$get_top_icon);
                        $aip_icon_get = $aip_icon_show[0].' '.$aip_icon_show[1]; 
                    }
                    $aip_front_end .= '<span class="plug_stticon  '.$aip_icon_get.'"></span>';
                    if(isset($get_btn_name)){
                        $aip_front_end .= '<span class="plug_stttext">'.$get_btn_name.'</span>';
                    }
                $aip_front_end .= '</div>';
            $aip_front_end .= '</div>';
		$aip_front_end .= '</div>';
	$aip_front_end .= '</div>';
	?>
    <style type="text/css">
	.aip_stt-templet-11 .plug_sttbtn{
		color: <?php echo $get_text_color; ?>;
	}
	.aip_stt-templet-11 .plug_sttbtn:hover{
		color: <?php echo $get_text_hvr_color; ?>;	
    }
    .aip_stt-templet-11 .plug_sttbtn .aip_stt-hvr-effect{
        background: <?php echo $get_bg_color; ?>;
    }
    .aip_stt-templet-11 .plug_sttbtn .aip_stt-hvr-effect:before{
        background: <?php echo $get_bg_hvr_color; ?>;
    }
    .aip_stt-templet-11 .plug_sttbtn .aip_stt-hvr-effect:after{
        background: <?php echo $get_bg_hvr_color; ?> ;
    }
	</style>
	<?php 