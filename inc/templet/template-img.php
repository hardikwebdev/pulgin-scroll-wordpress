<?php
global $wpdb;
	$aip_front_end .= '<div class="plug_sttpostion  '.esc_attr($plug_sttpostion).'">';
        $aip_front_end .= '<div class="plug_sttbtn '.esc_attr($plug_sttlayout).'" >';
            $aip_front_end .= '<div class="aip_stt-hvr-effect">';
                $default_image = plug_sttimages .'back-to-top.png';
                if ( !empty( $get_options['image_upload'] ) ) {
                    $image_attributes = wp_get_attachment_image_src( $get_options['image_upload'] , 'full');
                    $src = $image_attributes[0];
                    $value = $get_options['image_upload'];
                     $aip_front_end .= '<img class="plug_sttimage" src="'.$src.'">';
                } else {
                     $aip_front_end .= '<img class="plug_sttimage" src="'.$default_image.'">';
                }
            $aip_front_end .= '</div>';
		$aip_front_end .= '</div>';
	$aip_front_end .= '</div>';