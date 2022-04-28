<div class="tab" role="tabpanel">
	<ul class="nav nav-tabs">
		<li class="nav-item">
		<a class="nav-link active" data-toggle="tab" href="#layout-settings"><?php _e('Layout Settings','scroll-to-top') ?></a>
		</li>
		<li class="nav-item ">
		<a class="nav-link" data-toggle="tab" href="#action-setting"><?php _e('Action Settings','scroll-to-top') ?></a>
		</li>
		<li class="nav-item plug_sttbtn">
		<a class="nav-link" data-toggle="tab" href="#layout-design"><?php _e('Layout Design Settings','scroll-to-top') ?></a>
		</li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active " id="layout-settings">
			<h3><?php _e('Layout Settings','scroll-to-top') ?></h3>
			<table class="form-table">
				<tr valign="top" class="aip_btn_img">
					<th scope="row" style="width: 270px;">
						<label for="stt_btn_img">
							<?php _e('Button or Image','scroll-to-top') ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Button - It will be display as button.','scroll-to-top') ?></br><?php _e('Image - it will show you image that upload by admin.','scroll-to-top') ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_btn_img_type = array(
								'1' => __('Button','scroll-to-top'),
								'2' => __('Image','scroll-to-top'),
							);              
							?>
							<select name="plug_stt_general[btn_img]" id="plug_sttbtnimg" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 3 ; $i++) { 
								?>
								<option value="<?php echo $i; ?>" class="btn_img-<?php echo $i; ?>" <?php echo ( isset($get_btn_img) && $get_btn_img == $i)?"selected":""; ?> > <?php echo $array_btn_img_type[$i]; ?></option>
								<?php
								}
								?>                  
							</select>
					</td>
				</tr>
				<tr valign="top" class="aip_media_image plug_sttimg">
					<th scope="row" style="width: 270px;">
						<label for="stt_media_upload">
							<?php _e('Custom Image Upload','scroll-to-top');?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Please select image from media library.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
						$default_image = plug_sttimages .'back-to-top.png';
							if ( !empty( $get_options['image_upload'] ) ) {
								$image_attributes = wp_get_attachment_image_src( $get_options['image_upload']);
								$src = $image_attributes[0];
								$value = $get_options['image_upload'];
							} else {
								$src = $default_image;
								$value = '';
							}
						?>
						<div class="plug_sttupload">
							<img class="plug_sttimage" data-src="<?php echo  $default_image; ?>" src="<?php echo  $src ?>"/>
							<div>
								<input type="hidden" name="plug_stt_general[image_upload]" id="plug_stt_general[image_upload]" value="<?php echo $value; ?>" />
								<button type="submit" class="plug_sttupload_image_button button"><?php _e('Image Upload','scroll-to-top');?></button>
								<button type="submit" class="plug_sttremove_image_button button"><?php _e('&times;','scroll-to-top');?></button>
							</div>
						</div>
							
					</td>
				</tr>
				<tr valign="top" class="plug_sttbtn">
					<th scope="row">
						<label for="stt_template">
							<?php _e('Scroll To Top Template','scroll-to-top') ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Choose different styles of predefined templates.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<select name="plug_stt_general[templet]" id="plug_stttemplate" class="large-select plug_sttdropdown">
							<option value=""><?php _e('Select Template','scroll-to-top') ?></option>
							<?php
							for ($i=1; $i < 28 ; $i++) { 
								if(!empty($get_templet)){
							?>
								<option value="<?php echo $i; ?>" <?php if ($get_templet == $i){
									echo  " selected";
								} ?> ><?php _e('Template -','scroll-to-top') ?> <?php echo $i; ?></option>
							<?php
								}else{
									?>
									<option value="<?php echo $i; ?>" ><?php _e('Template -','scroll-to-top') ?> <?php echo $i; ?></option>
									<?php
								}
							}
							?>
						</select>
							<img class="aip_stt-image " src="<?php  
							if(!empty($get_templet) && isset($get_templet)){
								echo plug_sttimages ?> /template-<?php echo $get_templet; ?>.png <?php } ?>">
					</td>
				</tr>
			
				
				
				<tr valign="top" class="aip_btn_name plug_sttbtn">
					<th scope="row" style="width: 270px;">
						<label for="stt_btn_name">
							<?php _e('Button Text','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Button texts that will be appear in button. (Best compatibility to max character 8 )','scroll-to-top') ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							if (!empty($get_btn_name)) {
								$get_btn_name  = $get_btn_name;
							}else{
								$get_btn_name = '';
							}
						?>
						<input type="text" class="" name="plug_stt_general[btn_name]" value="<?php echo $get_btn_name; ?>">
				
					</td>
				</tr>
				<tr valign="top" class="aip_icon_picker plug_sttbtn">
					<th scope="row">
						<label for="aip_sst_icon_picker_val">
							<?php _e( 'Pick Icon','scroll-to-top' ); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e( 'Please Select Icon for scroll to top element.','scroll-to-top' ); ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php if( isset( $get_top_icon ) && !empty($get_top_icon) )  {
							$aip_icon_show = explode('|',$get_top_icon);
							$aip_icon_get = $aip_icon_show[0].' '.$aip_icon_show[1];
						}?>
						<input class="regular-text" type="hidden" id="plug_stticon_picker_val" name="plug_stt_general[top_icon]" value="<?php if( isset( $get_top_icon ) ) { echo   $get_top_icon ; } ?>"/>
						<div id="plug_sttpreview_icon" data-target="#plug_stticon_picker_val" class="button plug_stticon-picker <?php if(isset($aip_icon_get)){echo $aip_icon_get ;} ?>"></div>
					</td>
				</tr>
				<tr valign="top" class="aip_layout plug_sttbtn">
					<th scope="row" style="width: 270px;">
						<label for="stt_layout">
							<?php _e('Layout','scroll-to-top') ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Please select layout for scroll to top element.','scroll-to-top') ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_layout_type = array(
								'1' => __('Square','scroll-to-top'),
								'2' => __('Round Square','scroll-to-top'),
								'3' => __('Circle','scroll-to-top'),
								'4' => __('Pill','scroll-to-top'),
							);              
							?>
							<select name="plug_stt_general[layout]" id="plug_sttlayout" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 5 ; $i++) { 
								?>
								<option value="<?php echo $i; ?>" class="layout-<?php echo $i; ?>" <?php echo ( isset($get_layout) && $get_layout == $i)?"selected":""; ?> > <?php echo $array_layout_type[$i]; ?></option>  
								<?php
								}
								?>                  
							</select>
					</td>
				</tr>
				<tr valign="top" class="aip_postion">
					<th scope="row" style="width: 270px;">
						<label for="stt_postion">
							<?php _e('Postion','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Display button for diffretn postion.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_postion_type = array(
								'1' => __('Top Left','scroll-to-top'),
								'2' => __('Top Middle','scroll-to-top'),
								'3' => __('Top Right','scroll-to-top'),
								'4' => __('Bottom Left','scroll-to-top'),
								'5' => __('Bottom Middle','scroll-to-top'),
								'6' => __('Bottom Right','scroll-to-top'),
								'7' => __('Middle left','scroll-to-top'),
								'8' => __('Middle Right','scroll-to-top'),
							);              
							?>
							<select name="plug_stt_general[postion]" id="plug_sttpostion" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 9 ; $i++) { 
								?>
									<option value="<?php echo $i; ?>" class="postion-<?php echo $i; ?>" <?php echo ( isset($get_postion) && $get_postion == $i)?"selected":""; ?> ><?php echo $array_postion_type[$i]; ?></option>  
								<?php
								}
								?>
							</select>
						
					</td>
				</tr>
				<tr valign="top" class="aip_s_animation">
					<th scope="row" style="width: 270px;">
						<label for="stt_starting_animation">
							<?php _e('Start Animation','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('When elemant show animation effect happen.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_s_animation_type = array(
								'1' => __('Default','scroll-to-top'),
								'2' => __('Bounce in','scroll-to-top'),
								'3' => __('Fade in','scroll-to-top'),
								'4' => __('Rotate in','scroll-to-top'),
								'5' => __('Slide up','scroll-to-top'),
								'6' => __('Zoom in','scroll-to-top'),
							);              
							?>
							<select name="plug_stt_general[s_animation]" id="plug_stts_animation" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 7 ; $i++) {
								?>
								<option value="<?php echo $i; ?>" <?php echo ( isset($get_s_animation) && $get_s_animation == $i)?"selected":""; ?> > <?php echo $array_s_animation_type[$i]; ?></option>
								<?php
								}
								?>
							</select>
					</td>
				</tr>
				<tr valign="top" class="aip_e_animation">
					<th scope="row" style="width: 270px;">
						<label for="stt_ending_animation">
							<?php _e('End Animation','scroll-to-top') ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('When elemant hide animation effect happen.','scroll-to-top') ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_s_animation_type = array(
								'1' => __('Default','scroll-to-top'),
								'2' => __('Bounce Out','scroll-to-top'),
								'3' => __('Fade Out','scroll-to-top'),
								'4' => __('Rotate Out','scroll-to-top'),
								'5' => __('Slide Out','scroll-to-top'),
								'6' => __('Zoom Out','scroll-to-top'),
							);              
							?>
							<select name="plug_stt_general[e_animation]" id="plug_stte_animation" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 7 ; $i++) { 
								?>
								<option value="<?php echo $i; ?>" <?php echo ( isset($get_e_animation) && $get_e_animation == $i)?"selected":""; ?> > <?php echo $array_s_animation_type[$i]; ?></option>  
								<?php
								}
								?>
							</select>
					</td>
				</tr>
				<tr valign="top" class="aip_hvr_animation">
					<th scope="row" style="width: 270px;">
						<label for="stt_hvr_animation">
							<?php _e('Hover Animation','scroll-to-top') ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Hover animation happen when mouse over on element.','scroll-to-top') ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_hvr_animation_type = array(
								'1' => __('Default','scroll-to-top'),
								'2' => __('Grow','scroll-to-top'),
								'3' => __('Pulse','scroll-to-top'),
								'4' => __('Pop','scroll-to-top'),
								'5' => __('Bounce In','scroll-to-top'),
								'6' => __('Bounce Out','scroll-to-top'),
								'7' => __('Float','scroll-to-top'),
								'8' => __('Bob','scroll-to-top'),
								'9' => __('Wobble Horizontal','scroll-to-top'),
								'10' => __('Wobble Vertical','scroll-to-top'),
								'11' => __('Buzz Out ','scroll-to-top'),
							);              
							?>
							<select name="plug_stt_general[hvr_animation]" id="plug_stthvr_animation" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 11 ; $i++) { 
								?>
								<option value="<?php echo $i; ?>" <?php echo ( isset($get_hvr_animation) && $get_hvr_animation == $i)?"selected":""; ?> > <?php echo $array_hvr_animation_type[$i]; ?></option>
								<?php
								}
								?>                  
							</select>
					</td>
				</tr>
			</table>
		</div>
		<div class="tab-pane " id="action-setting">
			<h3> <?php _e('Action Settings','scroll-to-top'); ?> </h3>
			<table class="form-table">
				<tr valign="top" class="aip_offset_option">
					<th scope="row" style="width: 270px;">
						<label for="stt_ending_animation">
							<?php _e('Scroll Offset from','scroll-to-top') ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Scroll button placement in pixal and percenatge.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_offset_option_type = array(
								'1' => __('Percentage','scroll-to-top'),
								'2' => __('Pixal','scroll-to-top'),
							);              
							?>
							<select name="plug_stt_general[offset_option]" id="plug_sttoffset_option" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 3 ; $i++) { 
								?>
								<option value="<?php echo $i; ?>" <?php echo ( isset($get_offset_option) && $get_offset_option == $i)?"selected":""; ?> > <?php echo $array_offset_option_type[$i]; ?></option>
								<?php
								}
								?>
							</select>
					</td>
				</tr>
				<tr valign="top" class="aip_scroll_offset">
					<th scope="row">
						<label for="stt_scroll_offset">
							<?php _e('Scroll Offset','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('A numeric value show to button from to of the page in pixal.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<input type="text" class="" name="plug_stt_general[scroll_offset]" value="<?php if(isset($get_scroll_offset)){echo $get_scroll_offset ;} ?>">
					</td>
				</tr>
				
				<tr valign="top" class="aip_scroll_offset_per">
					<th scope="row">
						<label for="stt_scroll_offset_perce">
							<?php _e('Scroll Offset Percentage','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('A numeric value show to button from to of the page in percentage.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<input type="number" class="" name="plug_stt_general[scroll_offset_perce]" value="<?php if(isset($get_scroll_offset_perce)){echo $get_scroll_offset_perce ;} ?>">
					</td>
				</tr>
				<tr valign="top" class="aip_scroll_speed">
					<th scope="row">
						<label for="stt_scroll_speed">
							<?php _e('Scroll Speed','scroll-to-top') ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Set scroll speed. a numeric value of Scroll speed in ms.','scroll-to-top') ?></span>
							</div>
						</label>
					</th>
					<td>
						<input type="text" class="" name="plug_stt_general[scroll_speed]" value="<?php if(isset($get_scroll_speed)){echo $get_scroll_speed ;} ?>">
					</td>
				</tr>
				<tr valign="top" class="aip_mobile_hide">
					<th scope="row">
						<label for="stt_mobile_hide">
							<?php _e('Mobile Hide','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('An Element hide on mobile device.(below 767px hide.)','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
							<div class="plug_sttcheckbox">
								<input id="plug_stthide_selector" type="checkbox" name="plug_stt_general[hide_mobile]" class="aip_astt_switch" value="1" <?php echo ( isset($get_hide_mobile))?" checked":""; ?> >
								<label for="plug_stthide_selector"></label>
							</div>
					</td>
				</tr>
				<tr valign="top" class="aip_auto_hide">
					<th scope="row">
						<label for="stt_auto_hide">
							<?php _e('Auto Hide','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Auto Hide button after few second.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
							<div class="plug_sttcheckbox">
								<input id="plug_sttauto_hide" type="checkbox" name="plug_stt_general[auto_hide]" class="aip_astt_switch" value="1" <?php echo ( isset($get_auto_hide))?" checked":"";  ?> >
								<label for="plug_sttauto_hide"></label>
							</div>
					</td>
				</tr>
				<tr valign="top" class="aip_auto_speed">
					<th scope="row">
						<label for="stt_auto_hide_speed">
							<?php _e('Auto Hide Speed','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Please Enter value of auto hide speed in ms.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<input type="text" class="" name="plug_stt_general[auto_hide_speed]" value="<?php if(isset($get_auto_hide_speed)){echo $get_auto_hide_speed ;} ?>">
					</td>
				</tr>
				<tr valign="top" class="aip_anchor_top">
					<th scope="row">
						<label for="stt_anchor_top">
							<?php _e('Scroll To Top Postion','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Scroll To Top Postion','scroll-to-top'); ?><?php _e('Please select element position.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_anchor_top_type = array(
								'1' => __('Top','scroll-to-top'),
								'2' => __('Element ID','scroll-to-top'),
							);
							?>
							<select name="plug_stt_general[anchor_top_option]" id="plug_sttanchor_top" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 3 ; $i++) {
								?>
								<option value="<?php echo $i; ?>" <?php echo ( isset($get_anchor_top_option) && $get_anchor_top_option == $i)?"selected":""; ?> > <?php echo $array_anchor_top_type[$i]; ?></option>
								<?php
								}
								?>
							</select>
					</td>
				</tr>
				<tr valign="top" class="aip_element_id">
					<th scope="row">
						<label for="stt_element_id">
							<?php _e('Element ID','scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Set target div id on click e event.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<input type="text" class="" name="plug_stt_general[element_id]" value="<?php if(isset($get_element_id)){echo $get_element_id ;} ?>">
					</td>
				</tr>
				<tr valign="top" class="aip_display_show">
					<th scope="row">
						<label for="stt_display_show">
							<?php _e('Display on','scroll-to-top') ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e('Show only home page or all page.','scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td>
						<?php
							$array_display_show_type = array(
								'1' => __('All Page','scroll-to-top'),
								'2' => __('Home Page','scroll-to-top'),
							);
							?>
							<select name="plug_stt_general[display_option]" id="plug_sttdisplay_show" class="large-select plug_sttdropdown">
								<?php
								for ($i=1; $i < 3 ; $i++) {
								?>
								<option value="<?php echo $i; ?>" <?php echo ( isset($get_display_option) && $get_display_option == $i)?"selected":""; ?> > <?php echo $array_display_show_type[$i]; ?></option>
								<?php
								}
								?>
							</select>
					</td>
				</tr>
						
			</table>
		</div>
			<div class="tab-pane " id="layout-design">
				<h3 class="plug_sttnormal"> <?php _e( 'Layout Design Settings','scroll-to-top' ); ?> </h3>

			<table class="form-table">
				
				<tr valign="top" class="aip_btn_color">
					<th scope="row">
						<label for="stt_btn_text_color">
							<?php _e( 'Button color','scroll-to-top' ); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e( 'Button text and icon color','scroll-to-top' ); ?></span>
							</div>
						</label>
					</th>
					<td><input type="text" class="cs-wp-color-picker" name="plug_stt_general[text_color]" value="<?php if(isset($get_text_color)){echo $get_text_color ;} ?>" />
					</td>
				</tr>
				<tr valign="top" class="aip_btn_bg_color">
					<th scope="row">
						<label for="stt_btn_bg_color">
							<?php _e( 'Button Background color' ,'scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e( 'Button background color.' ,'scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td><input type="text" class="cs-wp-color-picker" name="plug_stt_general[bg_color]" value="<?php if(isset($get_bg_color)){echo $get_bg_color ;}  ?>" />
					</td>
				</tr>
				<tr valign="top" class="aip_bdr_color">
					<th scope="row">
						<label for="stt_btn_border_color">
							<?php _e( 'Button Border color' ,'scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e( 'Button Border color.' ,'scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td><input type="text" class="cs-wp-color-picker" name="plug_stt_general[bdr_color]" value="<?php if(isset($get_bdr_color)){echo $get_bdr_color;}  ?>" />
					</td>
				</tr>
				
			</table>
			<h3 class="plug_stthover" ><?php _e( 'Hover Desgin','scroll-to-top' ); ?></h3>
			<table class="form-table">
				<tr valign="top" class="aip_btn_hvr_color">
					<th scope="row">
						<label for="stt_btn_text_hvr_color">
							<?php _e( 'Button color','scroll-to-top' ); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e( 'Button hover text color and icon color.','scroll-to-top' ); ?></span>
							</div>
						</label>
					</th>
					<td><input type="text" class="cs-wp-color-picker" name="plug_stt_general[text_hvr_color]" value="<?php if(isset($get_text_hvr_color)){echo $get_text_hvr_color ;}    ?>" />
					</td>
				</tr>
				<tr valign="top" class="aip_btn_bg_hvr_color">
					<th scope="row">
						<label for="stt_btn_bg_hvr_color">
							<?php _e( 'Button Background color' ,'scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e( 'Button hover background color.' ,'scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td><input type="text" class="cs-wp-color-picker" name="plug_stt_general[bg_hvr_color]" value="<?php if(isset($get_bg_hvr_color)){echo $get_bg_hvr_color ;}  ?>" />
					</td>
				</tr>
				<tr valign="top" class="aip_btn_bdr_hvr_color">
					<th scope="row">
						<label for="stt_btn_bdr_color">
							<?php _e( 'Button Border color' ,'scroll-to-top'); ?>
							<div class="aip_stt-tooltip">
								<i class="fa fa-question"></i>
								<span class="aip_stt-tooltiptext aip_stt-tooltip-top"><?php _e( 'Button hover border color.' ,'scroll-to-top'); ?></span>
							</div>
						</label>
					</th>
					<td><input type="text" class="cs-wp-color-picker" name="plug_stt_general[bdr_hvr_color]" value="<?php if(isset($get_bdr_hvr_color)){echo $get_bdr_hvr_color;}  ?>" />
					</td>
				</tr>
			</table>
		</div>
	</div>	
	<span class="plug_sttsubmit_btn">
		<?php submit_button(); ?>
	</span>
</div>