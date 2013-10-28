
			<div>
				<a href="index2.php"><button class="btn btn-primary">Obnoviť</button></a>
			</div>
			
			<div class="row-fluid ">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Objednávky</h2>
						
					</div>
					<div class="box-content">
						<?php 
						if ($_GET['success'] == "1") {
							//$orderid = $_GET['orderid'];
							require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
							//$query = "UPDATE 'orders' SET 'status' = '1' WHERE 'id' = '$id';";
							$id = mysqli_real_escape_string($link,$_GET['orderid']);
							$query = "UPDATE `bazaar`.`orders` SET `status` = '1' WHERE `orders`.`id` = $id;";
							mysqli_query($link, $query) or die(mysqli_error($link));
							echo '
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Objednávka bola označená ako vybavená!</strong>
						</div>';
						}
						?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Meno</th>
								  <th>Čas</th>
								  <th>Status</th>
								  <th>Akcie</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
<?php 
							require "/Applications/XAMPP/xamppfiles/htdocs/david/bazaar/config.php";
							$query = "SELECT * FROM orders ORDER BY time DESC";
							if ($result = mysqli_query($link, $query)) {
								while ($row = mysqli_fetch_assoc($result)) {
								if ($row[status] =="0") {
									$status = '<span class="label label-important">NEVYBAVENÁ</span>';
								}
								elseif ($row[status] == "1") {
									$status = '<span class="label label-success">VYBAVENÁ</span>';
								}
								$time = strftime("%T",$row[time]);
	 							echo '<tr>
								<td>'.$row[name].'</td>
								<td class="center">'.$time.'</td>
								<td class="center">
									'.$status.'
								</td>
								<td class="center">
									<a class="btn btn-success" href="?page=order&id='.$row[id].'">
										<i class="icon-zoom-in icon-white"></i>  
										Zobraziť                                           
									</a>
								</td>
							</tr>';
					        	}
							} 
							
?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->