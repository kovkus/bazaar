<?php
session_start();
?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Bazaar Košice</title>
	<meta name="description" content="pizza,obedy,menu,kosice">
	<meta name="author" content="David Kovac">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/normalize.css" media="screen" />
	<link rel="stylesheet" href="css/skeleton.css" media="screen" />
	<link rel="stylesheet" href="css/base.css" media="screen" />
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<link rel="stylesheet" href="css/superfish.css" media="screen" />
	<link rel="stylesheet" href="css/prettyPhoto.css" media="screen" />
	<link rel="stylesheet" href="css/flexslider.css" media="screen" />
	<link rel="stylesheet" href="css/reveal.css" media="screen" />
	<link rel="stylesheet" href="css/datePicker.css" media="screen" />
	<link rel="stylesheet" href="css/responsive.css" media="screen" />
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie/ie8.css" media="screen" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">	
	<script src="js/jquery-1.9.1.min.js"></script>
	<script>
		
        function addProduct(id) {
        	var dataString = {id_product: id};
        	var but_id = id;
        	$.ajax({  
            type: "POST",  
            url: "cart/add_product.php",  
            data: dataString
        	}).done(function(data) {
        		 $("#but_"+but_id+"").addClass('greenbutton');
        		 document.getElementById("but_"+but_id+"").innerHTML="pridané";

        		 setInterval(function() {
        		 	 $("#but_"+but_id+"").removeClass('greenbutton');
        		 	 document.getElementById("but_"+but_id+"").innerHTML="Objednať!";
        		 }, 1000);
        		 $('.cart').load("cart/cart.php").fadeIn();
        		 $("#res-submit").show();
        		 $(".ordercancel").show();
        		 setTimeout (function(){
        		 	$('.li_product').tipsy({gravity: 'w'});
        		 },500);
        	});
        }     
        function sendOrderProceed() {
        	var sopName = document.getElementById("sop_name").value;
        	var sopAddress = document.getElementById("sop_address").value;
        	var sopTelephone = document.getElementById("sop_telephone").value;
        	var sopPayment = document.getElementById("sop_payment").value;
        	var sopNote = document.getElementById("sop_note").value;
        	var dataString = {sopname: sopName,sopadress: sopAddress,soptelephone: sopTelephone,soppayment: sopPayment,sopnote: sopNote};
        	$.ajax({  
            type: "POST",  
            url: "cart/send_order.php",  
            data: dataString
        	}).done(function(data) {
        		

        	$('.accent-box-page__left-inner').load("cart/ok.php").fadeIn();
        	$('.cancelbutton').hide();
        	});
        }
        function cancel() {
        	$('.cart').load("cart/cancel.php").fadeIn();
        	$("#res-submit").hide();
        	$(".ordercancel").hide();
        }
        function finalCancel() {
        	$('.final_cart').load("cart/cancel.php").fadeIn();
        	$("#res-submit").hide();
        	$(".cancelbutton").hide();
        }
        function sendOrder() {
        	document.location = "index.php?page=send_order";
        }
         $(document).ready(function() {
   			$('.cart').load("cart/cart.php").fadeIn();
   			$('.final_cart').load("cart/final_cart.php").fadeIn();
   			 setTimeout (function(){
        		 	$('.li_product').tipsy({gravity: 'w'});

        		 	if ($('.widget-content > span.cart:contains("Vaša objednávka je prázdna.")').length > 0) {
			    $("#res-submit").hide();
			    $(".ordercancel").hide();
				}
				if ($('.accent-box-page__right-inner > span.final_cart:contains("Vaša objednávka je prázdna.")').length > 0) {
			    $("#res-submit").hide();
				}
        		 },500);
   			 
 		});

	</script>
</head>

<body>
	<div id="wrapper">
		<header id="header" class="header">
			<div class="container clearfix">
				<div class="grid_12">
					<a href="#menu" class="menu-link">Menu</a>
					<nav id="menu" class="primary clearfix" role="navigation">
						<ul class="sf-menu">
							<li><a href="index.php">Domov</a></li>
							<li class="midsection"><a href="?page=order">Objednávka</a></li>
							<li><a href="?page=gallery">Galéria</a></li>
							<li><a href="?page=contact">Kontakt</a></li>
						</ul>
					</nav>
					<div id="logo">
						<a href="index.php"><img src="images/logo.png" width="136" height="140"/></a>
					</div>
					<div id="slogan" class="slogan">
						<div class="slogan-inner">PIZZERIA & RESTAURANT</div>
					</div>
				</div>
			</div>
			
		</header>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
     if (!$_GET['page']) {
      include "pages/intro.php";
     }
     else {
     include "pages/".$_GET['page'].".php";
     }
    ?>
			<!-- Banners -->
			<div class="banners-wrap">
				<div class="container clearfix">

					<div class="grid_7" style="margin-left:20%">
						
						<!-- Gift a Dinner -->
						<div class="action-btn-holder block action-btn-holder__banner action-btn-holder__right">
							<a href="?page=order" class="action-btn block">
								<span class="txt-wrapper">
									<span class="highlight">objednávka</span>
									<!-- Stars (Default) -->
									<span class="stars-default">
										<i class="star star__first"></i>
										<i class="star star__second star__big"></i>
										<i class="star star__third"></i>
									</span>
									<!-- Stars (Default) / End -->
									<!-- Stars (Active) -->
									<span class="stars-active">
										<i class="star star__first"></i>
										<i class="star star__second star__big"></i>
										<i class="star star__third"></i>
									</span>
									<!-- Stars (Active) / End -->
								</span>
								<i class="ico ico-pizza"></i>
								<i class="ico ico-pizza ico-pizza__alt"></i>
							</a>
							<span class="action-btn-back"></span>
						</div>
						<!-- Gift a Dinner / End -->
						
					</div>
				</div>
			</div>
			<!-- Banners / End -->
			
			
		
		<!-- Back to Top -->
		<div class="back-to-top">
			<div class="container clearfix">
				<div class="grid_12">
					<div class="back-to-top-inner">
						<a href="#" id="to-top"><span class="arrow-up"></span>hore</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Back to Top / End -->
		
		
		<!-- Footer
    	================================================================ -->
		<footer id="footer" class="footer">
			
			<!-- Footer Widgets -->
			<div class="footer-widgets">
				<div class="container clearfix">
					
					<div class="grid_2">
						<!-- Pages Widget -->
						<div class="widget-pages widget widget__footer">
							<h3 class="widget-title">navigácia</h3>
							<div class="widget-content">
								<ul>
									<li><a href="index.php">Domov</a></li>
									<li><a href="?page=order">Objednávka</a></li>
									<li><a href="?page=gallery">Fotogaléria</a></li>
									<li><a href="?page=contact">Kontakt</a></li>
								</ul>
							</div>
						</div>
						<!-- Pages Widget / End -->
					</div>
					<div class="grid_2">
						<!-- Social Widget -->
						<div class="widget-social widget widget__footer">
							<h3 class="widget-title">Facebook</h3>
							<div class="widget-content">
								
							</div>
						</div>
						<!-- Social Widget / End -->
					</div>
					<div class="grid_3">
						<!-- Contacts Widget -->
						<div class="widget-contacts widget widget__footer">
							<h3 class="widget-title">kontakt</h3>
							<div class="widget-content">
								<ul class="contacts-list">
									<li class="phone">
										<span class="name">Telefón:</span>
										055 62 50 172<br>
										0911 448 875
									</li>
									<li class="email">
										<span class="name">e-mail:</span>
										<a href="mailto:kancelaria@bazaar-pizza.sk">kancelaria@bazaar-pizza.sk</a>
									</li>
									<li class="address">
										Alžbetina 15,<br>
										040 01,<br>
										Košice
									</li>
								</ul>
							</div>
						</div>
						<!-- Contacts Widget / End -->
					</div>
					<div class="grid_5 colborder">
						<div class="prefix_1" >
							<!-- Copyright -->
							<div class="copyright" style="color:#eedec4">
								Copyright &copy; 2013, Bazaar Pizza. All rights reserved. 
								<div class="clearfix">
									<div class="fright" style="color:#eedec4;">By: <a href="#" style="color:#eedec4">Dávid Kováč</a></div>
								</div>
							</div>
							<!-- Copyright / End -->
							
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Widgets / End -->	
			
			
		</footer>
		<!-- Footer / End -->
		
	</div>
	<!-- Wrapper / End -->
	
	
	<!-- Javascript Files
	================================================== -->
	
	<!-- initialize jQuery Library -->
	<script src="js/jquery-1.9.1.min.js"></script>
	<!-- Modernizr -->
	<script src="js/modernizr.custom.14583.js"></script>
	<!-- jQuery migrate plugin -->
	<script src="js/jquery-migrate-1.1.1.min.js"></script>
	<!-- easing plugin -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider.js"></script>
	<!-- Prettyphoto -->
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- Main Navigation Script (superfish) -->
	<script src="js/jquery.superfish.js"></script>
	<!-- Reveal Popup -->
	<script src="js/jquery.reveal.js"></script>
	<!-- Datepicker -->
	<script src="js/date.js"></script>
	<script src="js/jquery.datePicker.js"></script>
	<!-- Dropkick -->
	<script src="js/jquery.dropkick-1.0.0.js"></script>
	<!-- Tipsy -->
	<script src="js/jquery.tipsy.js"></script>
	<!-- Carousel -->
	<script src="js/jquery.carouFredSel-6.2.1.js"></script>
	<!-- Isotope -->
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.imagesloaded.min.js"></script>
	<!-- Forms -->
	<script src="js/jquery.form.js"></script>

	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.ui.map.js"></script>
	<!-- Google Map Init-->
	<script type="text/javascript">
		jQuery(function($){
			//getter
			var zoom= $('#map_canvas').gmap('option', 'zoom');
			
			$('#map_canvas').gmap().bind('init', function(ev, map) {
				$('#map_canvas').gmap('addMarker', {'position': '48.719931,21.256214', 'bounds': true});
				$('#map_canvas').gmap('option', 'zoom', 17);
			});
		});
		</script>
	<!-- Custom -->
	<script src="js/custom.js"></script>
	
</body>
</html>