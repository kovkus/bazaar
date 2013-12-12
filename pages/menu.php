<div id="content-wrapper" class="content-wrapper">
	    	<div class="container clearfix">
	    		<!-- Primary Content -->
	    		<div class="grid_9">
	    			<div class="indent">
	    				<div class="box">
		    				<div class="box-inner">
		    					<h1 class="dotted">Menu (dnes)</h1>
		    					
		    					<!-- Menu Small Thumbs -->
		    					<ul class="menu menu__list unstyled">
		    					<?php
require "config.php";
$query = "SELECT * FROM menu_today ";
if ($result = mysqli_query($link, $query)) {
		$today_products_name = array();
		$today_products_price = array();
   		 while ($row = mysqli_fetch_assoc($result)) {
       	 array_push($today_products_name, $row[name]);
       	 array_push($today_products_price, $row[price]);
   		 }
}
$setted = "0";
foreach ($today_products_name as $key => $value) {
		$trimmed = trim($value, " \t.\0.\n");
		$trimmed2 = trim($today_products_name[0], " \t.\0.\n");


	
	if ($setted=="0" && $key >= "2" && strpos($trimmed,$trimmed2)!== false) {
		 echo '<h1 class="dotted">Donáška (denné menu)</h1>';
		 echo "<h2>DONÁŠKA DENNÉHO MENU - 0,60 €. PRI OBJEDNÁVKE 3 A VIAC MENU - DONÁŠKA ZADARMO.</h2>";
		 $setted = "1";
	}
	if ($key >= "2" && $value == $today_products_name[0]) {
     echo '<h1 class="dotted">Donáška (denné menu)</h1>';
	 echo "<h2>DONÁŠKA DENNÉHO MENU - 0,60 €. PRI OBJEDNÁVKE 3 A VIAC MENU - DONÁŠKA ZADARMO.</h2>";
   }
	 echo '		    						<li class="menu-item menu-item__featured clearfix">	
		    							<div class="item-body">
		    								<div class="item-excerpt"><h3 style="width:400px;">'.$value.'</h3></div>
		    							</div>
		    							<div class="item-meta">
		    							
	    									<span class="item-price">&nbsp;&nbsp;&nbsp;'.$today_products_price[$key].'</span>
	    								</div>
		    						</li>
		 ';
}

mysqli_close($link);
?>	
		    					</ul>
		    				
		    					<!-- Menu Small Thumbs / End -->
		    				</div>
		    			</div>
	    			</div>
	    		</div>
	    		<!-- Primary Content / End -->
	    		<!-- Sidebar -->
	    		<aside class="grid_3">
	    								<div class="widget-categories widget widget__sidebar">
						<div class="title-wrap title-wrap__smallest">
							<h2>Objednávka</h2>
						</div>
						<div class="widget-content">
							<span>Objednávka denného menu na tel. čísle <strong>055 62 50 172</strong></span>
						</div>
					</div>

	    		</aside>
	    		<!-- Sidebar / End -->
	    	</div>
    	</div>