
<ul id="jsddm">
<!--  <li><a href="index1.php">Home</a></li>
  <li><a href="products.php" title="">Products</a>
    <ul>
      <li><a href="#">AGA</a></li>
      <li><a href="#">Heartland</a></li>
      <li><a href="#">Marvel</a></li>
      <li><a href="vent-a-hood.php">Vent-A-Hood</a></li>
    </ul>
  </li>
  <li><a href="services.php" title="">Services</a>
    <ul>
      <li><a href="#">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 2</a></li>
    </ul>
  </li>
  <li><a href="#" title="#">Profile</a></li>
  <li><a href="#" title="#">Dealer Locator</a></li>-->
   <?php if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)){
    	?>
         <li>&nbsp;</li>
         <?php
	 } else {
	 	?>
         
          <li><a href="dealer_tools.php" title="#">Dealer Tools</a>
           	<ul>
              <li><a href="#">Clearance</a></li>
              <li><a href="#">Discontinued</a></li>
              <li><a href="dealer_tools_pricing.php">Pricing</a></li>
            </ul></li>
        <?php
	 }?>
</ul>
<ul id="contactLink">
  <li class="contactLink"><a href="contact.php" title="#">Contact</a></li>
</ul>
