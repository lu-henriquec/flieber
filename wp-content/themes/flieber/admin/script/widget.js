function media_upload(button_class) {
	var _custom_media = true,
	_orig_send_attachment = wp.media.editor.send.attachment;

	// jQuery('.button.custom_media_button').each( function(){
	// 	jQuery(this).click( function(e) {
	// 		e.preventDefault();
	// 		var self = jQuery(this);
	// 		var button_id ='#'+self.attr('id');
	// 		var button = button_id;
	// 		//var id = button.attr('id').replace('_button', '');
	// 		_custom_media = true;
	// 		wp.media.editor.send.attachment = function(props, attachment){
	// 			var context = self.parent();
	// 			if ( _custom_media  ) {
	// 				console.log(context.parent().find('.custom_media_url'));
	// 				context.parent().find('.custom_media_url').val(attachment.url);
	// 				context.parent().find('.custom_media_image').attr('src',attachment.url).css('display','block');
	// 			} else {
	// 				return _orig_send_attachment.apply( button_id, [props, attachment] );
	// 			}
	// 		}
	// 		wp.media.editor.open(button);
	// 		return false;
	// 	});
	// });
	jQuery('body').on('click', '.button.custom_media_button',function(e) {
		e.preventDefault();
		var self = jQuery(this);
		var button_id ='#'+jQuery(this).attr('id');
		var button = button_id;
		//var id = button.attr('id').replace('_button', '');
		_custom_media = true;
		wp.media.editor.send.attachment = function(props, attachment){
			var context = self.parent();
			if ( _custom_media  ) {
				console.log(context.parent().find('.custom_media_url'));
				context.parent().find('.custom_media_url').val(attachment.url);
				context.parent().find('.custom_media_image').attr('src',attachment.url).css('display','block');
			} else {
				return _orig_send_attachment.apply( button_id, [props, attachment] );
			}
		}
		wp.media.editor.open(button);
		return false;
	});
}
media_upload();