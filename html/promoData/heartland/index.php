<!DOCTYPE HTML>
<html>
<body>
<body>
<h3 class="h3TabContent">Heartland Promotional Documents</h3>
<h4>Our brochure documents are grouped together by brand.</h4>
<?php
	$dir = 'brochures/';
	$exclude = array('index.php', 'create_thumbs.php','thumbs');
	// without trailing slash, can be absolute paths such as '/home/jim/public_html' or relative paths such as 'samples'
	function listFolderFiles($dir, $exclude) {
		$ffs = scandir($dir);
		echo '<ul class="specData">';
		foreach ($ffs as $ff) {
			if (is_array($exclude) and !in_array($ff, $exclude)) {
				if ($ff != '.' && $ff != '..' && $ff != 'thumbs' && $ff != 'images' && $ff != 'pdf' && $ff != 'pdfimage') {

					$ff1 = ucwords(str_replace('_', ' ', basename($ff)));

					if (!is_dir($dir . '/' . $ff)) {
						echo '<li class=\'boxListItem\'><a href="promoData/heartland/' . ltrim($dir . '/' . $ff, './').'" title="'.pathinfo($ff, PATHINFO_FILENAME).'" target="_blank">';
						echo '<img src=\'promoData/heartland/pdfimage/' . pathinfo($ff, PATHINFO_FILENAME) . '.jpg\' class=\'box\'/></a>';
						echo '<a href="promoData/heartland/' . ltrim($dir . '/' . $ff, './') . '">' . strtoupper(substr($ff1, 0, 20)) . '</a>';
					} else {
						echo '<div class=\'header\'>' . $ff1 . '</div>';
					}

					if (is_dir($dir . '/' . $ff)) {
						listFolderFiles($dir . '/' . $ff, $exclude);
						//listFolderFiles('.',array('index.php','edit_page.php')); 
					}
					echo '</li>';
				}
			}
		}
		echo '</ul>';
	}

	listFolderFiles('.', array('index.php', 'edit_page.php'));
?>
</body>
</html> 