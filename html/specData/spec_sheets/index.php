<html>
	<head>
		<!-- <script src="../../js/jquery-1.8.0.js"></script> -->
		<script>
		$(document).ready(function() {
			// $(".specData").click(function () {
				// //alert('test');
			// });
		});
		
		</script>
	</head>
	<body>
		<h3 class="h3TabContent">Spec Sheets</h3>
		<h4>Our spec sheets documents are grouped together by brand.</h4>
		<?php 
		$dir = 'spec_sheets/'; // without trailing slash, can be absolute paths such as '/home/jim/public_html' or relative paths such as 'samples'
		function listFolderFiles($dir,$exclude){
		    $ffs = scandir($dir);
		    echo '<ul class="specData">';
		    foreach($ffs as $ff){
		        if(is_array($exclude) and !in_array($ff,$exclude)){
		            if($ff != '.' && $ff != '..' && $ff != 'pdf' && $ff != 'pdfimage'){
		            		
		            	$ff1 =  ucwords(str_replace('_', ' ',basename($ff)));  
			        
			            if(!is_dir($dir.'/'.$ff)){
							echo '<li class=\'boxListItem\'><a href="specData/spec_sheets/'.$dir.'/'.$ff.'" title="'.pathinfo($ff, PATHINFO_FILENAME).'" target="_blank">';
		            		echo '<img src=\'specData/spec_sheets/'.$dir.'/pdfimage/' . pathinfo($ff, PATHINFO_FILENAME) . '.jpg\' class=\'box\'/></a>';
							echo '<a href="specData/spec_sheets/'.ltrim($dir.'/'.$ff,'./').'">'.strtoupper(substr($ff1, 0, 20)).'</a>';
			            } else {
			            	echo '<div class=\'header\'>'.$ff1.'</div>';   
			            }
			            
			            if(is_dir($dir.'/'.$ff)) {
			            	listFolderFiles($dir.'/'.$ff,$exclude);
						}
			            echo '</li>';
		            }
		        }
		    }
		    echo '</ul>';
		}
		listFolderFiles('.',array('index.php','edit_page.php'));
		?>


	</body>
</html>

