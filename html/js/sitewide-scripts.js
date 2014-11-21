// JavaScript Document


$(document).ready(function(){
	/**************************************************************************************/		   
	/**** BEGIN _ Index.php - Slidedown panel overlay animation ***********/
	/**************************************************************************************/
	var timeout1 = 1000;
	var timeout_mob1 = 10000;
	var closetimer1 = 1000;
	var panelFlag = 0;

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('#hide_btn').hide();
		if(panelFlag==0){
			$('#index_main_panel').delay(1000).animate({"top": "272px", "height":"218px"}, 500, function(){
				//$('#hide_btn').html('&#8595;');
				$(this).delay(10000).animate({"top": "445px","height":"45px"}, 500,function(){
					$('#index_main_panel').bind('touchstart', panel_open_mob);
				});
				panelFlag=1;
			});
		}
				
		function panel_open_mob(){
			if(panelFlag==1){
				$('#index_main_panel').unbind('touchstart', panel_open_mob);
				$(this).animate({ "top": "272px", "height":"218px"}, 500, function(){
					$(this).delay(10000).animate({"top": "445px","height":"45px"}, 500, function(){
						$('#index_main_panel').bind('touchstart', panel_open_mob);
					});
				});
			}
		}
	} else {
		$('#hide_btn').hide();
		$('#index_main_panel').delay(1000).animate({"top": "272px", "height":"218px"}, 500, function(){
			$('#hide_btn').show()
		});
		
		function panel_close (){
			$('#index_main_panel').animate({"top": "445px","height":"45px"}, 500);
			
		}
				
		function panel_open (){
			$('#index_main_panel').animate({ "top": "272px", "height":"218px"}, 500);
		}
		
		//$('#index_main_panel').bind('click', panel_open);
		//$('#index_main_panel').bind('mouseleave',  panel_close);
		
		$('#index_main_panel, #hide_btn').toggle(function(){
			panel_close();
			$('#hide_btn').show().html('&#8593;');
		}, function(){
			panel_open();
			$('#hide_btn').show().html('&#8595;');	
		});
	}


	/**************************************************************************************/		   
	/**** BEGIN _ MAIN NAVIGATION MENU ROLLOVER IMAGE/LINK Function - SITE WIDE ***********/
	/**************************************************************************************/
	var imgsrc= null;
	// Preload all rollovers #mainContentLH img,
	$(".rollButton img, .moreInfoDiv a img").each(function() {
		// Set the original src
		rollsrc = $(this).attr("src");
		rollON = rollsrc.replace(/.png$/ig,"_over.png");
		$("<img>").attr("src", rollON);
	});
	
	// Navigation rollovers #mainContentLH a, #hdrRightSectA a, #hdrRightSectB1 a, #hdrRightSectB2 a, #moreInfoLink a
	$(".rollButton, .moreInfoDiv a").mouseover(function(){
		
		imgsrc = $(this).children("img").attr("src");
		matches = imgsrc.match(/_over/);
		
		// don't do the rollover if state is already ON
		if(!matches) {
			imgsrcON = imgsrc.replace(/.png$/ig,"_over.png"); // strip off extension
			$(this).children("img").attr("src", imgsrcON);
		}		
	});	
	
	$(".rollButton, .moreInfoDiv a").mouseout(function(){
		$(this).children("img").attr("src", imgsrc);
	});
	$(".rollButton, .moreInfoDiv a").click(function(){
		$(this).children("img").attr("src", imgsrc);
	});	
});