
jQuery( document ).ready(function() {
    
       
    jQuery('#plug_stttemplate').change(function(){  

        var template_value = jQuery(this).val();
        if(template_value != ""){
            jQuery('.aip_stt-image').attr('src', custom_path.image_path+'/template-'+template_value+'.png');
        }else{
            jQuery('.aip_stt-image').addClass('d-none');
        }

        
        if(template_value == "1" || template_value == "3" || template_value == "4" || template_value == "5" || template_value == "6" || template_value == "7" || template_value == "8" || template_value == "9" || template_value == "10" || template_value == "23" ){
            jQuery('.aip_btn_name').hide();
        }else{
            jQuery('.aip_btn_name').show();
        }

        if(template_value == "19" || template_value == "20"){
            jQuery('.aip_s_animation').hide();
            jQuery('.aip_e_animation').hide();
            jQuery('.aip_hvr_animation').hide();
        }else{
            jQuery('.aip_s_animation').show();
            jQuery('.aip_e_animation').show();
            jQuery('.aip_hvr_animation').show();
        }

        function template17() {
            jQuery("#plug_sttpostion option.postion-1").prop("disabled", true);
            jQuery("#plug_sttpostion option.postion-2").prop("disabled", true);
            jQuery("#plug_sttpostion option.postion-3").prop("disabled", true);
            jQuery("#plug_sttpostion option.postion-4").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-5").prop("disabled", true);
            jQuery("#plug_sttpostion option.postion-6").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-7").prop("disabled", true);
            jQuery("#plug_sttpostion option.postion-8").prop("disabled", true);
            jQuery("#plug_sttpostion option.postion-4").attr("selected", true);
       }
       function template_middle() {
            jQuery("#plug_sttpostion option.postion-1").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-2").prop("disabled", true);
            jQuery("#plug_sttpostion option.postion-3").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-4").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-5").prop("disabled", true);
            jQuery("#plug_sttpostion option.postion-6").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-7").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-8").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-1").attr("selected", true);
       }
       function template_else() {
            jQuery("#plug_sttpostion option.postion-1").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-2").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-3").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-4").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-5").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-6").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-7").prop("disabled", false);
            jQuery("#plug_sttpostion option.postion-8").prop("disabled", false);
       }       
       if (template_value == '19'|| template_value == '20') {
           jQuery('.aip_postion').hide(200);
       }else{
            jQuery('.aip_postion').show(200);  
       }

       if (template_value == '5' || template_value == '15' || template_value == '26') {
            jQuery('.aip_icon_picker').hide(200);
        }else{
            jQuery('.aip_icon_picker').show(200);  
        }
        
        if (template_value == '1') {
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        } else if( template_value == '2' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("disabled", true);
            jQuery("#plug_sttlayout option.layout-4").prop("enable", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        } else if( template_value == '3' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '4' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '5' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '6' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '7' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '8' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").hide();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '9' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '10' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '11' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("disabled", true);
            jQuery("#plug_sttlayout option.layout-4").prop("enable", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '12' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("disabled", true);
            jQuery("#plug_sttlayout option.layout-4").prop("enable", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '13' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("disabled", true);
            jQuery("#plug_sttlayout option.layout-4").prop("enable", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '14' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("disabled", true);
            jQuery("#plug_sttlayout option.layout-4").prop("enable", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '15' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("disabled", true);
            jQuery("#plug_sttlayout option.layout-4").prop("enable", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '16' ){
            template_else();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("disabled", true);
            jQuery("#plug_sttlayout option.layout-4").prop("enable", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '17' ){
            template17();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-4").prop("disabled", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").show();
            jQuery(".aip_btn_bdr_hvr_color").show();
        }else if( template_value == '18' ){
            jQuery(".aip_layout ").hide();
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '19' ){
            jQuery(".aip_layout ").hide();
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '20' ){
            jQuery(".aip_layout ").hide();
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '21' ){
            template_middle();
            jQuery(".aip_layout").show();
            jQuery("#plug_sttlayout option.layout-1").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-2").prop("enable", true);
            jQuery("#plug_sttlayout option.layout-3").prop("disabled", true);
            jQuery("#plug_sttlayout option.layout-4").prop("enable", true);
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".aip_btn_hvr_color").show();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '22' ){
            template_middle();
            jQuery(".aip_layout ").hide();
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();

            jQuery(".plug_stthover").hide();            
            jQuery(".aip_btn_hvr_color").hide();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if( template_value == '23' ||  template_value == '24' ||  template_value == '25'||  template_value == '26' ){
            template_else();
            jQuery(".plug_stthover").hide();
            jQuery(".plug_sttnormal").hide();
            jQuery(".aip_layout ").hide();
            jQuery(".aip_btn_color").hide();
            jQuery(".aip_btn_bg_color").hide();
            jQuery(".aip_bdr_color").hide();
            jQuery(".aip_btn_hvr_color").hide();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }else if(template_value == '27' ) {
            template_else();
            jQuery(".aip_layout").hide();
            jQuery(".aip_btn_color").show();
            jQuery(".aip_btn_bg_color").show();
            jQuery(".aip_bdr_color").show();
            jQuery(".plug_sttnormal").hide();
            jQuery(".aip_btn_hvr_color").hide();
            jQuery(".aip_btn_bg_hvr_color").hide();
            jQuery(".aip_btn_bdr_hvr_color").hide();
        }
        
        if( template_value == '22' ){
            jQuery(".plug_stthover").hide();      
            jQuery(".plug_sttnormal").show();
        }else if( template_value == '23' ||  template_value == '24' ||  template_value == '25'||  template_value == '26' ){
            jQuery(".plug_stthover").hide();
            jQuery(".plug_sttnormal").hide();
        }else if(template_value == '27' ) {
            jQuery(".plug_sttnormal").show();
            jQuery(".plug_stthover").hide();
        }else{
            jQuery(".plug_sttnormal").show();
            jQuery(".plug_stthover").show();
        }
    });

    jQuery('#plug_stttemplate').trigger('change');

    
    jQuery('#plug_sttanchor_top').change(function(){
        var anchor_value = jQuery(this).val();
        if(anchor_value == '2'){
            jQuery('.aip_element_id').show(200);
        }else{
            jQuery('.aip_element_id').hide(200);
        }
    });
    jQuery('#plug_sttanchor_top').trigger('change');
    if (jQuery('#plug_sttauto_hide').prop("checked")) {
        jQuery('.aip_auto_speed').fadeIn(200);
    }else{
        jQuery('.aip_auto_speed').fadeOut(200);
    }

    var offset_value = jQuery('#plug_sttoffset_option').val();

    if(offset_value == "2" ){
        jQuery('.aip_scroll_offset').show();
        jQuery('.aip_scroll_offset_per').hide();
    }else{
        jQuery('.aip_scroll_offset_per').show();
        jQuery('.aip_scroll_offset').hide();
    }
    

    jQuery('#plug_sttoffset_option').change(function(){   
        var offset_value = jQuery(this).val();
              
        if(offset_value == "2" ){
            jQuery('.aip_scroll_offset').show();
            jQuery('.aip_scroll_offset_per').hide();
        }else{
            jQuery('.aip_scroll_offset_per').show();
            jQuery('.aip_scroll_offset').hide();
        }
    });
    
    jQuery('#plug_sttauto_hide').change(function(){
        
        if (jQuery(this).prop("checked")) {
            jQuery('.aip_auto_speed').fadeIn(200);
        }else{
            jQuery('.aip_auto_speed').fadeOut(200);
        }
        
    }); 

    var btn_img_val = jQuery('#plug_sttbtnimg').val();
    if(btn_img_val == "1"){
        jQuery('.plug_sttbtn').removeClass('image_active');
        jQuery('.plug_sttimg').addClass('image_active');
    }else{
        jQuery('.plug_sttbtn').addClass('image_active');
        jQuery('.plug_sttimg').removeClass('image_active');
    }

    jQuery('#plug_sttbtnimg').change(function(){
        var btn_img_val = jQuery(this).val();
        if(btn_img_val == "1"){
            jQuery('.plug_sttbtn').removeClass('image_active');
            jQuery('.plug_sttimg').addClass('image_active');
        }else{
            jQuery('.plug_sttbtn').addClass('image_active');
            jQuery('.plug_sttimg').removeClass('image_active');
        }
    });


    jQuery('.plug_sttupload_image_button').click(function() {
        var plug_sttsend_attachment_bkp = wp.media.editor.send.attachment;
        var button = jQuery(this);
        wp.media.editor.send.attachment = function(props, attachment) {
            jQuery(button).parent().prev().attr('src', attachment.url);
            jQuery(button).prev().val(attachment.id);
            wp.media.editor.send.attachment = plug_sttsend_attachment_bkp;
        }
        wp.media.editor.open(button);
        return false;
    });
    
    // The "Remove" button (remove the value from input type='hidden')
    jQuery('.plug_sttremove_image_button').click(function() {
        var answer = confirm('Are you sure?');
        if (answer == true) {
            var src = jQuery(this).parent().prev().attr('data-src');
            jQuery(this).parent().prev().attr('src', src);
            jQuery(this).prev().prev().val('');
        }
        return false;
    });

});