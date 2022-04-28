jQuery(document).ready(function(){
                    
    var auto_hide = daynimic_value.auto_hide;
    var auto_hide_speed = daynimic_value.auto_hide_speed;
    
    var offset_option = daynimic_value.offset_option;

    var scroll_offset = daynimic_value.scroll_offset;
    var scroll_offset_perce = daynimic_value.scroll_offset_perce;

    var hvr_animation = daynimic_value.hvr_animation;
    var e_animation = daynimic_value.e_animation;
    var s_animation = daynimic_value.s_animation;
    
    var templet = daynimic_value.templet;   
    var scroll_to_position = daynimic_value.scroll_to_position;

    if(scroll_to_position == "2"){
        if(daynimic_value.element_id != ''){
            var scroll_postion = jQuery('#' + daynimic_value.element_id).offset().top;
        }else{
            var scroll_postion = 0;    
        }
    }else{
        var scroll_postion = 0;
    }
    console.log(daynimic_value.element_id);
    var timer_clear;
    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass('animated');
    jQuery(window).scroll(function () {
        if (offset_option == "1"){
            var scrollTopPos = jQuery(window).scrollTop();
            var window_height = jQuery(window).height();
            var document_height = jQuery(document).height();
            var halfwayPos = (scrollTopPos + window_height)/2;
            var support_var = ((document_height/2) - (window_height/2))*(scroll_offset_perce/100);
            var pivot_pos = support_var + (window_height/2) ;

            if (window_height == document_height) {
                jQuery('.plug_stttop_scroll_btn').addClass('active');
                if(templet != "19" && templet != "20"){
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(e_animation);
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass(s_animation);
                }
                if(timer_clear) {
                    window.clearTimeout(timer_clear);
                }
                if(auto_hide =="1"){         
                    timer_clear =  setTimeout(function() { 
                        jQuery(".plug_stttop_scroll_btn").removeClass('active');
                        if(templet != "19" && templet != "20"){
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(s_animation);
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass(e_animation);
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(e_animation);
                        }
                    },auto_hide_speed)
                }
            }else if (halfwayPos > pivot_pos){
                jQuery('.plug_stttop_scroll_btn').addClass('active');
                if(templet != "19" && templet != "20"){
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(e_animation);
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass(s_animation);
                }

                if(timer_clear) {
                    window.clearTimeout(timer_clear);
                }

                if(auto_hide =="1"){         
                    timer_clear =  setTimeout(function() {     
                        jQuery(".plug_stttop_scroll_btn").removeClass('active');
                        if(templet != "19" && templet != "20"){
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(s_animation);
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass(e_animation);
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(e_animation);
                        }
                    },auto_hide_speed)
                }
            }else{
                if(templet != "19" && templet != "20"){
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(s_animation);
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass(e_animation);
                    jQuery('.plug_stttop_scroll_btn').removeClass('active');
                }
                jQuery('.aip_stt-bottom_fix').removeClass('plug_sttbottom_fix');
            }
        }else{
            if (jQuery(this).scrollTop() > scroll_offset) {
                
                jQuery('.plug_stttop_scroll_btn').addClass('active');
                if(templet != "19" && templet != "20"){
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(e_animation);
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass(s_animation);
                }
                
                if(timer_clear) {
                    window.clearTimeout(timer_clear);
                }
                if(auto_hide =="1"){         
                    timer_clear =  setTimeout(function() {     
                        jQuery(".plug_stttop_scroll_btn").removeClass('active');
                        if(templet != "19" && templet != "20"){
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(s_animation);
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass(e_animation);
                            jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(e_animation);
                        }
                    },auto_hide_speed)
                }
            }else{
                if(templet != "19" && templet != "20"){
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').removeClass(s_animation);
                    jQuery('.plug_stttop_scroll_btn .plug_sttpostion').addClass(e_animation);
                }
                jQuery('.plug_stttop_scroll_btn').removeClass('active');
                jQuery('.aip_stt-bottom_fix').removeClass('plug_sttbottom_fix');
            }
        }
    });
    
    if(templet == "23" || templet == "24" || templet == "25" || templet == "26" || templet == "27"){
        jQuery('.plug_stttop_scroll_btn .plug_sttpostion .plug_sttbtn_hexagone').addClass(hvr_animation)
    }else if(templet == "19" || templet == "20"){
        jQuery('.plug_stttop_scroll_btn .plug_sttpostion .plug_sttbtn').removeClass(hvr_animation)
    }else{
        jQuery('.plug_stttop_scroll_btn .plug_sttpostion .plug_sttbtn').addClass(hvr_animation)
    }

    jQuery('.plug_stttop_scroll_btn').click(function () {
        var scroll_speed = daynimic_value.scroll_speed;    
        jQuery("html, body ").animate({
            scrollTop: scroll_postion
        }, scroll_speed);
        return false;
    });
    
    var mywindow = jQuery(window);
    var mypos = mywindow.scrollTop();
    var up = false;
    var newscroll;
    mywindow.scroll(function () {
        newscroll = mywindow.scrollTop();
        if (newscroll > mypos && !up) {
            jQuery('.aip_stt-bottom_fix').removeClass('plug_sttbottom_fix');
            up = !up;
        } else if(newscroll < mypos && up) {
            jQuery('.aip_stt-bottom_fix').addClass('plug_sttbottom_fix');
            up = !up;
        }
        mypos = newscroll;
    });
});