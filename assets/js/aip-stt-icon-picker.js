/* Icon Picker */

(function($) {

	$.fn.iconPicker = function( options ) {
		var options = ['dashicons','dashicons']; // default font set
		var icons;
		$list = $('');
		function font_set() {
			if (options[0] == 'dashicons') {
				icons = [
					"blank",
					"arrow-up",
					"arrow-up-alt",
					"arrow-up-alt2",
					"arrow-down-alt2",
				]; 
				options[1] = 'dashicons';
			} else if (options[0] == 'fa') {
			icons = [
				"blank",
				"eject",
				"angle-double-up",
				"angle-double-down",
				"angle-up",
				"arrow-up",
				"arrow-circle-up",
				"arrow-circle-o-up",
				"caret-up",
				"chevron-up",
				"chevron-circle-up",
				"hand-o-up",
				"level-up",
				"long-arrow-up",
				"toggle-up",				
				"thumbs-o-up",
				"thumbs-up",	
			];
			options[1] = "fa";
		}
	};
	font_set();

	function build_list($popup,$button,clear) {
	  $list = $popup.find('.plug_stticon-picker-list');
	  if (clear==1) { $list.empty(); // clear list //
	  }
	  for (var i in icons) {
		  $list.append('<li data-icon="'+icons[i]+'"><a href="#" title="'+icons[i]+'"><span class="'+options[0]+' '+options[1]+'-'+icons[i]+'"></span></a></li>');
	  };
				$('a', $list).click(function(e) {
					e.preventDefault();
					var title = $(this).attr("title");
					$target.val(options[0]+"|"+options[1]+"-"+title);
					$button.removeClass().addClass("button plug_stticon-picker "+options[0]+" "+options[1]+"-"+title);
					removePopup();
				});
	};
	
			function removePopup(){
				$(".plug_stticon-picker-container").remove();
			}
	

			$button = $('.plug_stticon-picker');
			$button.each( function() {
				$(this).on('click.iconPicker', function() {
					createPopup($(this));
				});
			});


			function createPopup($button) {
				$target = $($button.data('target'));
				$popup = $('<div class="plug_stticon-picker-container"> \
						<div class="plug_stticon-picker-control" /> \
						<ul class="plug_stticon-picker-list" /> \
					</div>')
					.css({
						'top': $button.offset().top,
						'left': $button.offset().left
					});
				build_list($popup,$button,0);
				var $control = $popup.find('.plug_stticon-picker-control');
				$control.html('<p>Select Font Family : <select><option value="dashicons">Dashicons</option><option value="fa">Font Awesome</option></select></p>'+
				// '<a data-direction="back" href="#"><span class="dashicons dashicons-arrow-left-alt2"></span></a> '+
				'<input type="text" class="" placeholder="Search" />'+
				// '<a data-direction="forward" href="#"><span class="dashicons dashicons-arrow-right-alt2"></span></a>'+
				'');

				$('select', $control).on('change', function(e) {
					e.preventDefault();
					if (this.value != options[0]) {
						options[0] = this.value;
						font_set();
						build_list($popup,$button,1);
					};
				});

				$('a', $control).click(function(e) {
					e.preventDefault();
					if ($(this).data('direction') === 'back') {
						//move last 25 elements to front
						$('li:gt(' + (icons.length - 26) + ')', $list).each(function() {
							$(this).prependTo($list);
						});
					} else {
						//move first 25 elements to the end
						$('li:lt(25)', $list).each(function() {
							$(this).appendTo($list);
						});
					}
				});

				$popup.appendTo('body').show();

				$('input', $control).on('keyup', function(e) {
					var search = $(this).val();
					if (search === '') {
						//show all again
						$('li:lt(25)', $list).show();
					} else {
						$('li', $list).each(function() {
							if ($(this).data('icon').toString().toLowerCase().indexOf(search.toLowerCase()) !== -1) {
								$(this).show();
							} else {
								$(this).hide();
							}
						});
					}
				});

				$(document).mouseup(function (e){
					if (!$popup.is(e.target) && $popup.has(e.target).length === 0) {
						removePopup();
					}
				});
			}
	}

	$(function() {
		$('.plug_sttplug_stticon-picker').iconPicker();
	});

}(jQuery));