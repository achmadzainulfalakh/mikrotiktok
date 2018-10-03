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
					<h3>DHCP Server</h3>
					<div class="bs-component">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dhcp">DHCP</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#network">Network</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#leases">Leases</a></li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade active show" id="dhcp">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Insterface</th>
											<th>Lease Time</th>
											<th>Address Pool</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/ip dhcp-server');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('name') ?></td>
												<td><?php print $item->getProperty('interface') ?></td>
												<td><?php print $item->getProperty('lease-time') ?></td>
												<td><?php print $item->getProperty('address-pool') ?></td>
												</tr><?php
											}
										?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="network">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Address</th>
											<th>Gateway</th>
											<th>DNS Server</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/ip dhcp-server network');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('address') ?></td>
												<td><?php print $item->getProperty('gateway') ?></td>
												<td><?php print $item->getProperty('dns-server') ?></td>
												</tr><?php
											}
										?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="leases">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Address</th>
											<th>MAC Address</th>
											<th>Server</th>
											<th>Status</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/ip dhcp-server lease');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('address') ?></td>
												<td><?php print $item->getProperty('mac-address') ?></td>
												<td><?php print $item->getProperty('server') ?></td>
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
	<!--/Content-->
	
</main>
<?php include "include/footer.php"; ?>

