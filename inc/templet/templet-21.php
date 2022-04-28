<?php
global $wpdb;
	$aip_front_end .= '<div class="plug_sttpostion aip_stt-templet-'.$get_templet .' '. $plug_sttpostion.'">';
		$aip_front_end .= '<div class="plug_sttbtn '.esc_attr($plug_sttlayout).'" >';
            $aip_front_end .= '<div class="aip_stt-hvr-effect">';
                $aip_front_end .= '<div class="plug_stticon_wrap">';
                    if( isset( $get_top_icon ) )  {
                        $aip_icon_show = explode('|',$get_top_icon);
                        $aip_icon_get = $aip_icon_show[0].' '.$aip_icon_show[1];
                        $aip_front_end .= '<span class="plug_stticon_inner"><span class="plug_stticon  '.$aip_icon_get.'"></span></span>';
                    }
                    if(isset($get_btn_name)){
                        $aip_front_end .= '<span class="plug_stttext_wrap">'.$get_btn_name.'</span>';
                    }
                $aip_front_end .= '</div>';
            $aip_front_end .= '</div>';
		$aip_front_end .= '</div>';
	$aip_front_end .= '</div>';
	?>
    <style type="text/css">
    .plug_sttpostion.aip_stt-templet-21 .plug_sttbtn .plug_stticon_wrap{
        color: <?php echo $get_text_color; ?>;
        background: <?php echo $get_bg_color; ?>;
    }
    .plug_sttpostion.aip_stt-templet-21 .plug_sttbtn:hover .plug_stticon_wrap{
        color: <?php echo $get_text_hvr_color; ?>;
    }
    .plug_sttpostion.aip_stt-templet-21 .plug_sttbtn .plug_stticon_wrap .plug_stticon_inner{
        background: <?php echo $get_bg_color; ?>;
    }
    .plug_sttpostion.aip_stt-templet-21 .plug_sttbtn .plug_stticon_wrap .plug_stttext_wrap{
        border-color : <?php echo $get_bdr_color; ?>;
    }
	</style>
	<?php 