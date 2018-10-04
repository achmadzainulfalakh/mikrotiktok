<?php session_start();
	include "include/driver-api.php";
	include "include/header.php"; 
	
?>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-dashboard"></i> Interface List</h1>
			<p>List</p>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item"><a href="#">Interface</a></li>
		</ul>
	</div>
	<!--Content-->
	<div class="row">
		<div class="col-lg-12">
			<div class="tile">
				<div class="tile-body" >
					<h3>Interface List</h3>
					<div class="bs-component">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#interface">Interface</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#interface-list">Interface List</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#interface-ethernet">Ethernet</a></li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade active show" id="interface">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Type</th>
											<th>Actual MTU</th>
											<th>L2MTU</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/interface');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('name') ?></td>
												<td><?php print $item->getProperty('type') ?></td>
												<td><?php print $item->getProperty('actual-mtu') ?></td>
												<td><?php print $item->getProperty('l2mtu') ?></td>
												</tr><?php
											}
										?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="interface-list">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Include</th>
											<th>Exclude</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/interface list');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('name') ?></td>
												<td><?php print $item->getProperty('include') ?></td>
												<td><?php print $item->getProperty('exclude') ?></td>
												</tr><?php
											}
										?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="interface-ethernet">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>MTU</th>
											<th>MAC Address</th>
											<th>ARP</th>
											<th>Switch</th>
										</tr>
									</thead>	
									<?php 
										
										$util->setMenu('/interface ethernet');
										
										foreach ($util->getAll() as $item) {							
										?>
										<tbody>
											<tr>
												<td> </td>
												<td><?php print $item->getProperty('name') ?></td>
												<td><?php print $item->getProperty('mtu') ?></td>
												<td><?php print $item->getProperty('mac-address') ?></td>
												<td><?php print $item->getProperty('arp') ?></td>
												<td><?php print $item->getProperty('switch') ?></td>
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

