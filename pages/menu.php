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
foreach ($today_products_name as $key => $value) {
	if ($key >= "2" && $value == $today_products_name[0]) {
       echo '<h1 class="dotted">Donáška</h1>';
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
							<span class="cart"></span>
							<br>
							<div class="submit-button-wrap clearfix">
									<div class="fright action-btn-holder action-btn-holder__small action-btn-holder__warning">
										<input type="button" name="send_order" id="res-submit" onClick="sendOrder()"value="objednať" class="action-btn"/>
									</div>
								</div>

							<button class="ordercancel" style="float:left" onClick="cancel()">STORNO</button>
						</div>
					</div>
	    			<div class="widget-categories widget widget__sidebar">
						<div class="title-wrap title-wrap__smallest">
							<h2>Kategórie</h2>
						</div>
						<div class="widget-content">
						 	<ul>
								<li><a href="?page=order&category=1">Pizza</a></li>
								<li><a href="?page=order&category=2">Maxi Pizze</a></li>
								<li><a href="?page=order&category=3">Hamburgery</a></li>
								<li><a href="?page=order&category=4">Cestoviny/Omáčky</a></li>
								<li><a href="?page=order&category=5">Šaláty</a></li>
								<li><a href="?page=order&category=6">Minútky</a></li>
								<li><a href="?page=order&category=7">Nápoje</a></li>
							</ul>
						</div>
					</div>

	    		</aside>
	    		<!-- Sidebar / End -->
	    	</div>
    	</div>