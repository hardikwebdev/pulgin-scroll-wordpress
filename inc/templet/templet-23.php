<?php
global $wpdb;
	$aip_front_end .= '<div class="plug_sttpostion aip_stt-templet-'.$get_templet .' '. $plug_sttpostion.'">';
        $aip_front_end .= '<div class="plug_sttbtn_hexagone " >';
            $aip_front_end .= '<div class="plug_sttbtn " >';
                $aip_front_end .= '<div class="plug_sttextra_layer"></div>';
                $aip_front_end .= '<div class="aip_stt-hvr-effect">';
                    $aip_front_end .= '<div class="plug_stticon_inner_1">';
                        $aip_front_end .= '<div class="plug_stticon_inner_2">';
                            $aip_front_end .= '<div class="plug_stticon_inner_3">';
                                $aip_front_end .= '<div class="plug_stticon_inner">';
                                    if( isset( $get_top_icon ) )  {
                                        $aip_icon_show = explode('|',$get_top_icon);
                                        $aip_icon_get = $aip_icon_show[0].' '.$aip_icon_show[1];
                                        $aip_front_end .= '<span class="plug_stticon  '.$aip_icon_get.'"></span>';
                                    }
                                $aip_front_end .= '</div>';
                            $aip_front_end .= '</div>';
                        $aip_front_end .= '</div>';
                    $aip_front_end .= '</div>';
                $aip_front_end .= '</div>';
            $aip_front_end .= '</div>';
        $aip_front_end .= '</div>';
	$aip_front_end .= '</div>';
    ?>

    <style type="text/css">
    .plug_sttpostion.aip_stt-templet-22 .plug_sttbtn .plug_stticon_wrap .plug_stticon_inner{
        color: <?php echo $get_bg_color; ?>;
        border-color: <?php echo $get_bg_color; ?>;
    }
    .plug_sttpostion.aip_stt-templet-22 .plug_sttbtn .plug_stticon_wrap .plug_stttext_wrap{
        background: <?php echo $get_bg_color; ?>;
    }
    .plug_sttpostion.aip_stt-templet-22 .plug_sttbtn .plug_stticon_wrap .plug_stttext_wrap span{
        color: <?php echo $get_text_color; ?>;
    }
    .plug_sttpostion.aip_stt-templet-22 .plug_sttbtn .plug_stticon_wrap .plug_stticon_inner{
        background: <?php echo $get_text_color; ?>;
    }
	</style>
	<?php 