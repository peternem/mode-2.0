
// var timeout = 1000;
// var timeout_mob = 10000;
// var closetimer = 0;
// var ddmenuitem = 0;
// 
// function jsddm_open(){	
	// jsddm_canceltimer();
	// jsddm_close();
	// ddmenuitem = $(this).find('ul').eq(0).animate({
		// height:'50px'
		// },'fast').css({'visibility':'visible'});
// }
// 
// function jsddm_open_mob(){	
	// ddmenuitem = $(this).find('ul').eq(0).css({'visibility':'visible'});	
// }
// 
// function jsddm_close(){	
	// if(ddmenuitem){
		// ddmenuitem.css('visibility', 'hidden');
	// }
// }
// 
// function jsddm_timer(){	
	// closetimer = window.setTimeout(jsddm_close, timeout);
// }
// 
// function jsddm_timer_mob(){	
	// closetimer = window.setTimeout(jsddm_close, timeout_mob);
// }
// 
// function jsddm_canceltimer(){	
	// if(closetimer){	
		// window.clearTimeout(closetimer);
		// closetimer = null;
	// }
// }
// 
// $(document).ready(function(){
	// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		// $('#jsddm > li, #jsddm1 > li').bind('touchstart', jsddm_open_mob);
		// $('#jsddm > li, #jsddm1 > li').bind('touchstart',  jsddm_timer_mob);
// 
	// } else {
		// $('#jsddm > li, #jsddm1 > li').bind('mouseover', jsddm_open);
		// $('#jsddm > li, #jsddm1 > li').bind('mouseout',  jsddm_timer);
	// }
// });

//document.onclick = jsddm_close;

// JavaScript Document