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
                                    if(isset($get_btn_name)){
                                        $aip_front_end .= '<span class="plug_stttext_wrap"><span>'.$get_btn_name.'</span></span>';
                                    }
                            $aip_front_end .= '</div>';
                        $aip_front_end .= '</div>';
                    $aip_front_end .= '</div>';
                $aip_front_end .= '</div>';
            $aip_front_end .= '</div>';
        $aip_front_end .= '</div>';
	$aip_front_end .= '</div>';
    ?>

    <style type="text/css">
    .aip_stt-templet-27 .plug_sttbtn{
        background-color: <?php echo $get_bdr_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn:after{
        border-top: 25px solid <?php echo $get_bdr_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn:before{
        border-bottom: 25px solid <?php echo $get_bdr_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect .plug_stticon_inner_1{
        background-color: <?php echo $get_bg_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect .plug_stticon_inner_1:after{
        border-top: 19px solid <?php echo $get_bg_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect .plug_stticon_inner_1:before{
        border-bottom: 19px solid <?php echo $get_bg_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect .plug_stticon_inner_2{
        background-color: <?php echo $get_bg_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect .plug_stticon_inner_2:after{
        border-color: <?php echo $get_bg_color; ?>   transparent transparent transparent;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect .plug_stticon_inner_2:before{
        border-color: transparent transparent transparent <?php echo $get_bg_color; ?>;
    }
    .aip_stt-templet-27 .plug_stticon_inner,.aip_stt-templet-27 .plug_stttext_wrap{
        color: <?php echo $get_text_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect:after{
        border-top: 19px solid <?php echo $get_text_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect:before{
        border-bottom: 19px solid <?php echo $get_text_color; ?>;
    }
    .aip_stt-templet-27 .plug_sttbtn .aip_stt-hvr-effect{
        background-color: <?php echo $get_text_color; ?>;
    }
	</style>
	<?php 