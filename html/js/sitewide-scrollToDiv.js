// JavaScript Document

$(function() {

	/**************************************************************************************/		   
	/**** BEGIN _ goToDivScroll animation - jQuery UI tabs use this function***********/
	/**************************************************************************************/
	
	function goToDivScroll(id){
		      // Scroll
		    $('html,body').animate({
		    	scrollTop: $("#tabs").offset().top
		    	}, 'slow');
		}
		
		$("#tab-left > ul > li > a").click(function(e) { 
		      // Prevent a page reload when a link is pressed
		    e.preventDefault(); 
		      // Call the scroll function
		    goToDivScroll();           
		});

});