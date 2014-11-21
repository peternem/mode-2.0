// JavaScript Document

var timeout = 4000;
var closetimer = 0;
var ddmenuitem = 0;
var flag = 0;

function jsddm_close(){	
	flag=0;
	
	if(flag==0){
		$('#jsddm li ul').stop(true, true).slideUp(200);
	}
}

function jsddm_timer(){	
	closetimer = window.setTimeout(jsddm_close, timeout);
}

function jsddm_canceltimer(){	
	if(closetimer){	
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

$(document).ready(function () {    
    $('#jsddm li').click(
        function () {
        	if(flag==0){
             	flag = 1;
	            $('ul', this).stop(true, true).slideDown(200);
	            jsddm_canceltimer();
				jsddm_timer();
            } else if(flag==1){
             	flag = 0;
	            $('ul', this).stop(true, true).slideUp(200);
	            jsddm_canceltimer();
             } else {
             	flag = 0;
	            $('ul', this).stop(true, true).slideDown(200);
	            jsddm_canceltimer();
             }
        },
        function () {
             if(flag==1){
             	$('ul', this).stop(true, true).slideUp(200);
             	flag = 0;
             	jsddm_canceltimer();
             } else if(flag==0) {
             	$('ul', this).stop(true, true).slideDown(200);
             	flag = 1;
             	jsddm_timer();
             } else {
             	$('ul', this).stop(true, true).slideUp(200);
             	flag = 0;
             	jsddm_canceltimer();
             }      
        });
});