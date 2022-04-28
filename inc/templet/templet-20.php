<?php
global $wpdb;
	$aip_front_end .= '<div class="plug_sttpostion aip_stt-bottom_fix aip_stt-templet-'.$get_templet .' '. $plug_sttpostion.'-hide">';
		$aip_front_end .= '<div class="plug_sttbtn " >';
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
    .aip_stt-templet-20 .plug_sttbtn .plug_stttext_wrap,.aip_stt-templet-20 .plug_sttbtn .plug_stticon_inner .plug_stticon{
        color: <?php echo $get_text_color; ?>;
    }
    .aip_stt-templet-20 .plug_sttbtn:hover .plug_stttext_wrap,.aip_stt-templet-20 .plug_sttbtn:hover .plug_stticon_inner .plug_stticon{
        color: <?php echo $get_text_hvr_color; ?>;
    }
    .aip_stt-templet-20 .plug_sttbtn,.aip_stt-templet-20 .plug_sttbtn .plug_stticon_inner:after{
        background: <?php echo $get_bg_color; ?>;
    }
	</style>
	<?php 