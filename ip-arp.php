<?php session_start();
	include "include/header.php"; ?>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-dashboard"></i> Blank Page</h1>
			<p>Start a beautiful journey here</p>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item"><a href="#">Blank Page</a></li>
		</ul>
	</div>
	<!--Content-->
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<div class="tile-body" >
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>address</th>
								<th>mac-address</th>
							</tr>
						</thead>	
						<?php 
							$host=$_SESSION["host"];
							$username=$_SESSION["username"];
							$password=$_SESSION["password"];
							use PEAR2\Net\RouterOS;
							require_once 'Net_RouterOS/PEAR2_Net_RouterOS-1.0.0b6.phar';
							$util = new RouterOS\Util(
							$client = new RouterOS\Client($host, $username, $password)
							);
							$util->setMenu('/ip arp');
							
							foreach ($util->getAll() as $item) {							
							?>
							<tbody>
								<tr>
									<td> </td>
									<td><?php print $item->getProperty('address') ?></td>
									<td><?php print $item->getProperty('mac-address') ?></td>
									</tr><?php
								}
							?>
						</tbody>
					</table>
					
					
					
				</div>
			</div>
		</div>
	</div>
	<!--/Content-->
	
</main>
<?php include "include/footer.php"; ?>

