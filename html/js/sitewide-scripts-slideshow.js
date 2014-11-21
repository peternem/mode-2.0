// JavaScript Document

/**************************************************************************************/		   
/**** BEGIN _ Slideshow Function - SITE WIDE ***********/
/**************************************************************************************/
	
$(function() {
	var slideshow = $('#slideshow');
	
	var toggle = $('#pause').click(function() {
		var paused = slideshow.is(':paused');
		slideshow.cycle(paused ? 'resume' : 'pause', true);
	});
	
	// $('#next').toggle(function() {
		// $('#next').css({'border': 'solid #999999 1px', 'color':'#999999'});
	// }, function() {
		// $('#next').css({'border': 'solid #ffffff 1px', 'color':'#ffffff'});
	// });
	var total = $('#slideshow').children().length;   
	
	//slideshow.before('<div id="slideShowControls" class="slide_Index" ></a><div id="pgr">').cycle({
	slideshow.cycle({
		fx: 'scrollHorz',
		speed: 1500,
		timeout: 10000, 
		prev:'#prev',
		next:'#next',
		pause: true,
		paused: function(cont, opts, byHover) {
			!byHover && toggle.html('Resume');
		},
		resumed: function(cont, opts, byHover) {
			!byHover && toggle.html('Pause');
		},
		after: function(currSlideElement, nextSlideElement, options, forwardFlag) {
			var xyz = (options.currSlide + 1) + '/' + (options.slideCount);
			$('#pgr').text(xyz);
		}
	});
	
	$('#slideshow_Prod').before('<div id="slideShowControls" class="slide_Prod" ><ul id="pgr">').cycle({
		fx: 'scrollHorz',
		speed: 1500,
		timeout: 10000, 
		pager:  '#pgr',
		//before: function() { if (window.console) console.log(this.src); }
		pagerAnchorBuilder: function(idx, slide) {
			var xxx = idx + 1;
            return '<li><a href="#">' + xxx + '</a></li>';
        }
	});
});
