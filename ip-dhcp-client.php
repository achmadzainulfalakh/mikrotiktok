<?php session_start();
	include "include/driver-api.php";
	include "include/header.php"; 
	
?>
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
		<div class="col-lg-12">
			<div class="tile">
				<div class="tile-body" >
					<h3>DHCP Client</h3>
					<div class="bs-component">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dhcp-client">DHCP Client</a></li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade active show" id="dhcp-client">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Interface</th>
											<th>IP Address</th>
											<th>Use Peer DNS</th>
											<th>Add Default Route</th>
											<th>Status</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/ip dhcp-client');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('interface') ?></td>
												<td><?php print $item->getProperty('address') ?></td>
												<td><?php print $item->getProperty('use-peer-dns') ?></td>
												<td><?php print $item->getProperty('add-default-route') ?></td>
												<td><?php print $item->getProperty('status') ?></td>
												</tr><?php
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<!--/Content-->

</main>
<?php include "include/footer.php"; ?>

