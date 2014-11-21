// JavaScript Document

$(function() {
	 /**************************************************************************************/		   
	/**** BEGIN _ UI Tab Function - SITE WIDE ***********/
	/**************************************************************************************/
	// $('.ui-tabs .tabbox1').tabs().removeClass('ui-widget-header');
	// $('.ui-tabs-panel').removeClass('ui-widget-content ui-corner-bottom');
// 
	// alert('sitewide-scripts-tabs js file!');
	
	$("#tabs").tabs().removeClass('ui-widget-content').addClass('ui-tabs-vertical ui-helper-clearfix');
		$("#tabs li").removeClass('ui-corner-top').addClass('ui-corner-left');
		$('.ui-tabs-nav').removeClass('ui-corner-all ui-widget-header');
		$('.ui-tabs-nav li').removeClass('ui-state-default');
		$('.ui-tabs-nav li').removeClass('ui-corner-left');
		
});