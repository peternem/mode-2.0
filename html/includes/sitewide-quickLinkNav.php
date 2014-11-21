<ul id="qLink">
	<li>
		<a href="index.php" title="">
			<span>Home</span><span class="angleQuoteMark">&raquo;</span>
		</a>
	</li>
	
	<?php if(($nameX == 'Aga') ||($nameX == 'Heartland') || ($nameX == 'American Range') || ($nameX == 'Vent-A-Hood')) { ?>
	<li>
		<a href="products.php" title=""><span>Products</span><span class="angleQuoteMark">&raquo;</span><span></a>
	</li>
	<?php } ?>
	
	<?php if(($nameX == 'Marvel Products')) { ?>
	<li>
		<a href="products.php" title=""><span>Products</span><span class="angleQuoteMark">&raquo;</span></a>
	</li>
	<?php } ?>
	
	<?php if(($nameX == 'Marvel') ||($nameX == 'Marvel Professional') || ($nameX == 'Marvel Outdoor')) { ?>
	<li>
		<a href="products.php" title=""><span>Products</span><span class="angleQuoteMark">&raquo;</span></a>
	</li>
	<li>
		<a href="marvel_products.php" title=""><span>Marvel Products</span><span class="angleQuoteMark">&raquo;</span></a>
	</li>
	<?php } ?>
	
	<?php if($nameX == 'Promotions') { ?>
	<li>
		<a href="<?php echo $filename ?>" title=""><span><?php echo $nameX ?></span></a>
	</li>
	
	<?php } else {?>
	<li>
		<a href="<?php echo $filename ?>" title=""><span><?php echo $nameX ?></span></a>
	</li>
	<?php }?>
</ul>