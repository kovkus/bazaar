<div id="content-wrapper" class="content-wrapper">
	    	<div class="container clearfix">
	    		<!-- Primary Content -->
	    		<div class="grid_9">
	    			<div class="indent">
	    				<div class="box">
		    				<div class="box-inner">
		    					<h1 class="dotted"><?php 
		    						switch ($_GET['category']) {
		    							case '1':
		    								echo "Pizza";
		    								break;
		    							case '2':
		    								echo "Maxi Pizze";
		    								break;
		    							case '3':
		    								echo "Hamburgery";
		    								break;
		    							case '4':
		    								echo "Cestoviny/Omáčky";
		    								break;
		    							case '5':
		    								echo "Šaláty";
		    								break;
		    							case '6':
		    								echo "Minútky";
		    								break;
		    							case '7':
		    								echo "Nápoje";
		    								break;
		    							default:
		    								echo "Pizza";
		    								break;
		    						}
		    					 ?></h1>
		    					
		    					<!-- Menu Small Thumbs -->
		    					<ul class="menu menu__list unstyled">
		    					<?php
require "config.php";

  if (!$_GET['category']) {
     $id_cat = "1";
     }
     else {
     $id_cat = $_GET['category'];
     }
$query = "SELECT * FROM products WHERE id_cat = $id_cat";
if ($result = mysqli_query($link, $query)) {
    if ($id_cat=="2") {
    	 while ($row = mysqli_fetch_assoc($result)) {
			require "pages/switch.php";
    	 	if ($row[id]=="31") $contains = "<span class='tipsy-link' title='paradajková omáčka, syr, šunka, kukurica'>1/4 Bolero,</span> <span class='tipsy-link' title='paradajková omáčka, syr, niva, klobása'>1/4 Paesana,</span> <span class='tipsy-link' title='paradajková omáčka, syr, kuracie mäso, kápia,,vajce,kukurica'>1/4 Pollo,</span> <span class='tipsy-link' title='paradajková omáčka, syr, šunka, šampiňóny'>1/4 Romana";
			if ($row[id]=="32") $contains = "<span class='tipsy-link' title='paradajková omáčka, syr, šunka, kukurica'>1/2 Bolero,</span> <span class='tipsy-link' title='paradajková omáčka, syr, šunka, ananás'>1/2 Hawai";
			if ($row[id]=="33") $contains = "<span class='tipsy-link' title='paradajková omáčka, syr, kuracie mäso v kari marináde s medom, šampiňóny'>1/2 Desperado,</span> <span class='tipsy-link' title='paradajková omáčka, syr, cibuľa, saláma, slanina, kukurica, niva, feferóny'>1/2 Bazaar";
			if ($row[id]=="34") $contains = "<span class='tipsy-link' title='paradajková omáčka, syr, šunka, paradajky, paprika, olivy'>1/2 Enrico,</span> <span class='tipsy-link' title='paradajková omáčka, syr, šunka, ananás'>1/2 Hawai";
			if ($row[id]=="35") $contains = "<span class='tipsy-link' title='paradajková omáčka, syr, šunka, kukurica'>1/2 Bolero,</span> <span class='tipsy-link' title='paradajková omáčka, syr, šunka, šampiňóny'>1/2 Romana";
			if ($row[id]=="36") $contains = "<span class='tipsy-link' title='paradajková omáčka,syr, kuracie mäso v kari marináde s medom, ananás'>1/2 Verona,</span> <span class='tipsy-link' title='paradajková omáčka, syr, klobása, slanina, šampióny, cibuľa, niva'>1/2 Campagna (Gazdovská)";
       		if ($row[id]=="37") $contains = "<span class='tipsy-link' title='smotanová omáčka, 2 druhy syra, šunka, slanina, kukurica,'>1/2 Aida,</span> <span class='tipsy-link' title='smotanová omáčka, syr, brokolica, kukurica, olivy, oregáno'>1/2 Light";
       		if ($row[id]=="38") $contains = "<span class='tipsy-link' title='paradajková omáčka, syr, cibuľa, saláma, slanina, kukurica, niva, feferóny'>1/4 Bazaar,</span> <span class='tipsy-link' title='paradajková omáčka, syr, šunka, paradajky, paprika, olivy'>1/4 Enrico, </span><span class='tipsy-link' title='paradajková omáčka, syr, šunka, paradajky, paprika, olivy'>1/4 Gazdovská, </span><span class='tipsy-link' title='paradajková omáčka,syr, kuracie mäso v kari marináde s medom, ananás'>1/4 Verona</span>";
       		
       		 echo '		    						<li class="menu-item menu-item__featured clearfix">	
		    							<div class="item-body">
		    								<h3>'.$row[name].'</h3>
		    								<span>'.$row[height].$type_height.'</span>
		    								<div class="item-excerpt">'.$contains.'</div>
		    							</div>
		    							<div class="item-meta">
	    									<span class="item-price">&nbsp;&nbsp;&nbsp;'.$row[price].' €</span>
	    									<a href="#">
	    										<button id="but_'.$row[id].'" onClick="addProduct('.$row[id].')">Objednať!</button>
	    									</a>
	    								</div>
		    						</li>
		 ';
   		 }
    }
    else {
   		 while ($row = mysqli_fetch_assoc($result)) {
   		 	require "pages/switch.php";
   		 	if ($row[id_cat] == "3") {
   		 		$display = "display:none";
   		 	}
       		 echo '		    						<li class="menu-item menu-item__featured clearfix">	
		    							<div class="item-body">
		    								<h3>'.$row[name].'</h3>
		    								<span style="'.$display.'">'.$row[height].$type_height.'</span>
		    								<div class="item-excerpt">'.$row[contains].'</div>
		    							</div>
		    							<div class="item-meta">
	    									<span class="item-price">&nbsp;&nbsp;&nbsp;'.$row[price].' €</span>
	    									
	    										<button id="but_'.$row[id].'" onClick="addProduct('.$row[id].')">Objednať!</button>
	    									
	    								</div>
		    						</li>
		 ';
   		 }
	}
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

							<button style="float:left" onClick="cancel()">STORNO</button>
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