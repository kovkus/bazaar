<?php 
session_start();
$log = $_SESSION['logged'];
if (!$log == "1") {
	die();
	echo "WRONG WAY GUY!!";
}
?>
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
						if ($_GET['order_success'] == "1") {
							require "/data/b/a/bazaar-pizza.sk/web/config.php";
							$id = mysqli_real_escape_string($link,$_GET['orderid']);
							$time = time();
							$query = "UPDATE `ozxuu2e3`.`orders` SET `order_status` = '1', `order_status_time` = '$time' WHERE `orders`.`id` = $id;";
							mysqli_query($link, $query) or die(mysqli_error($link));
							echo '
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Objednávka bola označená ako vybavená!</strong>
						</div>';
						}
						if ($_GET['send_success'] == "1") {
							require "/data/b/a/bazaar-pizza.sk/web/config.php";
							$id = mysqli_real_escape_string($link,$_GET['orderid']);
							$time = time();
							$query = "UPDATE `ozxuu2e3`.`orders` SET `send_status` = '1', `send_status_time` = '$time' WHERE `orders`.`id` = $id;";
							mysqli_query($link, $query) or die(mysqli_error($link));
							echo '
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Objednávka bola označená ako expedovaná!</strong>
						</div>';
						}
						?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Meno</th>
								  <th>Čas</th>
								  <th>Status</th>
								  <th></th>
								  <th>Akcie</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
						<?php 
							require "/data/b/a/bazaar-pizza.sk/web/config.php";
							$cas = date('d.m.Y');
							$vcerajsi = date('d.m.Y',strtotime("-1 days"));
							$vcerajsi_unix = strtotime($vcerajsi);
							//echo $vcerajsi_unix; 
							$query = "SELECT * FROM orders WHERE time >= $vcerajsi_unix ORDER BY time DESC";
							if ($result = mysqli_query($link, $query)) {
								while ($row = mysqli_fetch_assoc($result)) {
								if ($row[order_status] =="0") {
									$order_status = '<span class="label label-important">NEVYBAVENÁ</span>';
								}
								elseif ($row[order_status] == "1") {
									$order_status = '<span class="label label-success">VYBAVENÁ</span>';
								}
								if ($row[send_status] =="0") {
									$send_status = '<span class="label label-important">NEODOSLANÁ</span>';
								}
								elseif ($row[send_status] == "1") {
									$send_status = '<span class="label label-success">EXPEDOVANÁ</span>';
								}
								$time = strftime("%T",$row[time]);
	 							echo '<tr>
								<td>'.$row[name].'</td>
								<td class="center">'.$time.'</td>
								<td class="center">
									'.$order_status.'
								</td>
								<td class="center">
									'.$send_status.'
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