// jQuery Modal Popup JavaScript Document

$(function() {
	$('.specList a').button({
		icons : {
			primary : "ui-icon-newwin"
		}
	});

	$('.modal-dialog').hide();
	$('a.modal-link').click(function() {
		var uid = $(this).attr('id');
		$('#modal-dialog-' + uid).dialog({
			open : function(event, ui) {
				$(this).dialog("option", "title", $(this).attr('title'));
			},
			autoOpen : false,
			modal : true,
			width : 'auto',
			height : 'auto',
			draggable : false,
			resizable : false,
			zIndex : 3999,
			close: function(event, ui){
            	//$(this).destroy();
            	//$(this).dialog('close');
            	$("#image").attr('src', '');
        	}
		}).dialog('open');
		return false;
	});

	$('a.ajax').click(function(event) {
		event.preventDefault();
		PreviewImage($(this).attr('href'));
		imageTitle = $(this).attr('title');
		//var loadingPic = $('<img src=".images/animated/spinner.gif"');
		//$(loadingPic).show();$("#message").html('<span>Loading...</span>');
	});

});

	
var PreviewImage = function(uri) {
	
	//Get the HTML Elements
	imageDialog = $("#dialog");
	imageTag = $('#image');
	
	//Set the image src
	imageTag.attr('src', uri);
 	srcUrl = imageTag.attr('src');
 	
 	//$(imageDialog).prepend('<span id=\"spin\"><img src="images/animated/spinner.gif"/></span>');
	function hideLoadingImage() {
	    $('#spin').remove();
	}
	
	function showLoadingImage() {
   		$(imageDialog).html('<span id=\"spin\"><img src="images/animated/spinner.gif"/></span>');
	}
	
  	var img = new Image();
  	
	//When the image has loaded, display the dialog
	imageTag.load(function() {	

		img.src = srcUrl;
		img.w= parseInt(img.width +25);
		
		$('#dialog').dialog({
			width : img.w,
			height: 'auto',
			title : imageTitle,
			modal : true,
			resizable : false,
			draggable : false,
			zIndex : 3999,
			close: function(event, ui){
            	//$(this).destroy();
            	//$(this).dialog('close');
            	$("#image").attr('src', '');
        	}
		});
	});
}
