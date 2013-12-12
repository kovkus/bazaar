		<div class="container clearfix">
			<div class="grid_12">
				<div class="accent-box accent-box__big accent-box__slider">
					<div class="accent-box-inner">
						<div id="flexslider" class="slider">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<img src="images/threeandone.png" />
									</li>
									<li>
										<img src="images/concerts.png" />
									</li>
									<li>
										<img src="images/10_16__12.png" />
									</li>
								</ul>
							</div>
						</div>
						
						<!-- Intro -->
						<section class="intro">
							<br><br><br><h1><strong class="big">Vitajte</strong> v <span class="highlight">Pizza Bazaar</span></h1>
							<div class="desc"> 
							</div>
						</section>
						<!-- Intro / End -->
					</div>
				</div>
			</div>
		</div>
		<!-- Welcome Section / End -->
		
		
		<div class="spacer"></div>
		
		
		<!-- Content
    	================================================================ -->
		<div id="content-wrapper" class="content-wrapper">
			
			<!-- Primary Content -->
			<div class="container">
				<div class="clearfix">
					<div class="grid_9">
						<!-- Title -->
						<div class="title-wrap">
							<h2>O nás...</h2>
						</div>
						<!-- /Title -->
						<!-- Recent Post -->
						<ul class="recent-posts">
							<li class="grid_3 alpha">
								<h4><a href="#">BAZAAR PUB</a></h4>
								<div class="excerpt" style="text-align:justify;">
									Pivničné priestory nášho zariadenia sú ako stvorené pre stretnutia priateľov dobrého piva, jedla a zábavy. Projetor a veľkoplošné plátno sa stali obľúbené pri sledovaní všetkých významných športových prenosov. Vystúpenia  kapiel sa stali už tradičnou súčasťou hudoných večerov.
								</div>
							</li>
							<li class="grid_3">
								<h4><a href="#">BAZAAR TERAZZA</a></h4>
								<div class="excerpt" style="text-align:justify;">
									Vo vnútornom priestore dvora sa nachádza reštaurácia, kde si môžete v pokoji vychutnať pizzu, šalát, hamburger alebo cestoviny. V nápojovom lístku nájdete dobrý aperitív, moravské vína alebo obľúbené coctaily a long drinky. Samozrejme, k relaxovému posedeniu patrí aj dobrá kávička.	
								</div>
							</li>
							<li class="grid_3 omega">
								<h4><a href="#">DONÁŠKOVÁ SLUŽBA</a></h4>
								<div class="excerpt" style="text-align:justify;">
									Už od roku 2006 je Vám k dispozícii aj donášková služba. V našej ponuke nájdete pizze, najväčší výber šalátov v Košiciach, minútky, cestoviny. Ako prvá donáška v meste sme Vám začali nosiť aj hamburgery. Pre stálu klientelu ponúkame aj rôzne formy zľavy.
								</div>
							</li>
						</ul>
						<!-- /Recent Post -->
					</div>
					<div class="grid_3">
						<!-- Title -->
						<div class="title-wrap">
							<h2 style="font-size:20px;">otváracie hodiny</h2>
						</div>
						<!-- /Title -->
						<!-- Schedule -->
						<div class="schedule">
							<?php
							include "open_close.php";
							?>
							<h5>Pondelok</h5>
							<ul class="unstyled">
								<li><span class="time"><?php echo $pondelok_od; echo ' - '; echo $pondelok_do;?></span></li>
							</ul>
							<h5>Utorok</h5>
							<ul class="unstyled">
								<li><span class="time"><?php echo $utorok_od; echo ' - '; echo $utorok_do;?></span></li>
							</ul>
							<h5>Streda</h5>
							<ul class="unstyled">
								<li><span class="time"><?php echo $streda_od; echo ' - '; echo $streda_do;?></span></li>
							</ul>
							<h5>Štvrtok</h5>
							<ul class="unstyled">
								<li><span class="time"><?php echo $stvrtok_od; echo ' - '; echo $stvrtok_do;?></span></li>
							</ul>
							<h5>Piatok</h5>
							<ul class="unstyled">
								<li><span class="time"><?php echo $piatok_od; echo ' - '; echo $piatok_do;?></span></li>
							</ul>
							<h5>Sobota</h5>
							<ul class="unstyled">
								<li><span class="time"><?php echo $sobota_od; echo ' - '; echo $sobota_do;?></span></li>
							</ul>
							<h5>Nedeľa</h5>
							<ul class="unstyled">
								<li><span class="time"><?php echo $nedela_od; echo ' - '; echo $nedela_do;?></span></li>
							</ul>
						</div>
						<!-- /Schedule -->
					</div>
				</div>
			</div>
			<!-- Primary Content / End -->
			
			
			