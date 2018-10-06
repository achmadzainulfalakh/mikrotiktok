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
					<h3>Hotspot</h3>
					<div class="bs-component">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#server-profile">Server Profile</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">User</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user-profile">User Profile</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#active">Active</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hosts">Hosts</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ip-binding">IP Binding</a></li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade active show" id="server-profile">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Hotspot Address</th>
											<th>DNS Name</th>
											<th>HTML Directory</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/ip hotspot profile');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('name') ?></td>
												<td><?php print $item->getProperty('hotspot-address') ?></td>
												<td><?php print $item->getProperty('dns-name') ?></td>
												<td><?php print $item->getProperty('html-directory') ?></td>
												</tr><?php
											}
										?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="port">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Interface</th>
											<th>Bridge</th>
											<th>Port Number</th>
											<th>Auto Isolate</th>
											<th>Point to Point</th>
											<th>Role</th>
											<th>Path Cost</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/interface bridge port');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('interface') ?></td>
												<td><?php print $item->getProperty('bridge') ?></td>
												<td><?php print $item->getProperty('port-number') ?></td>
												<td><?php print $item->getProperty('auto-isolate') ?></td>
												<td><?php print $item->getProperty('point-to-point') ?></td>
												<td><?php print $item->getProperty('role') ?></td>
												<td><?php print $item->getProperty('path-cost') ?></td>
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

